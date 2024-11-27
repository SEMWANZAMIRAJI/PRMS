<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticateTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Admin extends Model implements Authenticatable 
{
    use AuthenticateTrait;
 
    use HasFactory;

    protected $fillable=[
        'firstname',
        'lastname',
        'username',
        'email',
        'avatar',
        'phone',
        'password'
    ];
}
