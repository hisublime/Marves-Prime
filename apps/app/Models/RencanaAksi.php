<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class RencanaAksi extends Model
{
    use HasFactory;

    protected $table = 'rencana_aksi';
    protected $primaryKey = 'id_renaksi';
    public $timestamps = false;
    protected $fillable = [
        'id_renaksi',
        'id_proker',
        'nama_renaksi',
        'id_renaksiinduk', 
        'pic', 
        'tgl_mulai', 
        'tgl_akhir',
        'status',
        'tindak_lanjut',
        'keterangan',
        'level'   
    ];
   
}
// 'id_proker','id_renaksiinduk', 'substansi', 'kolaborator',  'status', 'progres', 'kendala','tindak_lanjut','keterangan','level'