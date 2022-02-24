<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Education;
use App\Models\Work;
use App\Models\Skill;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(About::where('id', auth()->user()->id)->get());
        return view('adminPanel.home', [
            'users' => User::where('id', auth()->user()->id)->first(),
            'abouts' => About::where('user_id', auth()->user()->id)->first(), 
            'aboutData' => About::where('user_id', auth()->user()->id)->get(),

            'educationf' => Education::where('user_id', auth()->user()->id)->first(),
            'educations' => Education::where('user_id', auth()->user()->id)->get(),

            'workf' => Work::where('user_id', auth()->user()->id)->first(),
            'works' => Work::where('user_id', auth()->user()->id)->get(),

            'skillf' => Skill::where('user_id', auth()->user()->id)->first(),
            'skills' => Skill::where('user_id', auth()->user()->id)->get(),
        ]);
    }
}

//get
/* 
$a = [
    [data1],
    [data2]
] 
$a[0][0]
*/
//first
/* 
[
    data1
] 
$a[0]
*/
