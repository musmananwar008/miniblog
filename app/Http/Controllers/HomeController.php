<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function show_post()
  {
      $post=Post::all();
      return view('home',['post'=>$post]);
  }
}
