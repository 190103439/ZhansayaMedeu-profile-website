<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\ClientController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('post/create', function () {
   DB::table('post')->insert([
      'title' => 'Zhansaya',
      'body' => 'Hello! I am 19 years old.'
   ]);
});

Route::get('post', function () {
    $post = Post::find(1);
    return $post;
 });

 Route::get('client', [ClientController::class, 'index']);
 Route::get('client/create', function(){
    return view('client.create');
 });

 Route::post('client/create', [ClientController::class, 'store'])->name('add-client');



 

