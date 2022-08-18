<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'username', 'faculty_id',
        'department_id', 'status', 'student_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function role() 
    {
        return $this->belongsTo(Role::class);
    }
    public function department() 
    {
        return $this->belongsTo(Department::class);
    }
    public function student() 
    {
        return $this->belongsTo(Student::class);
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }


    public function isAdmin()
    {
        return auth()->check() && auth()->user()->role->name == 'Administrator';
    }    

    public function isFaculty()
    {
        return auth()->check() && auth()->user()->role->name == 'Faculty';
    }    

    public function isStudent()
    {
        return auth()->check() && auth()->user()->role->name == 'Student';
    }

    public function hasRole($role)
    {
        return in_array($this->role->name, $role);
    }

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }

}
