<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class PostController extends Controller
{
    public function add_post($id)
    {
        $author = Author::find($id);
        $post = new Post();
        $post->title ='title 3';
        $post->cat ='cat 3';
        $author->post()->save($post);
    }

    public function show_post($id)
    {
        $post = Author:: find($id)->post;
        return $post;
        
    }
}
