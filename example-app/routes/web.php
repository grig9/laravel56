<?php

use App\Http\Controllers\ImagesController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ImagesController::class, 'index']);

Route::get('/create', [ImagesController::class, 'create']);

Route::get('/show/{id}', [ImagesController::class, 'show']);

Route::post('/store', [ImagesController::class, 'store']);

Route::get('/edit/{id}', [ImagesController::class, 'edit']);

Route::post('/update/{id}', [ImagesController::class, 'update']);

Route::get('/delete/{id}', [ImagesController::class, 'delete']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/posts', [HomeController::class, 'posts']);

Route::get('/post', function() {
  Post::create([
    'title' => 'asdfasd',
    'slug' => 'asdfasd',
    'content' => 'Lorem impusm',
    'date' => date('Y-m-d'),
    'user_id' => 1,
    'image' => 'uploads/pGgHDfidbCRAQalzcD9DJbdN7OsdBs5znOJRms8f.png',

  ]);
});