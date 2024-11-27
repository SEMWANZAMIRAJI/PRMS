<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticatableTrait; 

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'regno',
        'currentyear',
        'courseid',
        'password'
    ];

    public function course(){
        return $this->belongsTo(Course::class, 'courseid');
        
    }

    public function permission(){
        return $this->hasMany(Permission::class);
    }
}
