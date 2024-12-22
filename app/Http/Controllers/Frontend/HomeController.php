<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Project;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function pricing()
    {
        return view('frontend.pages.pricing');
    }
    public function service()
    {
        return view('frontend.pages.service');
    }
    public function gallery()
    {
        return view('frontend.pages.gallery');
    }
    public function contact(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'nullable|string|max:15',
                'company' => 'nullable|string|max:255',
                'country' => 'nullable|string|max:255',
                'job_title' => 'nullable|string|max:255',
                'job_details' => 'nullable|string',
            ]);

            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->company = $request->company;
            $contact->country = $request->country;
            $contact->job_title = $request->job_title;
            $contact->job_details = $request->job_details;
            $contact->save();

            // Redirect back with a success message
            // Session::put('success', "messge");
            Session::flash('success', 'Your message has been sent successfully!');
            return redirect()->back();
        }

        // GET METHOD
        return view('frontend.pages.contact');
    }

    public function project()
    {
        $projects = Project::orderBy('year', 'DESC')->get();
        return view('frontend.pages.project', compact('projects'));
    }

    public function blogs()
    {
        $blogs = Blog::where('status', true)->orderBy('created_at', 'DESC')->paginate(6);
        return view('frontend.pages.blogs', compact('blogs'));
    }

    public function blogDetail($id)
    {
        $blog = Blog::where('id', $id)->where('status', true)->first();
        if (!$blog) {
            abort(404);
        }

        $previousBlog = Blog::where('status', true)->where('id', '<', $id)->first();
        $nextBlog = Blog::where('status', true)->where('id', '>', $id)->first();

        $latestBlogs = Blog::where('status', true)->whereNot('id', $id)->limit(3)->get();

        return view('frontend.pages.blog-single', compact('blog', 'latestBlogs', 'nextBlog', 'previousBlog'));
    }

    public function events()
    {
        $events = Event::where('date', '>=', now()->startOfDay())->orderBy('date', 'ASC')->get();
        return view('frontend.pages.events', compact('events'));
    }

    public function eventsDetail($id)
    {
        $event = Event::findOrFail($id);
        $upcomingEvents = Event::where('date', '>=', now()->startOfDay())->orderBy('date', 'ASC')->take(3)->get();
        return view('frontend.pages.event-single', compact('event', 'upcomingEvents'));
    }

    public function chatResponse(Request $request)
    {
        try {
            $contents = File::get(database_path('data/chatDataset.json'));
            $dataset = json_decode($contents, true);
            $query = strtolower(trim($request->get('query')));

            if (empty($query)) {
                return response()->json(['message' => 'Query cannot be empty'], 400);
            }

            // Initialize best match tracking
            $bestMatch = [
                'response' => null,
                'similarity' => 0,
            ];

            // Helper function for similarity calculation
            $calculateSimilarity = function ($str1, $str2) {
                $str1 = strtolower(trim($str1));
                $str2 = strtolower(trim($str2));

                // Exact match
                if ($str1 === $str2) {
                    return 1.0;
                }

                // One string contains the other
                if (str_contains($str1, $str2) || str_contains($str2, $str1)) {
                    return 0.8;
                }

                // Calculate word match similarity
                $words1 = array_filter(explode(' ', $str1), fn($word) => strlen($word) > 1);
                $words2 = array_filter(explode(' ', $str2), fn($word) => strlen($word) > 1);

                $matchingWords = array_intersect($words1, $words2);
                if (!empty($matchingWords)) {
                    return count($matchingWords) / max(count($words1), count($words2));
                }

                // Levenshtein distance as fallback
                $levDistance = levenshtein($str1, $str2);
                $maxLength = max(strlen($str1), strlen($str2));
                return $maxLength > 0 ? 1.0 - $levDistance / $maxLength : 0.0;
            };

            // Process each item in dataset
            foreach ($dataset as $item) {
                $similarity = $calculateSimilarity($query, $item['query']);

                if ($similarity > $bestMatch['similarity']) {
                    $bestMatch = [
                        'response' => $item['response'],
                        'similarity' => $similarity,
                    ];
                }
            }

            // Threshold for accepting a match
            $similarityThreshold = 0.6;

            // Return appropriate response
            if ($bestMatch['similarity'] >= $similarityThreshold) {
                return response()->json(
                    [
                        'data' => $bestMatch['response'],
                        'confidence' => round($bestMatch['similarity'] * 100, 2),
                    ],
                    200,
                );
            }

            // Check for common greetings if no good match found
            $commonGreetings = ['hi', 'hello', 'hey', 'good'];
            foreach ($commonGreetings as $greeting) {
                if (str_starts_with($query, $greeting)) {
                    return response()->json(
                        [
                            'data' => 'Hello! How can I assist you today?',
                            'confidence' => 70,
                        ],
                        200,
                    );
                }
            }

            // Fallback response
            return response()->json(
                [
                    'data' => "I'm not sure I understand. Could you please rephrase that?",
                    'confidence' => 0,
                ],
                200,
            );
        } catch (Exception $e) {
            return response()->json(
                [
                    'message' => 'An error occurred while processing your request',
                    'error' => $e->getMessage(),
                ],
                500,
            );
        }
    }
}

?>
