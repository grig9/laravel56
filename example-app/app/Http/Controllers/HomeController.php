<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{
    function about()
    {
        return view('about');
    }

    function posts()
    {   
        $posts = Post::paginate(5);

        $data = [
            'title' => 'asfasdfsad',
            'slug' => 'asdfasdfkj',
            'content' => 'cxvkasldkfjsdlk',
        ];
        
        // $post = Post::find(31)->delete();
        
        return view('image', ['posts' => $posts]);
    }
}
