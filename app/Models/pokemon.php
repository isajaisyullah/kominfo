<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pokemon extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $table = 'pokemon';
    protected $fillable = [
        'name',
        'base_experience',
        'weight',
        'image_url'
    ];
}
