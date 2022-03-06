<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name'
    ];

    public function faculty()
    {
        return $this->hasMany(Faculty::class);
    }
}
