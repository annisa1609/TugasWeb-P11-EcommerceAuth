<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller {
 public function index(){ $posts=Post::with('user')->latest()->paginate(10); return view('posts.index',compact('posts')); }
 public function edit(Post $post){$this->authorize('update',$post);return view('posts.edit',compact('post'));}
 public function update(Request $request, Post $post){$this->authorize('update',$post);$data=$request->validate(['title'=>'required|string|max:180','body'=>'required|string']);$post->update($data);return redirect()->route('posts.index')->with('status','Post berhasil diperbarui.');}
 public function destroy(Post $post){$this->authorize('delete',$post);$post->delete();return redirect()->route('posts.index')->with('status','Post berhasil dihapus.');}
}
