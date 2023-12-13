<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumne extends Model
{
    use HasFactory;
    protected $table = 'alumnat';

    protected $fillable = [
        'name',
        'surname',
        'email'
    ];

    protected $hidden = [];
}
