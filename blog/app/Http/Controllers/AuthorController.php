<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class AuthorController extends Controller
{
    public function add_author()
    {
        $author = new Author();
        $author->username = "Rahul";
        $author->password = 123456;

        
        $author->save();
        // $post->author()->save($author);
        // $customer->mobile()->save($mobile);
    }
}
