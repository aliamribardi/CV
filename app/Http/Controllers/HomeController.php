<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Education;
use App\Models\Work;

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
            'abouts' => About::where('user_id', auth()->user()->id)->first(), 
            'aboutData' => About::where('user_id', auth()->user()->id)->get(),

            'educations' => Education::where('user_id', auth()->user()->id)->get(),

            'works' => Work::where('user_id', auth()->user()->id)->get(),
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
