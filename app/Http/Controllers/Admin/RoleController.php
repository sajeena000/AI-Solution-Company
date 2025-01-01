<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::orderBy('name')->get();

        return view('admin.pages.role.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::orderBy('name')->get();
        return view('admin.pages.role.create', compact('permissions'));
    }


    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            // 'permissions.*' => 'required',
        ]);

        try {
            DB::beginTransaction();
            $data = ['name' => $request->name];
            $role = Role::where('name', $request->name)->first();
            if ($role) {
                $role->update();
            } else {
                $role = Role::create($data);
            }

            $role->permissions()->sync($request->permissions);
            DB::commit(); 
        } catch (Exception $e) {
            DB::rollback();
            Log::error($e);
            return back()->with('error', 'Something went wrong');
        }

        return redirect()->route('admin.role.index');
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::orderBy('name')->get();
        return view('admin.pages.role.edit', compact('role', 'permissions'));
    }


    public function destroy($id)
    {
        $role = Role::findOrFail($id); //return 404 if not found.
        $role->delete();
        return back();
    }

    public function userRole(Request $request, $id){
        $user = User::findOrFail($id);
        $user->role_id = $request->role_id;
        $user->save();
        return back();
    }
}
