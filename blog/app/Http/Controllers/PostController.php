<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;
class PostController extends Controller
{
    public function add_post($id){
        $author = Author::find($id);
        
        $post = new Post();
        $post->title = "Learn Python";
        $post->category = "Python";

        $author->post()->save($post);
    }

    public function show_post($id){
        $author = Author::find($id)->post;
        return "<h4>$author</h4>";
    }
}
