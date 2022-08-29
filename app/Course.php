<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
class Course extends Model
{
    protected $fillable = [
        'code', 
        'name', 
        'department_id'
    ];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }   

    public function user()
    {
        return $this->belongsTo(User::class);
    }    

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
