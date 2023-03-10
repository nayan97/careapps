// Validate
           $this -> validate($request,[
            'title'         => 'required|unique:post',
            'featured'      => 'required',
            'content'       => 'required',
        ]);

        // Photo Managment
       
        if($request -> hasFile('featured') ){
            $img =$request -> file('featured');
            $img_name = time().'.'. $img->getClientOriginalExtension();

            $image = Image::make($img -> getRealPath());
    
            $image -> save(storage_path('post/' . $img_name) );
         
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