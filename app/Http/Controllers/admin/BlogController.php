<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts =  Post::all();
        return view('pages.blogs.index', ['posts' => $posts]);

        var_dump($posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autors = Author::all();
        $categorias = Category::all();
        return view('pages.blogs.create', compact('autors','categorias'));
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
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $autors = Author::all();
        $categorias = Category::all();

        return view('pages.blogs.edit',compact('autors','categorias'));
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
        
    }
}
