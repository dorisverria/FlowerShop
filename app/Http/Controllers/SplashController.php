<?php


namespace App\Http\Controllers;


class SplashController extends Controller
{
    public function getSplashPage() {   // returns view to splash page
        return view('layouts.splash');
    }
}
