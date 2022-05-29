<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;

    protected $table = 'notifikasi';
    protected $primaryKey = 'id_notifikasi';
    protected $keyType = 'string';
    protected $fillable = [
        'id_notifikasi',
        'id_unitkerja',
        'id_pegawai',
        'tanggal',
        'waktu',
        'notifikasi',
        'keterangan',
    ];
}
