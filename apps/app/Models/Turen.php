<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Turen extends Model
{
    use HasFactory;
    protected $table = 'turen';
    protected $primaryKey = 'id_turen';
    public $timestamps = false;
    protected $fillable = [
        'id_proker',
        'nama_turen',
        'id_renaksiinduk', 
        'pic', 
        'tgl_mulai_turen', 
        'tgl_akhir_turen',
        'status',
        'tindak_lanjut',
        'keterangan',
         
    ];
}
