<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $latestProperties = Property::where('available', true)
            ->orderby('created_at', 'desc')
            ->limit(5)
            ->get();
            
        return view('home', compact('latestProperties'));
    }

    public function about()
    {
        return view('pages.about');
    }
}
