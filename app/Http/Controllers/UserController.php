<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;





class UserController extends Controller
{
    

    
    public function index()
    {
        return view('users.users', [
            'header' => 'Users Management',
            'users'  => User::all()
        ]);
    }

    public function form()
    {
        return view('users.form', [
            'header' => 'Add User',
        ]);
    }

   
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        session()->flash('status', 'Added User Successfuly!');

        return redirect('/users');
    }

   
    public function show($id)
    {
        $user = User::find($id);

        return view('users.form', [
            'header'    => 'Update User',
            'user'      => $user
        ]);
    }

    
    public function update(Request $request, $id)
    {
        // For Validation
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255']
        ]);

        $user = User::find($id);

        $user->update($request->all());

        session()->flash('status', 'Updated User Successfully!');

        return redirect('/users/update/' . $user->id);
    }

   
    public function delete($id)
    {
        User::where('id', '=', $id)->delete();
        return redirect()->back()->with('status', 'Deleted User Successfuly!');
    }

   
}
