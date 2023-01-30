<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TransactionType;

class TransactionTypeController extends Controller
{
    public function index()
    {
        $transactionTypes = TransactionType::all();

        return view('admin.transaction_types.index', compact('transactionTypes'));
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
            'name' => 'required|unique:transaction_types|max:255',
        ]);

        $name = $request->name;

        TransactionType::create(
            [
                'name' => $name,
                'slug' => Str::slug($name)
            ]
        );

        toast('The transaction Type has been submited!', 'success');

        return redirect()->route('admin.transaction-types.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        TransactionType::find($request->transaction_type)->delete();

        toast('The transaction Type has been Deleted!', 'success');

        return redirect()->route('admin.transaction-types.index');
    }
}
