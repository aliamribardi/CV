<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\User;

class FHomeController extends Controller
{
    public function index (User $id) {
        return view('front.layouts.app', [
            'banners' => $id,
            'abouts' => About::find($id),
        ]);
    }
}
