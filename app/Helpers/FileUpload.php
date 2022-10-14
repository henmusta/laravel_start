<?php

namespace App\Helpers;
use Carbon\Carbon;
use Image;
use File;
use Illuminate\Support\Str;

class Fileupload
{
  public $image_path;
  public $document_path;

  // [array('800', '450', 'thumbnail'), array('1280', '720', 'compress')]
  public static function uploadImage($file, $dimensions, $location = 'storage', $old_file = NULL, $fileName = NULL)
  {

    if (request()->hasFile($file)) {
      if($location == 'storage'){
        $image_path = storage_path('app/public/images');
        $file = request()->file($file);
        dd($file);
        $ext = $file->getClientOriginalExtension();
        // dd($file->getClientOriginalName());
        $fileName = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME). '_' . Carbon::now()->timestamp).'.'.$ext;

        if (!File::isDirectory("$image_path/original")) {
          File::makeDirectory("$image_path/original", 0755, true);
        }
        Image::make($file)->save($image_path . '/original/' . $fileName);
        File::delete("images/original/$old_file");

        foreach ($dimensions as $row) {
          $canvas = Image::canvas($row[0], $row[1]);
          $resizeImage  = Image::make($file)->resize($row[0], $row[1], function($constraint) {
            $constraint->aspectRatio();
          });
          if (!File::isDirectory($image_path . '/' . $row[2])) {
            File::makeDirectory($image_path . '/' . $row[2], 0777, true);
          }
          $canvas->insert($resizeImage, 'center');
          $canvas->save($image_path . '/' . $row[2] . '/' . $fileName);
          File::delete("images/$row[2]/$old_file");
        }
      }else{
        $image_path = public_path('images');
        $file = request()->file($file);
        $ext = $file->getClientOriginalExtension();
        $fileName = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME). '_' . Carbon::now()->timestamp).'.'.$ext;

        if (!File::isDirectory("$image_path/original")) {
          File::makeDirectory("$image_path/original", 0755, true);
        }
        Image::make($file)->save($image_path . '/original/' . $fileName);
        File::delete("images/original/$old_file");

        foreach ($dimensions as $row) {
          $canvas = Image::canvas($row[0], $row[1]);
          $resizeImage  = Image::make($file)->resize($row[0], $row[1], function($constraint) {
            $constraint->aspectRatio();
          });
          if (!File::isDirectory($image_path . '/' . $row[2])) {
            File::makeDirectory($image_path . '/' . $row[2], 0777, true);
          }
          $canvas->insert($resizeImage, 'center');
          $canvas->save($image_path . '/' . $row[2] . '/' . $fileName);
          File::delete("images/$row[2]/$old_file");
        }
      }
      return $fileName;
    }
  }
}
