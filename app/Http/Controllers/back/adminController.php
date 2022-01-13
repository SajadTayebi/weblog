<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $users = User::all()->first()->paginate(5);
        return view('admin.main', compact('users'));
    }
}
