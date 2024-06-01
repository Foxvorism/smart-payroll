<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'm_role';
    protected $fillable = [
        'name',
        'username',
        'password',
    ];
    protected $hidden = [
        'password'
    ];
}
