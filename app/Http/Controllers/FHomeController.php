<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Education;
use App\Models\MyWork;
use App\Models\Work;
use App\Models\Skill;
use App\Models\SocialMedia;

class FHomeController extends Controller
{
    public function index (User $user) 
    {
        return view('front.layouts.app', [
            'banners' => $user,
            'abouts' => About::where('user_id', $user->id)->first(),
            'sosmed' => SocialMedia::where('user_id', $user->id)->first(),
            'educations' => Education::where('user_id', $user->id)->get(),
            'works' => Work::where('user_id', $user->id)->get(),
            'skills' => Skill::where('user_id', $user->id)->get(),
            'myworks' => MyWork::where('user_id', $user->id)->get(),
        ]);
    }
}
