<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propertyTypes = PropertyType::all();

        return view('app.pages.property.types.index', compact('propertyTypes'));
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
            'name' => 'required|unique:property_types',
        ]);

        PropertyType::create(
            [
                'name' => $name,
                'slug' => Str::slug($name)
            ]
        );

        toast('The property Type has been submited!', 'success');

        return redirect()->route('admin.property-types.index');
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
            'name' => 'required|unique:property_types',
        ]);

        $propertyType = PropertyType::find($request->property_type);

        $propertyType->update(
            [
                'name' => $name,
                'slug' => Str::slug($name)
            ]
        );

        toast('The property Type has been edited!', 'success');

        return redirect()->route('admin.property-types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $PropertyType = PropertyType::find($request->property_type);

        $PropertyType->delete();

        toast('The property Type has been Deleted!', 'success');
        return redirect()->route('admin.property-types.index');
    }
}
