<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

//All Posts
Route::get('/', [PostController::class, 'index']);


//Show Create Form
Route::get('/posts/create', [PostController::class, 'create']);

//Store Post Data
Route::post('/posts', [PostController::class, 'store']);



//Single Post
Route::get('/posts/{post}', [PostController::class, 'show']);
