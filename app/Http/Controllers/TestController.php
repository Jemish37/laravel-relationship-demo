<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function one2one()
    {
        $users = User::with('contact')->get();
        // $user = User::with('contact')->first();
        // return $user;
        // return $user->contact;
        return $users->toArray();
    }

    function one2oneReverse()
    {
        $contacts = Contact::with('user')->get();
        // $contact = Contact::with('user')->first();
        // return $contact;
        // return $contact->user;    //gives an error 
        return $contacts->toArray();
    }

    function one2many(){

        $users = User::with(['contact','posts'])->get();
        // $user = User::with(['contact','posts'])->first();
        // $user = User::with(['contact','posts'])->find(1);
        // return $users;
        return $users->toArray();
    }

    function one2manyReverse(){
        $posts = Post::with(['user'])->get();
        // $post = Post::with('user')->first();
        // return $posts;
        return $posts->toArray();
    }   

    function many2many(){

        $categories = Category::all();

        $post = Post::with(['categories'])->first();
        // $posts = Post::with(['categories'])->get();

        // $post->categories()->attach($categories);
        // $post->categories()->sync([1,2]);
        // $post->categories()->detach();
        $post = Post::with(['categories'])->first();

        return $post->toArray();
        
    }
}
