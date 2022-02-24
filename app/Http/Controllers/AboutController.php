<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
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
        return view('adminPanel.createAbout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'address' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'image' => 'image|file|max:2048',
            'about_me' => 'required',
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('about-image');
        }

        // $about = new About;
        // $about['user_id'] = auth()->user()->id;
        // $about->save();
        $validatedData['user_id'] = auth()->user()->id;
        
        About::create($validatedData);

        session()->flash('success', 'data added successfully');

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
    public function edit(About $about)
    {
        // dd($about);
        return view('adminPanel.editAbout', [
            'abouts' => $about,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        // dd($request);
        $validatedData = $request->validate([
            'address' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'image' => 'image|file|max:2048',
            'about_me' => 'required|max:255',
        ]);

        dd($request['name']);
        // dd($request->oldImage);
        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('about-image');
        }

        // $users = new User;
        // $users['name'] = $request['name'];
        // $users->save();
        
        About::where('id', $about->id)->update($validatedData);

        session()->flash('success', 'data updated successfully');

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
