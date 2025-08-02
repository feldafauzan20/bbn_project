<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HowWeWork extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto_head',
        'foto_1',
        'foto_2',
        'foto_3',
        'foto_4',
    ];
}