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
            'educations' => Education::find($id),
            'works' => Work::find($id),
            'skills' => Skill::find($id),
        ]);
    }
}
