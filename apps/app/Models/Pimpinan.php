<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Pimpinan extends Model
{
    use HasFactory;
    protected $table = 'rencana_aksi';
    protected $fillable = ['id_renaksi','nama_renaksi', 'pic', 'tgl_mulai', 'tgl_akhir'];
}
