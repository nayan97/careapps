<?php

namespace App\Http\Controllers\Admin;

use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\Facades\Image;

class ThemeOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $themes = Theme::findOrFail(1);
        return view('admin.themes.index', [
            'theme'  => $themes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
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
    public function update(Request $request, string $id)
    {
       $themes = Theme::findOrFail(1);
          // Photo Managment

          if($request -> hasFile('logo') ){
            $img =$request -> file('logo');
            $img_name = md5(time().rand()) .'.'. $img-> clientExtension();

            $image = Image::make($img -> getRealPath());

            $image -> save(storage_path('app/public/logo/' . $img_name) );
        
        }


       $themes -> update([
            'title'    => $request -> title,
            'tagline'    => $request -> tagline,
            'copy'    => $request -> copy,
            'logo'     => $img_name ?? 'logo.png'
            
       ]);

       return back() -> with('success', 'Data updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
