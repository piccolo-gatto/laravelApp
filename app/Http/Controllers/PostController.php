<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Carbon;
use App\Events\PostPublish;
use App\Events\PostDelete;

class PostController extends Controller {
	function index() {
		$posts = Post::where('is_published', 1)->get();
		return view("blog", ["rows" => $posts]);
	}

	function add() {
		return view("add_post");
	}
	
	public function edit($post){
        	$edit_post = Post::find($post);
        	return view('edit_post', ['edit_post' => $edit_post]);
    }

	function store(Request $request) {
		$request->validate([
            		'title' => 'required|string|max:255',
            		'text' => 'required|string',
        	]);

		$post = Post::find($request->id) ?? new Post;
		$post->title = $request->title;
		$post->text = $request->text;
		$post->publish_datetime = $request->datetime;
		if ($request->input('is_published') == '1'){
        		event(new PostPublish($post));
            		$post->is_published = 1;
        	}else{
            		$post->is_published = 0;
        	}
		$post->save();

		return redirect('/blog/post/'.$post->id)->with('Ok', '');
	}
		
	function delete($post) {
	        $delete_post = Post::find($post);
		$comments = Comment::all();
		foreach ($comments as $comment) {
			if ($comment->post_id == $delete_post->id)
				$comment->delete();
		}
		$delete_post->delete();
        	event(new PostDelete($delete_post));
        	return redirect('/')->with('Ok', '');

	}
}
