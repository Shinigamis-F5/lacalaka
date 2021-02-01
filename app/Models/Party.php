<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
        'style',
        'user_id',
        
    ];

    public function getCoverUrl()
    {
        return Storage::url($this->cover);
    }

    public function venue()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
