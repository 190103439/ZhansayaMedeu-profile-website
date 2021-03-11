<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use app\Models\Post;

class ClientController extends Controller
{
    public function index(){
      $clients = Post::all();

      return view('client.index')->with(['clients' => $clients]);
    }
    public function store(Request $request){
      Post::create([
      'title' => $request->title,
      'body' => $request->body
      ]);
      return back();
    }
}
