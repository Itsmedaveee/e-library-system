<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportLog extends Model
{
    protected $fillable = [
        'user_id',
        'book_id',
        'status'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }   

    public function book() 
    {
        return $this->belongsTo(Book::class);
    }
    public function inventory() 
    {
        return $this->belongsTo(Inventory::class);
    }
}
