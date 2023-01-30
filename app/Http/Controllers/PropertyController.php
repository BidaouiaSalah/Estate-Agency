<?php

namespace App\Http\Controllers;

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

        return view('admin.property.create', compact(
            ['transactionTypes', 'propertyTypes']
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Property::create([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'postale_code' => $request->postale_code,
            'space' => $request->space,
            'price' => $request->price,
            'balconies' => $request->balconies,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'garages' => $request->garages,
            'parking_spaces' => $request->parking_spaces,
            'pets_allowed' => $request->pets_allowed,
            'available' => true,
            'assigned' => false,
            'assignment_date' => $request->assignment_date,
            'agent_id' => 1,
        ]);

        return redirect()->back()->with([
            'success' => 'Estate Created successfully'
        ]);;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->update([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'postale_code' => $request->postale_code,
            'space' => $request->space,
            'price' => $request->price,
            'balconies' => $request->balconies,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'garages' => $request->garages,
            'parking_spaces' => $request->parking_spaces,
            'pets_allowed' => $request->pets_allowed,
            'available' => true,
            'assigned' => true,
            'assignment_date' => $request->assignment_date,
        ]);

        return redirect()->route('estates.index')->with([
            'success' => 'Estate Updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
