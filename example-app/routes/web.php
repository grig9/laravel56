<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
Route::get('/', function () {
    $result = DB::table('images')->get();

    $images = $result->all();
    
    return view('main', ['images' => $images]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/show/{id}', function ($id) {
    $result = DB::table('images')->find($id);
    $image = $result->path;

    return view('show', ['image' => $image]);
});

Route::post('/store', function (Request $request) {
    // получаем объект image
    $image = $request->file('image');

    //работаем с объектом image
    $path = $image->store('uploads');

    DB::table('images')->insert(
        ['path' => $path, ]
    );
    
    return redirect('/');
});

Route::get('/edit/{id}', function($id) {
    $result = DB::table('images')->find($id);
    $image = $result->path;

    return view('edit', ['image' => $image]);
});

Route::post('/update', function (Request $request) {
    $path = $request->file('image')->store('uploads');

    DB::table('images')->where('id')->update(
        ['path' => $path]
    );
});