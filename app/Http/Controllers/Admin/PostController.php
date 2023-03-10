<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Posttag;
use App\Models\Postcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest() -> get();
       
        return view('admin.blog.post.index',[
            'post'  => $posts
          
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats = Postcategory::latest() -> get();
        $tags = Posttag::latest() -> get();
        return view('admin.blog.post.create',[
            'cats'  => $cats,
            'tags'  => $tags
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
             // Validate
            $this -> validate($request,[
                'title'         => 'required|unique:posts',
                'featured'      => 'required',
                'content'       => 'required',
            ]);

            // Photo Managment

            if($request -> hasFile('featured') ){
                $img =$request -> file('featured');
                $img_name = time().'.'. $img->getClientOriginalExtension();

                $image = Image::make($img -> getRealPath());

                $image -> save(storage_path('app/public/posts/' . $img_name) );
            
            }

            // create

            return $request ->all();

            Post::create([
                'admin_id'      => Auth::guard('admin') -> user() -> id,
                'title'         => $request -> title,
                'slug'          => Str::slug($request -> name),
                'featured'      => $request -> featured,
                'content'       => $request -> content
            ]);

            // return

            return back() -> with('success', 'Tag Added Successfuly');
                }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
