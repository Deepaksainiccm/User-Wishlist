<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class AuthorController extends Controller
{
    public function add_author()
    {
        $author = new Author;
        $author->username='monti';
        $author->password='12345678';
        $author->save();
    }

    public function show_author($id)
    {
        $author = Post::find($id)->author;
        return $author;
    }

    public function show_both($id)
    {
        $author =Author::find($id);
        echo $author->username;
        echo "<br>";
        
        foreach ($author->post as $ap ) 
        {
            echo $ap;
            echo "<br>";
            
        }
    }
}
