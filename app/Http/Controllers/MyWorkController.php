<?php

namespace App\Http\Controllers;

use App\Models\MyWork;
use Illuminate\Support\Facades\Storage;
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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|file|max:2048',
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('my-work-image');
        }

        $validatedData['user_id'] = auth()->user()->id;

        MyWork::create($validatedData);

        session()->flash('success', 'project added successfully');

        return redirect()->route('home');
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
        return view('adminPanel.editMyWork', [
            'mywork' => $myWork,
        ]);
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
