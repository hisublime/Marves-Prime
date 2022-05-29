<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rakor extends Model
{
    use HasFactory;

    protected $table = 'rakor';
    protected $primaryKey = 'id_rakor';
    public $timestamps = false;
    protected $fillable = [
        'id_rakor',
        'id_kegiatan',
        'topik',
        'pic',
	    'lokasi',
        'tgl_pelaksanaan',
        'waktu',
        'kegiatan',
        'catatan',
        'status',
    ];
}
