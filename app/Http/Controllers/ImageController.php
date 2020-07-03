<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function displayImage($filename)
    {
        try {
            $path = storage_public('images/' . $filename);
            if (!File::exists($path)) {
                abort(404);
            }
            $file = File::get($path);
            $type = File::mimeType($path);
            $response = Response::make($file, 200);
            $response->header("Content-Type", $type);
            return $response;
        } catch (\Exception $exception){
            $data = array("icofont-crying", $exception->getMessage(), $exception->getCode(), $exception->getLine(), $exception->getFile());
            return view("errorPage", ["data" => $data]);
        }

    }
}
