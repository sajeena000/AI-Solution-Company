<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $permission): Response
    {
        $permissions = \App\Models\Role::where('id', auth()->user()->role_id)
        ->first()
        ->permissions->pluck('name')
        ->toArray();

        if (!in_array($permission, $permissions)) {
            return response()->json([
                'message' => 'You do not have permission to access this resource'
            ], 403);
        }
        
        return $next($request);
    }
}
