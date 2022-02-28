<?php

namespace App\Http\Controllers;

use App\Models\MyWork;
use Illuminate\Http\Request;

class MyWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.createMyWork');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyWork  $myWork
     * @return \Illuminate\Http\Response
     */
    public function show(MyWork $myWork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyWork  $myWork
     * @return \Illuminate\Http\Response
     */
    public function edit(MyWork $myWork)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MyWork  $myWork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyWork $myWork)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyWork  $myWork
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyWork $myWork)
    {
        //
    }
}
