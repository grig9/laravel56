<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\ImageService;
use Exception;
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
        // получаем и удаляем данные из session
        $status = session()->pull('status');

        return view('create', ['status' => $status]);
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

        try {
            ImageService::add('images', $image);
        } catch(Exception $e) {
            $message =  $e->getMessage();
            session()->put('status', ['type' => 'danger', 'message' => $message]);

            return back();
        }
        
        return redirect('/');
    }

    function edit($id) 
    {
        // получаем и удаляем данные из session
        $status = session()->pull('status');

        $image = ImageService::one('images', $id);
    
        return view('edit', ['image' => $image, 'status' => $status]);
    }

    function update(Request $request, $id) 
    {
        try {
            $imageform = $request->file('image');
            ImageService::update('images', $imageform,  $id);
        
            return redirect('/');
        } catch (Exception $e) {
            $message =  $e->getMessage();
            session()->put('status', ['type' => 'danger', 'message' => $message]);
            
            return back();
        } 
    }

    function delete($id) 
    {
        ImageService::delete('images', $id);
        // переходим на главную страницу
        return redirect('/');
    }
}
