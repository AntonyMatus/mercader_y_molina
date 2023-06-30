<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias =  Category::all();
        $message='';
        return view('pages.categories.index', ['categorias' => $categorias])->with('message', $message);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newCategory = new Category();
        $newCategory->name = $request->name;
        $newCategory->save();


        $message = 'La categoria ha sido creado con exito!';

        $categorias =  Category::all();
        return view('pages.categories.index', ['categorias' => $categorias])->with('message', $message);
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
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('pages.categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $category = Category::find($id);

        $category->name = $request->name;
        $category->save();

        $message = 'La categoria ha sido actualizado con exito!';
        $categorias =  Category::all();
        return view('pages.categories.index', ['categorias' => $categorias])->with('message',$message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();

        $categorias =  Category::all();
        return view('pages.categories.index', ['categorias' => $categorias]);
    
    }
}
