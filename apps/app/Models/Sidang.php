<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidang extends Model
{
    use HasFactory;

    protected $table = 'sidang';
    protected $primaryKey = 'id_laporan';
    protected $keyType = 'string';
    protected $fillable = [
        'id_laporan',
        'id_pegawai',
        'tanggal',
        'waktu',
        'hasil_sidang',
        'keterangan',
    ];
}
