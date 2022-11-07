<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view role')->only(['index', 'show']);
        $this->middleware('permission:add role')->only(['create', 'store']);
        $this->middleware('permission:edit role')->only(['edit', 'update']);
        $this->middleware('permission:delete role')->only(['delete']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();

        return view('role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validRoleData = $request->validate([
            'name' => 'required'
        ]);

        $role = Role::create($validRoleData);

        if ($request->has('permissions')) {
            $permissions = $request->permissions;
            $role->syncPermissions($permissions);
        }

        return redirect()->route('role.index')->with('success', 'Role created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('role.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('role.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $validRoleData = $request->validate([
            'name' => 'required'
        ]);

        $role->update($validRoleData);

        if ($request->has('permissions')) {
            $permissions = $request->permissions;
            $role->syncPermissions($permissions);
        } else {
            foreach ($role->permissions as $permission) {
                $role->revokePermissionTo($permission);
            }
        }


        return redirect()->route('role.index')->with('success', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        foreach ($role->permissions as $permission) {
            $role->revokePermissionTo($permission);
        }

        $role->delete();
        return redirect()->route('role.index')->with('success', 'Role deleted successfully');
    }
}
