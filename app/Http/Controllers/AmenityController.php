<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amenities = Amenity::all();
        return view('admin.pages.amenity.index', ['amenities' => $amenities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.amenity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:amenities',
            'slug' => 'required'
        ]);

        Amenity::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->back()->with([
            'success' => 'Amenity Created Successfully'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Amenity $amenity)
    {
        return view('admin.pages.amenity.edit', ['amenity' => $amenity]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amenity $amenity)
    {
        $request->validate([
            'name' => 'required|unique:amenities',
            'slug' => 'required'
        ]);

        $amenity->update([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return redirect()->back()->with([
            'success' => 'Amenity Updated Successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amenity $amenity)
    {
        $amenity->delete();
        return back()->with(['success' => 'Amenity Deleted successfully']);
    }
}
