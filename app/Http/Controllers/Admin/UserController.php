<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', '!=', 'client')->get();

        return view('admin.users.index', compact('users'));
    }

    public function destroy(Request $request)
    {
        $user = User::findOrFail($request->user)->delete();

        toast("User deleted Successfully", "success");

        return back();
    }

    public function profile()
    {
        return view('profile');
    }
}
