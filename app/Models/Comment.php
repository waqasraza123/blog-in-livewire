<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = "comments";

    /*
     * Comment belongs to a Post
     */
    public function post(){
        return $this->belongsTo(Post::class, "post_id", "id");
    }
}
