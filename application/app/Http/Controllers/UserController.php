<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Show the user dashboard
     *
     * @return \Illuminate\View\View
     */
    public function dashboard() {
        // get all the users
        $users = User::all();
        
        return view('admin.users.dashboard')->with('users', $users);
    }

    /**
     * Show the create user form
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('admin.users.create');
    }

    /**
     * Add a new user
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Request $request) {
        // validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            // Add other fields as necessary
        ]);

        // create the user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        // Add other fields as necessary
        $user->save();
        // redirect to the dashboard with success message
        return redirect()->route('admin.users.dashboard')->with('success', 'User added successfully');
    }

    /**
     * Edit a user
     *
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit(Request $request) {
        $user = User::find($request->id);
        if (!$user) {
            return redirect()->route('admin.users.dashboard')->with('error', 'User not found');
        }
        return view('admin.users.edit')->with('user', $user);
    }

     /**
     * Update a user
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request) {
        // validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255|unique:users',
            // Add other fields as necessary
        ]);

        // update the user
        $user = User::find($request->id);
        if (!$user) {
            return redirect()->route('admin.users.dashboard')->with('error', 'User not found');
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        // Add other fields as necessary
        $user->updated_at = now();

        $user->update();
        
        // redirect to the dashboard with success message
        return redirect()->route('admin.users.dashboard')->with('success', 'User updated successfully');
    }

    /**
     * Delete a user
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Request $request) {
        // delete the user
        $user = User::find($request->id);
        if (!$user) {
            return redirect()->route('admin.users.dashboard')->with('error', 'User not found');
        }
        $user->delete();
        
        // redirect to the dashboard with success message
        return redirect()->route('admin.users.dashboard')->with('success', 'User deleted successfully');
    }
}
