<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AuthorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('pages.authors.index', ['authors' => $authors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosAutor = $request->except('_token');
        
        $newAutor = new Author();
        $newAutor->name = $request->name;
       if($request->hasfile('cover_img')){
            // $datosAutor['cover_img'] = $request->file('cover_img')->store('autors', 'public');
            //     // save new imagen
                $image = $request->file('cover_img');
                $filename = $this->storeFile($image, 'autors');
                $image_file = $filename;

                $newAutor->cover_image = $filename;

       }
       $newAutor->save();
        $authors = Author::all();
        return view('pages.authors.index', ['authors' => $authors]);

    }

    /**
     * Display the specified resource.
     */
    

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

    public function storeFile($file, $path)
    {
        $uid = Str::random(4) . date('dmYHis');
        $extension = $file->extension();
        $filename = $uid . '.' . $extension;

        Storage::putFileAs(
            'public/' . $path, // 'public/'
            $file,
            $filename
        );

        return $filename;
    }
}
