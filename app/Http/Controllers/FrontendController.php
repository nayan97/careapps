<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function doctors()
    {
        $doctor = doctor::all();
        return view('user.pages.doctors', compact('doctor'));
    }

    public function aboutUs()
    {
        //show about page 
        return view('user.pages.about');
    }
}
