<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lecture extends Model implements Authenticatable
{
    use AuthenticatableTrait; 

    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'avatar',
        'moduleid'
    ];

    public function module(){
        return $this->belongsTo(Module::class, 'moduleid');
    }

    public function permission(){
        return $this->HasMany(Permission::class);
    }
}
