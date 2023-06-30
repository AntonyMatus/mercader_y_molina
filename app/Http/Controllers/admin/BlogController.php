<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
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
        $posts =  Post::all();
        return view('pages.blogs.index', ['posts' => $posts]);

       
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

        request()->validate([
            'title' => ['required', 'string'],
            'author_id' => ['required'],
            'category_id' => ['required'],
            'publish_date' => ['required', 'string'],
            'status' => ['required', 'boolean'],
            'cover_image' => ['required'],
            'body' => ['required', 'string']
        ]);
        

            $newBlog = new Post();
            $newBlog->author_id = $request->author_id;
            $newBlog->category_id = $request->category_id;
            $newBlog->title = $request->title;
            $newBlog->body = $request->body;
            $newBlog->publish_date = $request->publish_date;
            $newBlog->status = $request->status;

            
            if($request->hasfile('cover_image')){
                $image = $request->file('cover_image');
                $filename = $this->storeFile($image, 'blogs');
                $image_file = $filename;
                $newBlog->cover_image = $filename;
            
            }

            $newBlog->save();

            $posts =  Post::all();
            return view('pages.blogs.index', ['posts' => $posts]);
            


        
        
    }

    
    public function edit(string $id)
    {
        $autors = Author::all();
        $categorias = Category::all();

        $blog = Post::find($id);

        return view('pages.blogs.edit',compact('autors','categorias','blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'title' => ['required', 'string'],
            'author_id' => ['required'],
            'category_id' => ['required'],
            'publish_date' => ['required', 'string'],
            'status' => ['required', 'boolean'],
            'body' => ['required', 'string']
        ]);

        $post = Post::find($id);
        $post->author_id = $request->author_id;
        $post->category_id = $request->category_id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->publish_date = $request->publish_date;
        $post->status = $request->status;

        if($request->hasfile('cover_image')){
            $isRemoved = null;
            if(!is_null($post->cover_image)){
                $path = 'public/blogs/'. $post->cover_image;
                $isRemoved = $this->deleteFile($path);
            } else {
                $isRemoved = true;
            }
            if($isRemoved){
                $image = $request->file('cover_image');
                $filename = $this->storeFile($image, 'blogs');
                $image_file = $filename;
                $post->cover_image = $filename;
            }
        }

        $post->save();

        $posts =  Post::all();
        return view('pages.blogs.index', ['posts' => $posts]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $post = Post::find($id);

        if(Storage::delete('public/blogs/'.$post->cover_image)){
            $post->delete();
        }

        $posts =  Post::all();
        return view('pages.blogs.index', ['posts' => $posts])->with('eliminar', 'ok');
        
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

    public function deleteFile($files)
    {
        $result = Storage::delete($files);

        return $result;
    }
}
