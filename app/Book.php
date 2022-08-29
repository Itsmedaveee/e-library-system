<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'published', 
        'body', 
        'upload_photo', 
        'person_published', 
        'author'
    ];

    protected $dates = ['published', 'created_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function report()
    {
        return $this->belongsTo(ReportLog::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }
}
