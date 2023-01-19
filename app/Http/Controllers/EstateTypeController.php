<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Estate;
use App\Models\EstateType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\Toaster;

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

        return view('app.pages.estate_types.index', compact('estateTypes'));
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
            'name' => 'required|unique:estate_types',
        ]);

        EstateType::create(
            [
                'name' => $name,
                'slug' => Str::slug($name)
            ]
        );

        toast('The Estate Type has been submited!', 'success');

        return redirect()->route('admin.estate-types.index')->with([
            'success' => 'Estate Type Created successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->name;

        $request->validate([
            'name' => 'required|unique:estate_types',
        ]);

        $estateType = EstateType::find($request->estate_type);
        $estateType->update(
            [
                'name' => $name,
                'slug' => Str::slug($name)
            ]
        );

        toast('The Estate Type has been edited!','success');

        return redirect()->route('admin.estate-types.index')->with([
            'success' => 'Estate Type Updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $estateType = EstateType::findOrFail($request->estate_type);
            $estateType->delete();

            return back()->with(['success' => 'Estate Type deleted successfully']);
        } catch (Exception $e) {
            dd($e);
        }
    }
}
