<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';

    protected $fillable = [ //Esto es para decir qué campos van a poder ser alterados
        'name',
        'email',
        'phone',
        'languaje'
    ];
}
