<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'book_id',
        'user_id',
        'status',
        'serial_no'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
