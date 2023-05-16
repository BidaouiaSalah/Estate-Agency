<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgentController extends Controller
{
    public function index()
    {
        $agents = User::role('agent')->paginate(5);

        return view('admin.agents.index', compact('agents'));
    }

    public  function destroy(Request $request)
    {
        User::find($request->agent)->delete();

        toast('Agent deleted successfully', 'success');

        return redirect()->back();
    }

    public function list()
    {
        $agents = User::role('agent')->paginate(5);

        return view('pages.agents', compact('agents'));
    }
}
