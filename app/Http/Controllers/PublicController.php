<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Models\Category;
use App\Models\Post;
use App\Models\Service;

class PublicController extends Controller
{
    public function index()
    {
        $posts = Post::with(['category'])
                        ->latest()
                        ->where('status', 1)
                        ->take(2)
                        ->get();
                        
        
        return view('pages.index', compact('posts'));
    }


    public function blog()
    {
        $category = request()->get('category');
        $search = request()->get('search');
        $categories = Category::all();

        if (!empty($category)) {
            $category_filter = Category::findOrFail($category);
            $posts = Post::with(['category'])
                            ->latest()
                            ->where('status', 1)
                            ->where('category_id', $category)
                            ->paginate(9)
                            ->withQueryString();

            return view('pages.blog', compact('category_filter', 'categories', 'posts'));
        }

        if (!empty($search)) {
            $posts = Post::with(['category'])
                            ->latest()
                            ->where('status', 1)
                            ->where('title', 'LIKE', "%$search%")
                            ->paginate(9)
                            ->withQueryString();

            return view('pages.blog', compact('categories', 'posts'));
        }

        
        $latest_posts = Post::with(['category'])
                            ->latest()->where('status', 1)
                            ->take(3)
                            ->get();

        $posts = Post::with(['category'])
                        ->where('status', 1)
                        ->paginate(9)
                        ->withQueryString();

        return view('pages.blog', compact('categories', 'latest_posts', 'posts'));
    }

    public function single_blog()
    {
        $post_id = request()->get('post_id');

        $related_posts = [];

        $post = Post::with(['author', 'category', 'images'])->findOrFail($post_id);

        if ($post) {
            $related_posts = Post::with(['category'])
                                    ->where('category_id', $post->category_id)
                                    ->where('status', 1)
                                    ->whereNotIn('id', [$post->id])
                                    ->get();
        }

        return view('pages.single_blog', compact('post', 'related_posts'));   
    }

    public function sendContactMail(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'phone' => ['required', 'numeric'],
            'country' => ['required', 'string'],
            'message' => ['required', 'string'],
        ]);

        try {
            
            Mail::to('numanamx@gmail.com')->send(new ContactMail($request));

            return response()->json([
                'ok' => true,
                'message' => 'Mesaje enviado'
            ], 201);

        } catch (Exception $e) {
            return response()->json([
                'ok' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    
}
