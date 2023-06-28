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
        
        if($request->hasfile('cover_image')){
            $datosAutor['cover_image']= $request->file('cover_image')->store('autors', 'public');
        }

        Author::insert($datosAutor);
       


    //    if($request->hasfile('cover_img')){
    //             $image = $request->file('cover_img');
    //             $filename = $this->storeFile($image, 'autors');
    //             $image_file = $filename;
    //             $newAutor->cover_image = $filename;

    //    }
    //    
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
        $autor = Author::find($id);
        return view('pages.authors.edit', ['autor' => $autor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datosAutor = request()->except(['_token', '_method']);

        if($request->hasfile('cover_image')){
            $autor = Author::findOrFail($id);

            Storage::delete('public/'.$autor->cover_image);

            $datosAutor['cover_image']= $request->file('cover_image')->store('autors', 'public');
        }


       Author::where('id', '=', $id)->update($datosAutor);

        $autor = Author::findOrFail($id);


        $authors = Author::all();
        return view('pages.authors.index', ['authors' => $authors]);

       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $autor = Author::find($id);

        if(Storage::delete('public/'.$autor->cover_image)){
            $autor->delete();
        }

        $authors = Author::all();
        return view('pages.authors.index', ['authors' => $authors]);

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
