<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    // protected $table = 'la_calaka';

    protected $fillable = [
        'title',
        'cover',
        'description',
        'date',
        'time',
        'location',
        'style_id',
        'user_id',
        
    ];

    public function venue()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function style() 
    {
        return $this->belongsTo(Style::class);
    }
}
