<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\User;
use Auth;

class PagesController extends Controller
{
    public function index() {
        if (!Auth::check()) {
        $title = "Welcome to index page here!";
        } else {
        $name = Auth::user()->name;
        $title = "Welcome <strong>" . $name . "</strong> to index page here!";
        }
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('pages.index', compact(["title", 'posts']));
    }
    
    public function about() {
        return view('pages.about');
    }

    public function services() {
        $data = array(
            "title" => "welcome to service page!",
            "services" => ["hey", "hi", "hello"]
        );
        return view('pages.services')->with($data);
    }

    // public function profile() {
    //     $title = "Welcome to index page here!";
    //     // $post = Post::find($id);
    //     $user_id = auth()->user()->id;
    //     $user = User::find($user_id);
    //     return view('pages.profile')->with('user', $user);
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function show()
    // {
    //     $user_id = auth()->user()->id;
    //     $user = User::find($user_id);
    //     return view('pages/profile')->with('posts', $user->posts);
    // }
}
