<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles:admin', ['except' => ['edit', 'update', 'show']]);
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $user = new User;
        $roles = Role::pluck('name', 'id');
        return view('users.create', compact('user', 'roles'));
    }

    public function store(CreateUserRequest $request)
    {
        $user = User::create($request->validated());
        $user->roles()->attach($request->roles);
        return redirect()->route('users.index')->with('status', 'El usuario fue creado correctamente');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->authorize($user);
        $roles = Role::pluck('name', 'id');
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $this->authorize($user);
        $user->update($request->validated());
        $user->roles()->sync($request->roles);
        return back()->with('status', 'El usuario fue actualizado correctamente');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $this->authorize($user);
        $user->delete();
        return redirect()->route('users.index')->with('status', 'El usuario fue eliminado correctamente');
    }
}
