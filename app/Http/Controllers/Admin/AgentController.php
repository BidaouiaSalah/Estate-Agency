<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class agentController extends Controller
{
    public function index()
    {
        $users = User::role('agent')->get();

        return view('admin.agets.index', compact('agents'));
    }
}
