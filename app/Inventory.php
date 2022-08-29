<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'book_id',
        'user_id',
        'status',
        'date_duration',
        'serial_no'
    ];

    protected $dates = ['date_duration'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
