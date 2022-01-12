<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use function view;

class HomeController extends Controller
{
    public function home()
    {
        return view('front.main');
    }
}
