<?php

namespace App\Http\Controllers;

use App\Models\EstateType;
use Illuminate\Http\Request;

class EstateTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estateTypes = EstateType::all();

        // return view('admin.pages.estateType.index', ['estateTypes', $estateTypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.estateType.create');
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
            'name' => 'required|unique:estate_types',
            'slug' => 'required'
        ]);

        EstateType::create(
            [
                'name' => $request->name,
                'slug' => $request->slug
            ]
        );

        return back()->with([
            'success' => 'Estate Type Created successfully'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EstateType $estateType)
    {
        return view('admin.pages.estateTypes.edit', ['estateType' => $estateType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstateType $estateType)
    {
        $request->validate([
            'name' => 'required|unique:estate_types',
            'slug' => 'required'
        ]);

        $estateType->update([
            'name' => $request->name,
            'slug' => $request->slug
        ]);

        return back()->with([
            'success' => 'Estate Type Updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstateType $estateType)
    {
        $estateType->delete();

        return back()->with(['success' => 'Estate Type deleted successfully']);
    }
}
