<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';
    public $timestamps = false;
    protected $fillable = [
        'id_kegiatan',
        'id_renaksi',
        'id_proker',
        'nama_kegiatan',
        'lokasi',
        'pic',
        'tgl_mulai',
        'tgl_akhir',
        'status',
        'tgl_mulairealisasi',
        'tgl_akhirrealisasi',
        'alasan',
        'keterangan',
    ];
}
