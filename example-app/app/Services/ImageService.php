<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageService
{
  static function getAll($table)
  {
    $result = DB::table($table)->get();

    return $result;
  }

  static function one($table, $id)
  {
    return DB::table($table)->find($id);
  }

  static function add($table, $image)
  {
    if(empty($image)) {
      throw new Exception('Не выбран файл. Выберите файл');
    }

    DB::table($table)->insert(
      ['path' => $image->store('uploads')]
    );
  }

  static function update($table, $imageform, $id)
  {
    if(empty($imageform))
    {
      throw new Exception('Не выбран файл. Выберите выберите файл');
    }
    // получаем объект из БД
    $image = ImageService::one('images', $id);
    // удаляем изображение из папки по названию
    Storage::delete($image->path);
    
    //загружаем изображение в папку uploads
    $path = $imageform->store('uploads');

    DB::table($table)
        ->where('id', $id)
        ->update( ['path' => $path] );
  }

  static function delete($table, $id)
  {
    //находим  данные по $id
    $image = ImageService::one($table, $id);
    
    // удаляем изображение из папки
    Storage::delete($image->path);

    // удаляем строку из БД
    DB::table($table)->where('id', $id)->delete();
  }

}