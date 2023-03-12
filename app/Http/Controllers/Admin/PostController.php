<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Posttag;
use Illuminate\Support\Str;
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
                $img_name = md5(time().rand()) .'.'. $img-> clientExtension();

                $image = Image::make($img -> getRealPath());

                $image -> save(storage_path('app/public/posts' . $img_name) );
            
            }

            // create

            $post = Post::create([
                'admin_id'      => Auth::user()->id,
                'title'         => $request -> title,
                'slug'          => Str::slug($request -> title),
                'featured'      => $request -> featured,
                'content'       => $request -> content
            ]);

            $post -> category() -> attach($request -> cat);
            $post -> tag() -> attach($request -> tag);

            // return

            return back() -> with('success', 'Post Added Successfuly');
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
