<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RakorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rakor')->insert([
            'id_rakor'=> 1 ,
	        'id_kegiatan'=> 1 ,
            'topik'=> 'Rehabilitasi Ekosistem Mangrove',
            'pic'=> 'Yohanes',
            'lokasi'=> 'Gedung B Lantai 3',
            'waktu'=> '08:00:00',
            'tgl_pelaksanaan'=> '2021-06-12',
            'kegiatan'=> 'Ekosistem Mangrove',
            'catatan'=> 'Rehabilitasi',
            'status'=> 'Menunggu',
        ]);
        DB::table('rakor')->insert([
            'id_rakor'=> 2 ,
	        'id_kegiatan'=> 2 ,
            'topik'=> 'Pembangunan Bendungan di Nganjuk',
            'pic'=> 'Ulion',
            'lokasi'=> 'Gedung C Lantai 2',
            'waktu'=> '09:00:00',
            'tgl_pelaksanaan'=> '2021-07-12',
            'kegiatan'=> 'Pembangungan Bendungan',
            'catatan'=> 'Para pekerja sedang diliburkan',
            'status'=> 'Menunggu',
        ]);
        DB::table('rakor')->insert([
            'id_rakor'=> 3 ,
	        'id_kegiatan'=> 3 ,
            'topik'=> 'Distribusi Buku Pelajaran ke Daerah Terpencil',
            'pic'=> 'Roy',
            'lokasi'=> 'Gedung A Lantai 1',
            'waktu'=> '10:00:00',
            'tgl_pelaksanaan'=> '2021-08-30',
            'kegiatan'=> 'Distribusi Buku',
            'catatan'=> 'Distribusi',
            'status'=> 'Diterima',
        ]);
        DB::table('rakor')->insert([
            'id_rakor'=> 4 ,
	        'id_kegiatan'=> 4 ,
            'topik'=> 'Pembangunan Wilayah Pemukiman Untuk Daerah Terkena Bencana Alam',
            'pic'=> 'Cindy',
            'lokasi'=> 'Gedung C Lantai 2',
            'waktu'=> '11:00:00',
            'tgl_pelaksanaan'=> '2021-09-12',
            'kegiatan'=> 'Pembangunan Pemukiman',
            'catatan'=> 'Alat transportasi akan disesuaikan dengan jumlah bawaan oleh tim',
            'status'=> 'Ditolak',
        ]);
        DB::table('rakor')->insert([
            'id_rakor'=> 5 ,
	        'id_kegiatan'=> 5 ,
            'topik'=> 'Penyebaran Vaksin di Daerah Jawa Barat',
            'pic'=> 'Erika',
            'lokasi'=> 'Gedung F Lantai 1',
            'waktu'=> '12:00:00',
            'tgl_pelaksanaan'=> '2021-10-30',
            'kegiatan'=> 'Penyebaran Vaksin',
            'catatan'=> 'Unit kerja yang ada sekarang jumlah nya kurang memadai sehingga akan dialihkan ke unit kerja lainnya',
            'status'=> 'Diterima',
        ]);
    }
}