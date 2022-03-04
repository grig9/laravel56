<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\ImageService;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    function index() 
    {
        $images = ImageService::getAll('images');
        
        return view('main', ['images' => $images]);
    }

    function create()
    {
        return view('create');
    }

    function show($id) 
    {
        $image = ImageService::one('images', $id);
    
        return view('show', ['image' => $image->path]);
    }

    function store(Request $request) 
    {
        // получаем объект image
        $image = $request->file('image');

        ImageService::add('images', $image);
        
        return redirect('/');
    }

    function edit($id) 
    {
        $image = ImageService::one('images', $id);
    
        return view('edit', ['image' => $image]);
    }

    function update(Request $request, $id) 
    {
        $imageform = $request->file('image');
        ImageService::update('images', $imageform,  $id);
    
        return redirect('/');
    }

    function delete($id) 
    {
        ImageService::delete('images', $id);
        // переходим на главную страницу
        return redirect('/');
    }
}
