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
        
    //show about page 
    public function aboutUs()
    {
       
        return view('user.pages.about');
    }

     //show contact page 
    public function contactUs()
    {
        return view('user.pages.contact');
    }
         //show contact page 
         public function showBlog()
         {
             return view('user.pages.blog');
         }


         public function showBlogSingle()
         {
            return view('user.pages.single');
         }
}
