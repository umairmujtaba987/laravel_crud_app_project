<?php
 

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\adminmiddleware;
use Illuminate\Routing\Controllers\Middleware;
Route::get('/', function () {
    //$posts = Post::where('user_id',auth()->id())->get();
    $posts = [];
    if(auth()->check()){
        $posts = auth()->user()->usersPosts()->latest()->get();
         
    }
  return view('home', ['posts' => $posts]);
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
 
Route::post('/registered', [UserController::class, 'register']);

Route::post('/userlogin', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

// Blog post relate routes
Route::middleware('admin')->group(function(){  
Route:: post('/create-post', [PostController::class, 'createPost']);



Route::get('/edit-post/{post}',[PostController::class, 'showEditScreen']);
Route::Put('/edit-post/{post}',[PostController::class, 'actuallyUpdatePost']);
Route::delete('/delete-post/{post}',[PostController::class, 'deletePost']);
});


//logs....
Route::get('/logs', function(){

    \Log::channel('customlog')->info('this is my custom log file');

    dd("done");
});
