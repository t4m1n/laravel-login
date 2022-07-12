<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_rm',
        'nama_pasien',
        'tgl_lahir',
        'poli',
        'tgl_daftar',
        'user'
    ];
}
