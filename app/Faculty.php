<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'department_id',
        'id_number',
        'name',
        'gender'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }    
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
