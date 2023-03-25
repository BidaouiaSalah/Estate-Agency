<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgentController extends Controller
{
    public function index()
    {
        $users = User::all();

        $agents = $users->hasRole('agent');

        return view('admin.agents.index', compact('agents'));
    }

    public function destroy(Request $request)
    {
        User::findOrFail($request->user)->delete();

        toast("User deleted Successfully", "success");

        return back();
    }

    public function profile()
    {
        return view('profile');
    }
}
