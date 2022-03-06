<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'body',
        'upload_photo',
        'upload_file',
        'author'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
