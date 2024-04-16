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

    public function indexView(): View
    {
     $blogs = Blog::orderBy('datetime', 'desc')->limit(100)->get();
     return view('welcome', ['blogs'=>$blogs]);
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

        

        // save image on local disk
        $fileOriginalName = $request->file('photo')->getClientOriginalExtension();
        $image = time() . '.'. $fileOriginalName;
        $request->photo->storeAs('image-blog', $image, 'public');
        //insert data on DB
        $create = Blog::create([ 
        'title' => $request->titulo,
        'description' => $request->message,
        'photo'=>$image,
        'user_id' => auth()->user()->id,
        ]);
        return redirect()->intended('DashdashboardAdmin');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request):View
    {
        $blog= Blog::find($request->id);
        dd($blog->id);
        
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
