<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post {
    public $title;
    public $excerpt;
    public $date;
    public $body;

    public function __construct($title, $excerpt, $date, $body)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        
    }

    public static function find($slug){

        $path = resource_path("posts/{$slug}.html");

        if(! file_exists($path)){
            throw new ModelNotFoundException();
        }

        $document = YamlFrontMatter::parseFile($path);  
        return $document;
        // return file_get_contents($path);

        // $post = cache()->remember("posts.{slug}", now()->addSeconds(2), fn() =>  file_get_contents($path)); 

        // return $post;
    }
    
    public static function all(){
        $posts = File::files(resource_path("posts"));
        return array_map(function ($file){
            $document = YamlFrontMatter::parseFile($file);  
            return $document;
        }, $posts);
    }
}