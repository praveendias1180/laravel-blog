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
    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
        
    }

    public static function find($slug){
        $posts = static::all();

        $post = $posts->firstWhere('slug', $slug);

        return $post;
    }

    public static function findOrFail($slug){

        $post = static::find($slug);

        if(!$post){
            throw new ModelNotFoundException();
        }

        return $post;
    }
    
    public static function all(){
        $files = File::files(resource_path("posts"));

        return cache()->rememberForever('posts.all', function() use ($files){
            return collect($files)
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(fn($document) => new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug,
                ))
                ->sortByDesc('date');
        });
    }
}