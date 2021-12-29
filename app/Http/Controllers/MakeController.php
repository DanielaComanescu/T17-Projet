<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Make;


class MakeController extends Controller
{
    public function index(Request $request)
    {
        $makes = Make::all();
        return view('/cars_list', [
            'makes' => $makes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addMake');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $make = new Make;
        $make->name = $request->name;
        $make->save();

        return redirect('/allMake');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Make $make)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Make $make)
    {
        return view('updateMake', [
            'make' => $make,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Make $make)
    {
        $make->name = $request->name;
        $make->save();

        return redirect('/allMake');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Make $make)
    {
        $make->delete();
        return redirect('/allMake');
    }
}
