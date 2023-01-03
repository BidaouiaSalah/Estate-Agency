<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use App\Http\Requests\StoreUpdateEstateRequest;

class EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estates = Estate::where('available', true)->get();

        return view('admin.pages.estates.index', ['estates', $estates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.estates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateEstateRequest $request)
    {
        Estate::create([
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
    public function show(Estate $estate)
    {
        return view('admin.pages.estates.show', ['estate', $estate]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estate $estate)
    {
        return view('admin.pages.estates.edit', ['estate', $estate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateEstateRequest $request, Estate $estate)
    {

        $estate->update([
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
    public function destroy(Estate $estate)
    {
        $estate->delete();

        return back()->with([
            'success' => 'Estate Updated successfully'
        ]);
    }
}
