<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CoreValue;
use App\AboutUS;

class CoreValuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $corevalues = CoreValue::all();
        return view('admin.core_values.index',compact('corevalues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aboutUS = AboutUs::first();
        CoreValue::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'about_us_id' => $aboutUS->id, 
        ]);

        //another method
        // CoreValue::create($request->all());
         //<input type="hidden" value="1" name="about_us_id">

        //return to the main back page
        return back();
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
    public function update(Request $request)
    {
        $core = CoreValue::findOrFail($request->core_id);

        $core->update($request->all());
       
        return back ();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $core = CoreValue::findOrFail($request->core_id);

        $core->delete($request->all());
       
        return back ();
    }
}
