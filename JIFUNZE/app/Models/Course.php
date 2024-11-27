<?php

namespace App\Models;

use App\Models\Module;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'cname',
        'duration',
       
    ];

    public function student(){
        return $this->hasMany(Student::class);
    }

    public function module()
    {
        return $this->hasMany(Module::class);
    }
}
