<?php

namespace App\Http\Controllers;

use App\Models\Property;

class HomePropertyController extends Controller
{

    public function index()
    {
        $properties = Property::where('available', true)
            ->orderby('created_at', 'desc')
            ->paginate(2);

        return view('pages.properties.index', compact('properties'));
    }

    public function show(Property $property)
    {
        return view('pages.Properties.show', compact('property'));
    }
}
