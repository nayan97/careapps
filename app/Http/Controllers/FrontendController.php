<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
         {    $posts = Post::latest() -> get();
             return view('user.pages.blog', [
                'posts'  => $posts
             ]);
         }


         public function showBlogSingle($slug)
         {
            $single_post = Post::where('slug', $slug) -> first();
            return view('user.pages.single', [
                'post'  => $single_post
             ]);
         }
}
