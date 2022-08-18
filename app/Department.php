<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function faculties()
    {
        return $this->hasMany(Faculty::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
