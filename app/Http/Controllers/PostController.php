<?php

namespace App\Http\Controllers;

use App\Post;
use App\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $posts = Post::all();

        return response($posts,200);
    }

    public function show($id)
    {
        $post = Post::find($id);

        $session_key = 'post_'.$id;

        if(!session($session_key))
        {
            $view = View::where('post_id',$post->id)->first();
            if(is_null($view))
                $post->view()->create([
                    'count' => 1
                ]);
            else
                $post->view->update([
                    'count' => $view->count + 1
                ]);
            session([$session_key => md5(microtime())]);

        }

        return response([
            'post' => $post,
            'view_count' => $post->view ? $post->view->count : 0
        ], 200);
    }
}
