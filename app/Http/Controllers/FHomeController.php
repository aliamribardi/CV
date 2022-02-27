<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FHomeController extends Controller
{
    public function index () {
        return view('front.layouts.app', [
            'banners' => User::get()->first(),
        ]);
    }
}
