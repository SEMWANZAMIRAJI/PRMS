<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Lecture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'mname',
        'mcode',
        'mcredit',
        'courseid',
    ];

    public function course(){
        return $this->belongsTo(Course::class, 'courseid');
    }

    public function lecture(){
        return $this->hasOne(Lecture::class);
    }

}
