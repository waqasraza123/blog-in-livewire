<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $table = "posts";

    /*
     * Post has many Comments
     */
    public function comments(){
        return $this->hasMany(Comment::class, "post_id", "id");
    }
}
