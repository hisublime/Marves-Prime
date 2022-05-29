<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKerja extends Model
{
    use HasFactory;

    protected $table = 'program_kerja';
    protected $primaryKey = 'id_proker';
    public $timestamps = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id_proker',
        'eselon1',
        'eselon2',
        'nama_proker',
        'substansi',
        'pic_proker',
        'kolaborator',
        'tgl_mulai',
        'tgl_akhir',
        'kategori',
        'status',
        'progres',
        'kendala',
        'tindak_lanjut',
        'keterangan',
    ];
}