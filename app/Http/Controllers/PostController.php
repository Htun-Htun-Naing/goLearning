<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('welcome' , [
            'posts' => Post::orderBy('id', 'DESC')->paginate(8),
            'categories' => Category::all()

        ]);
    }
    public function dashboard()
    {
        return view('dashboard' , [
            'posts' => Post::latest()->take(10)->get()

        ]);
    }
    public function singlePost($slug)
    {
        $post = Post::with('user')->where('title' , $slug)->get();
        $categories = Category::all();
        return view('single-post', compact('post', 'categories' ));
    }
    public function getByCategory(Category $category)
    {

        return view('welcome', [
            'posts' => Post::with('category')->where('category_id', $category->id)->paginate(8),
            'categories' => Category::all()
        ]);
    }

    public function create()
    {

        return view('create',[
            'categories' => Category::all()
        ]);
    }

    public function show()
    {
        return view('tables', [
            'posts' => Post::orderBy('id', 'DESC')->paginate(10)
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'body'  => 'required',
            'read'  => 'required',
            'category_id' => 'required'
        ]);
        $posts = new Post;

        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->body = $request->body;
        $posts->read = $request->read;
        $posts->category_id = $request->category_id;
        $posts->user_id =  auth()->id();
        $posts->save();

        return redirect()->route('create')->with('success', 'Post created successfully!');

    }

    public function edit($id)
    {
        $post = Post::with('category')->where('id', $id)->first();
        // $category = Post::with('category')->get();
        return view('edit',[
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'body'  => 'required',
            'read'  => 'required',
            'category_id' => 'required'
        ]);
        Post::whereId($id)->update($validatedData);
        return redirect()->route('tables')->with('success', 'Post Updated successfully!');

    }

    public function destroy($id)
{
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('tables')->with('success', 'Post is successfully deleted');
}

}
