<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto_head',
        'judul',
        'lokasi_tahun',
        'desc_lengkap',
        'desc_singkat_1',
        'desc_singkat_2',
        'desc_singkat_3',
        'foto_1',
        'foto_2',
        'foto_3',
        'foto_4',
        'is_featured',
    ];
}