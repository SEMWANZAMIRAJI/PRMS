<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'lecture_id',
        'student_id',
        'title',
        'description',
        'attach',
        'status'
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function lecture(){
        return $this->belongsTo(lecture::class);
    }

    public function reply()
    {
        return $this->hasOne(Reply::class);
    }
}
