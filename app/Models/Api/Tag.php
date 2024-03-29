<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table    = 'tags';
    protected $fillable = ['name'];


    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
