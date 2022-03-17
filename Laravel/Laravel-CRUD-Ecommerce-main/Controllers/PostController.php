<?php

namespace App\Http\Controllers;

use App\Mail\AttachmentMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller {
  
  public function index() {
    $posts = Post::orderBy('id', 'desc')->paginate(3);
    return view('post.index', ['posts' => $posts]);
  }


  public function create() {
    return view('post.create');
  }

  public function email(){
    Mail::to('chandrashekharsharnagat18@gmail.com')->send(new AttachmentMail());
  }

  public function store(Request $request) {
    $request->validate([
      'title' => 'required',
      'category' => 'required',
      'price' => 'required|max:5',
      'content' => 'required|min:20',
      'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imageName = time() . '.' . $request->file->extension();
 
    $request->file->storeAs('public/images', $imageName);

    $postData = ['title' => $request->title, 'category' => $request->category, 'price' => $request->price, 'content' => $request->content, 'image' => $imageName];

    Post::create($postData);
    return redirect('/post')->with(['message' => 'Post added successfully!', 'status' => 'success']);
  }


  public function show(Post $post) {
    return view('post.show', ['post' => $post]);
  }


  public function edit(Post $post) {
    return view('post.edit', ['post' => $post]);
  }

  public function update(Request $request, Post $post) {
    $imageName = '';
    if ($request->hasFile('file')) {
      $imageName = time() . '.' . $request->file->extension();
      $request->file->storeAs('public/images', $imageName);
      if ($post->image) {
        Storage::delete('public/images/' . $post->image);
      }
    } else {
      $imageName = $post->image;
    }

    $postData = ['title' => $request->title, 'category' => $request->category, 'price' => $request->price, 'content' => $request->content, 'image' => $imageName];

    $post->update($postData);
    return redirect('/post')->with(['message' => 'Post updated successfully!', 'status' => 'success']);
  }

  
  public function destroy(Post $post) {
    Storage::delete('public/images/' . $post->image);
    $post->delete();
    return redirect('/post')->with(['message' => 'Post deleted successfully!', 'status' => 'info']);
  }
}