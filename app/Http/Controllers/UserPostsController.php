<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserPostsController extends Controller
{
    public function index (User $user){
        //dd($user);
        $posts=$user->posts()->with(['user','likes'])->paginate(20);
        return view('user.posts.index',[
            'user'=>$user,
            'posts'=>$posts
        ]);
    }
}
