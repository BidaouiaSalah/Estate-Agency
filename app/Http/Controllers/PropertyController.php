<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePropertyRequest;
use App\Models\Amenity;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\TransactionType;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::where('available', true)->get();

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
        $transactionTypes = TransactionType::all();
        $propertyTypes = PropertyType::all();
        $amenities = Amenity::all();

        return view('admin.property.create', compact(
            'transactionTypes', 'propertyTypes', 'amenities'
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
            'city'=> $request->city,
            'type_id'=> $request->type_id,
            'postal_code' => $request->postal_code,
            'transaction_type_id' => $request->transaction_type,
            'space' => $request->space,
            'price' => $request->price,
            'balconies' => $request->balconies,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'garages' => $request->garages,
            'parking_spaces' => $request->parking_spaces,
            'pets_allowed' => $request->pets_allowed,
            'available' => true,
            'user_id' => auth()->id(),
        ]);

        $property->amenities()->attach($request->amenities);

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
       
        $property = Property::find($property);

    return view('pages.property.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  \Illuminate\Http\Request  $request
     */
    public function edit (Property $property)
    {

        $transactionTypes = TransactionType::all();
        $propertyTypes = PropertyType::all();
        $amenities = Amenity::all();
        

        return view('admin.property.edit', compact(
            'transactionTypes', 'propertyTypes', 'amenities','property'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdatePropertyRequest $request, Property $property)
    {

        $property->update([
            'title' => $request->title,
            'description' => $request->description,
            'address' => $request->address,
            'city'=> $request->city,
            'type_id'=> $request->type_id,
            'postal_code' => $request->postal_code,
            'transaction_type_id' => $request->transaction_type,
            'space' => $request->space,
            'price' => $request->price,
            'balconies' => $request->balconies,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'garages' => $request->garages,
            'parking_spaces' => $request->parking_spaces,
            'pets_allowed' => $request->pets_allowed,
            'available' => true,
            'user_id' => auth()->id(),
        ]);

        toast('The property has been updated successfully', 'success');

        return redirect()->route('admin.propery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $proeprty = Property::find($property)->delete();

        toast('The property has been deleted successfully', 'success');

        return back();
    }

      
        /**
         * Remove multiple resource from storage
         * 
         * @param array $ids
         */
    public function bulkDelete(Request $request){

        $ids = $request->ids;

        Property::whereIn('id', '=', explode(',',$ids))->delete();

        return response()->json(['success' => 'the Properties selected has been deleted!']);
    }
}
