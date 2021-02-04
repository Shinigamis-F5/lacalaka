<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;

    protected $fillable = [
        'style',
        'style_description',        

    ];

        public function parties() 
        {
            return $this->hasMany(Party::class);
        }

}
