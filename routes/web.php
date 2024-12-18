<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\EventController;

// use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// frontend routes 
Route::get('/',[HomeController::class,'index'])->name('frontend.home');
Route::get('/about',[HomeController::class,'about'])->name('frontend.about');
Route::get('/pricing',[HomeController::class,'pricing'])->name('frontend.pricing');
Route::get('/service',[HomeController::class,'service'])->name('frontend.service');
Route::get('/gallery',[HomeController::class,'gallery'])->name('frontend.gallery');

Route::get('/project',[HomeController::class,'project'])->name('frontend.project'); //Portfolio
Route::get('/blogs',[HomeController::class,'blogs'])->name('frontend.blogs');
Route::get('/blogs/{id}', [HomeController::class, 'blogDetail'])->name('frontend.blogs.detail');
Route::get('/blog-sidebar',[HomeController::class,'blogSidebar'])->name('frontend.blog-sidebar');
Route::get('/events',[HomeController::class,'events'])->name('frontend.events');
Route::get('/events/{id}',[HomeController::class,'eventsDetail'])->name('frontend.events.detail');

Route::match(['GET', 'POST'],'/contact',[HomeController::class,'contact'])->name('frontend.contact');

// chat route 
Route::get('/chat-response', [HomeController::class, 'chatResponse'])->name('frontend.chat-response');




// Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');  // Show the form
// Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');  // Handle form submission

// // admin routes
// Route::middleware('auth')->group(function () {
//    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
//    Route::get('admin/button', [DashboardController::class, 'button'])->name('admin.button');

// });

// Admin Routes - Protected by auth middleware
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
   Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

   Route::get('contact', [ContactController::class, 'index'])->name('contact');
   Route::post('contact/send-email/{id}', [ContactController::class, 'sendMail'])->name('contact.send-email');
   Route::delete('contact/delete/{id}', [ContactController::class, 'destroy'])->name('contact.delete');
   

   Route::get('project', [ProjectController::class, 'index'])->name('project');
   Route::get('project/create', [ProjectController::class, 'create'])->name('project.create');
   Route::post('project/store', [ProjectController::class, 'store'])->name('project.store');
   Route::get('project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
   Route::put('project/update/{id}', [ProjectController::class, 'update'])->name('project.update');
   Route::delete('project/delete/{id}', [ProjectController::class, 'destroy'])->name('project.delete');


   Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
   Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');
   Route::post('blogs/store', [BlogController::class, 'store'])->name('blogs.store');
   Route::get('blogs/edit/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
   Route::put('blogs/update/{id}', [BlogController::class, 'update'])->name('blogs.update');
   Route::delete('blogs/delete/{id}', [BlogController::class, 'destroy'])->name('blogs.delete');

   Route::get('events', [EventController::class, 'index'])->name('events.index');
    Route::get('events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('events/store', [EventController::class, 'store'])->name('events.store');
    Route::get('events/edit/{id}', [EventController::class, 'edit'])->name('events.edit');
    Route::put('events/update/{id}', [EventController::class, 'update'])->name('events.update');
    Route::delete('events/delete/{id}', [EventController::class, 'destroy'])->name('events.delete');
 

   Route::get('widget', [DashboardController::class, 'widget'])->name('widget');
   Route::get('button', [DashboardController::class, 'button'])->name('button');
   Route::get('404', [DashboardController::class, 'error'])->name('404');
   Route::get('blank', [DashboardController::class, 'blank'])->name('blank');
   Route::get('chart', [DashboardController::class, 'chart'])->name('chart');
   Route::get('element', [DashboardController::class, 'element'])->name('element');
   Route::get('form', [DashboardController::class, 'form'])->name('form');
   Route::get('table', [DashboardController::class, 'table'])->name('table');
   Route::get('typography', [DashboardController::class, 'typography'])->name('typography');
});

require __DIR__.'/auth.php';



