<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Education;
use App\Models\MyWork;
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

            'educations' => Education::where('user_id', auth()->user()->id)->get(),

            'works' => Work::where('user_id', auth()->user()->id)->get(),

            'skills' => Skill::where('user_id', auth()->user()->id)->get(),

            'myworks' => MyWork::where('user_id', auth()->user()->id)->get(),
            // latest('id) = mengurutkan dari data yang terakhir ditambah
            // limit(2) = membatasi data yang tampil
            'contacts' => Contact::where('user_id', auth()->user()->id)->latest('id')->limit(2)->get(),
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
