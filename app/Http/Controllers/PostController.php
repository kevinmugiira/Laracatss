<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($slug)
    {
        //$post = DB::table('posts')->where('posts', $posts)->first();
        /*$post = Post::where('slug', $slug)->firstOrFail();

        if (! $post)
        {
            abort(404);
        }*/

        return view('post', [
        'post' => Post::where('slug',$slug)->firstOrFail()


        ]);
    }
}
