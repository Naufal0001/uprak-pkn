<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Chapter;
use Illuminate\Http\Request;

class MainControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function home(){
        $data['random_blogs'] = Blog::inRandomOrder()->limit(3)->get();
        $data['blogs'] = Blog::latest()->get();
        $data['chapters']   = Chapter::limit(6)->get(); 

        return view('home', $data);
    }

    public function index(Request $request)
    {
        if($request){
            !$request->category ? $data['blogs'] = Blog::where('blog_title', 'LIKE', '%'. $request->search .'%')->get() : $data['blogs'] = Blog::whereHas('Categories', function($query) use ($request){
                $query->where('category', $request->category);
            })->get();
        }else{
            $data['blogs'] = Blog::all();
        }

        $data['categories'] = Category::all();
        return view('news', $data);
    }

    public function showChapter(Chapter $chapter, Request $request){
        $data['chapter'] = $chapter;
        return view('Chapters', $data);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $data['blog'] = $blog;
        return view('post', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
