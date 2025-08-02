<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    // Nama tabel secara default akan menjadi 'about_us'
    // Jika tidak sesuai, Anda bisa menentukannya secara eksplisit:
    // protected $table = 'about_us';

    protected $fillable = [
        'foto_head',
        'foto_1',
        'judul_1',
        'desc_1',
        'foto_2',
        'judul_2',
        'desc_2',
    ];
}