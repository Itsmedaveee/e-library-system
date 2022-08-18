<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'id_number',
        'name',
        'gender',
        'email',
        'year_level',
        'section',
        'status',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }    

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
