<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

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

//Show Edit Form
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

//Update edited post
Route::put('/posts/{post}', [PostController::class, 'update']);

// Single Listing
Route::get('/posts/{post}', [PostController::class, 'show']);
