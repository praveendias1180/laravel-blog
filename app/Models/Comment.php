<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Comment belongs to post
     *
     * @return void
     */
    public function post(){
        return $this->belongsTo(Post::class);
    }

    /**
     * Comment belongsTo author
     *
     * @return void
     */
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
