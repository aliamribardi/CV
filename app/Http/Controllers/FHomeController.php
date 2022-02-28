<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Education;
use App\Models\Work;
use App\Models\Skill;

class FHomeController extends Controller
{
    public function index (User $user) 
    {
        return view('front.layouts.app', [
            'banners' => $user,
            'abouts' => About::where('user_id', $user->id)->first(),
            'educations' => Education::where('user_id', $user->id)->first(),
            'works' => Work::where('user_id', $user->id)->first(),
            'skills' => Skill::where('user_id', $user->id)->first(),
        ]);
    }
}
