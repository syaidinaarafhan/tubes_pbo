<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalangDanaModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'namaKTP',
        'noTelfon',
        'status',
        'akunMedsos',
        'judulKampanye',
        'Tujuan',
        'Lokasi',
        'perkiraanWaktu',
        'rincianPenggunaanDana',
        'fotoGalangDana',
        'fotoKTP',
        'berkasLainnya',
    ];
}
