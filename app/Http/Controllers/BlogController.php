<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response; 
use Illuminate\View\View;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'message' => 'required|string|max:80',
            'titulo' => 'required|string|max:4000',
            'photo' => 'required|max:10000|mimes:png,jpg,jpeg,image'
        ]);

        dd($validated);

        // insert image
        $fileOriginalName = $request->file('photo')->getClientOriginalExtension();
        $image = time() . '.'. $fileOriginalName;
        $request->photo->storeAs('image-blog', $image, 'public');
        //$path = $request->photo->store('storage/uploads','public');
            dd($request);
            $create = Blog::create([  ]);
        // 'user_id' => auth()->user()->id,
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
