<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryPost;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            'posts' => Post::latest()->filter(request(['search', 'category']))->get()
        ]);
    }

    public function create()
    {
        return view('blog.create', [
            'categories' => Category::all() 
        ]);
    }

    public function store(PostRequest $request)
    {
        $request->validated();
        
        $category = Category::find($request->category);

        $post = Post::create([
            'title' => $request->title,
            'user_id' => Auth::user()->id,
            'description' => $request->description,
            'category'  => $category->title,
            'image' => $request->image->store('images', 'public')
        ]);

        CategoryPost::create([
            'category_id' => $request->category,
            'post_id'   => $post->id
        ]);

        return redirect(route('blog.create'))->with('store_success', 'Post created successfully!');

    }

    public function show($id)
    {
        return view('blog.show', [
            'post' => Post::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view('blog.edit', [
            'post' => Post::findOrFail($id),
            'categories' => Category::all() 
        ]);
    }

    public function update(PostRequest $request, $id)
    {
        $request->validated();

        $category = Category::find($request->category);

        Post::where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $category->title
        ]);

        if ($request->has('image')) 
        {

            Post::where('id', $id)->update([
                'image' => $request->image->store('images', 'public')
            ]);

        }

        return redirect(route('blog.show', $id))->with('update_success', 'Post updated successfully!');
        
    }

    public function destroy($id)
    {
        Post::destroy($id);

        return redirect(route('blog.index'))->with('destroy_success', 'Post deleted successfully!');
    }

    public function search(Request $request)
    {
        $search = $request->search;

        Post::where('title', 'LIKE', "%{$search}%")
            ->orWhere('tags', 'LIKE', "%{$search}%")
            ->get();

        return redirect(route('blog.index'));

    }

}
