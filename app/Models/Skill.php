<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['skill_title', 'year', 'skill_subtitle', 'skill_level'];
    use HasFactory;

    protected $casts = [
        'skill_subtitle' => 'array',
        'skill_level' => 'array'
    ];
}
