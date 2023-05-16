<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePropertyRequest;
use Illuminate\Http\Request;
use App\Models\TransactionType;
use App\Models\PropertyType;
use App\Models\Amenity;
use App\Models\Property;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::with('amenities')->where('available', true)->get();

        return view('admin.property.index', compact(
            'properties'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $amenities = Amenity::all();

        return view('admin.property.create', compact(
            'amenities'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdatePropertyRequest $request)
    {
        $property =   Property::create([
            'title' => $request->title,
            'description' => $request->description,
            'address' => $request->address,
            'city' => $request->city,
            'type' => $request->type,
            'postal_code' => $request->postal_code,
            'transaction_type' => $request->transaction_type,
            'space' => $request->space,
            'price' => $request->price,
            'balconies' => $request->balconies,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'garages' => $request->garages,
            'parking_spaces' => $request->parking_spaces,
            'pets' => $request->pets ? 'allowed' : 'prohibited',
            'available' => true,
            'user_id' => auth()->id(),
        ]);

        $property->amenities()->attach($request->amenities);

        if ($request->hasFile('image')) {
            $property->addMediaFromRequest('image')->toMediaCollection('images');
        }

        toast('The property has been created successfully!', 'success');

        return redirect()->route('admin.properties.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        $property = Property::with('amenities')->find($property);

        return view('pages.property.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \Illuminate\Http\Request  $request
     */
    public function edit(Request $request)
    {
        $property = Property::with('amenities')->find($request->property);

        $amenities = Amenity::all();

        return view('admin.property.edit', [
            'property' => $property,
            'amenities' => $amenities
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdatePropertyRequest $request)
    {

        $property = Property::with('amenities')->find($request->property);

        $property->update([
            'title' => $request->title,
            'description' => $request->description,
            'address' => $request->address,
            'city' => $request->city,
            'type' => $request->type,
            'postal_code' => $request->postal_code,
            'transaction_type' => $request->transaction_type,
            'space' => $request->space,
            'price' => $request->price,
            'balconies' => $request->balconies,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'garages' => $request->garages,
            'parking_spaces' => $request->parking_spaces,
            'pets' => $request->pets ? 'allowed' : 'prohibited',
            'available' => true,
            'user_id' => auth()->id(),
        ]);

        toast('The property has been updated successfully', 'success');

        return redirect()->route('admin.properties.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Property::find($request->property)->delete();

        toast('The property has been deleted successfully', 'success');

        return back();
    }


    /**
     * Remove multiple resource from storage
     *
     * @param array $ids
     */
    public function bulkDelete(Request $request)
    {

        $ids = $request->ids;

        Property::whereIn('id', '=', explode(',', $ids))->delete();

        return response()->json(['success' => 'the Properties selected has been deleted!']);
    }
}
