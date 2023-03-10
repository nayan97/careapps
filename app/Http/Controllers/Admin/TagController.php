<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Admin\TagController;
use App\Models\Posttag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $tags = Posttag::latest() -> get();
        return view('admin.blog.tag.index',[
            'tag'  => $tags
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $this -> validate($request,[
            'name' => 'required|unique:posttags'
        ]);

        // create

        Posttag::create([
            'name'  => $request -> name,
            'slug'  => Str::slug($request -> name)
        ]);

        // return

         return back() -> with('success', 'Tag Added Successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
