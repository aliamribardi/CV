<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
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
        return view('adminPanel.createEducation');
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
            'school' => 'required|max:255',
            'program_Study' => 'required|max:255',
            'year' => 'required|max:255',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Education::create($validatedData);

        session()->flash('success', 'education successfully added');

        return redirect()->route('home');
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
    public function edit(Education $education)
    {
        return view('adminPanel.editEducation', [
            'educations' => $education,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        // dd($education);
        $validatedData = $request->validate([
            'school' => 'required|max:255',
            'program_Study' => 'required|max:255',
            'year' => 'required|max:255',
        ]);

        Education::where('id', $education->id)
                ->update($validatedData);

        session()->flash('success', 'education has been successfully updated');

        return redirect()->route('home');
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
