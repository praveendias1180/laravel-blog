<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post {

    public static function find($slug){

        $path = resource_path("posts/{$slug}.html");

        if(! file_exists($path)){
            throw new ModelNotFoundException();
        }

        return file_get_contents($path);

        $post = cache()->remember("posts.{slug}", now()->addSeconds(2), fn() =>  file_get_contents($path)); 

        return $post;
    }
    
    public static function all(){
        $posts = File::files(resource_path("posts"));
        return array_map(function ($file){
            return $file->getContents();
        }, $posts);
    }
}