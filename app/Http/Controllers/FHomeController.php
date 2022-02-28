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
    public function index (User $id) 
    {
        return view('front.layouts.app', [
            'banners' => $id,
            'abouts' => About::where('user_id', $id->id)->first(),
            'educations' => Education::where('user_id', $id->id)->first(),
            'works' => Work::where('user_id', $id->id)->first(),
            'skills' => Skill::where('user_id', $id->id)->first(),
        ]);
    }
}
