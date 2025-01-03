<?php

namespace App\Http\Middleware;

use App\Models\Role;
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
        $role = Role::has('permissions')->where('id', auth()->user()->role_id)->first();

        if(!$role){
            return response()->json([
                'message' => 'No role'
            ], 403);
        }


        $permissions = $role->permissions->pluck('name')
        ->toArray();

        if (!in_array($permission, $permissions)) {
            return response()->json([
                'message' => 'You do not have permission to access this resource'
            ], 403);
        }
        
        return $next($request);
    }
}
