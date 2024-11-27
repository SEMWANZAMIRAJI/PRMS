<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = [
        'permission_id',
        'reply',
        'attach'
    ];

    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }
}
