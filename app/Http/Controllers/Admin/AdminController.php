<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data['admins'] = User::whereHas('roles',function($q){
            $q->where('role_id',1);
        })->get();
        return view('admin.admins.index',$data);
    }

    public function create(){
        return view('admin.admins.create');
    }

    public function store(Request $request) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'permissions' => 'nullable|array',
            'permissions.*' => 'in:'.implode(',',array_keys(config('constants.permissions'))),
            'super_admin' => 'nullable|boolean'
        ]);
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $data['email_verified_at'] = now();
        $data['super_admin'] = $request->has('super_admin') ? $request->super_admin : 0;
        $user = User::create($data);
        $user->assignRole('Admin');
        return redirect()->route('admin.admins.index')->with('success','Admin created successfully');
    }

    public function edit($id){
        $data['admin'] = User::find($id);
        return view('admin.admins.edit',$data);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'nullable|min:6',
            'permissions' => 'nullable|array',
            'permissions.*' => 'in:'.implode(',',array_keys(config('constants.permissions'))),
            'super_admin' => 'nullable|boolean'
        ]);

        $admin = User::findOrFail($id);
        $data = $request->all();

        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        } else {
            unset($data['password']);
        }

        $data['super_admin'] = $request->has('super_admin') ? $request->super_admin : 0;
        $admin->update($data);

        return redirect()->route('admin.admins.index')->with('success', 'Admin updated successfully');
    }
}
