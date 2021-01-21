<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    protected $table = 'la_calaka';

    protected $fillable = [
        'title',
        'cover',
        'description',
        'date',
        'time',
        'location',
        'style',
        'id',
    ];
}
