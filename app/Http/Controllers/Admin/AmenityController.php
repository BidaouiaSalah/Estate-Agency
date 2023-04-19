<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use Illuminate\Support\Str;
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
        return view('admin.amenities.index', compact('amenities'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;

        $request->validate([
            'name' => 'required|unique:property_types|max:255',
        ]);

        Amenity::create([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);

        toast('The Amenity has been submited!', 'success');

        if (!$request->routeIs("*.amenities")) {
            toast('The Amenity has been submited!', 'success');
            return back();
        } else {
            return redirect()->route("admin.amenities.index");
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $name = $request->name;

        $request->validate([
            'name' => 'required|unique:property_types|max:255',
        ]);

        $amenity = Amenity::find($request->amenity);

        $amenity->update([
            'name' => $request->name,
            'slug' => Str::slug($name),
        ]);

        toast('The Amenity has been updated!', 'success');
        return redirect()->route("admin.amenities.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Amenity::find($request->amenity)->delete();

        toast('The Amenity has been Deleted!', 'success');

        return redirect()->route('admin.amenities.index');
    }

    /**
     * Remove Multiple resource from storage.
     *
     * @param  array  $ids
     */
    public function bulkDelete(Request $request)
    {
        $ids = $request->ids;

        Amenity::whereIn('id', explode(",", $ids))->delete();

        return response()->json(['success' => 'the Amenities deleted!']);
    }
}
