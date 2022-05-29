<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     DB::table('catatan')->insert([
    //         'id'=> 1 ,
    //         'isu'=>'Rehabilitasi Ekosistem Mangrove',
    //         'renaksi'=> 'Renaksi 1',
    //         'turunan_renaksi'=> 'Turunan Renaksi 1',
    //         'tgl_pelaksanaan'=> '2021-06-12',
    //         'kegiatan'=> 'Ekosistem Mangrove',
    //         'arahanMenteri'=> 'Rehabilitasi',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 2 ,
    //         'isu'=>'Pembangunan Bendungan di Nganjuk',
    //         'renaksi'=> 'Renaksi 2',
    //         'turunan_renaksi'=> 'Turunan Renaksi 2',
    //         'tgl_pelaksanaan'=> '2021-07-12',
    //         'kegiatan'=> 'Pembangungan Bendungan',
    //         'arahanMenteri'=> 'Para pekerja diliburkan',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 3 ,
    //         'isu'=>'Distribusi Buku Pelajaran ke Daerah Terpencil',
    //         'renaksi'=> 'Renaksi 3',
    //         'turunan_renaksi'=> 'Turunan Renaksi 3',
    //         'tgl_pelaksanaan'=> '2021-08-30',
    //         'kegiatan'=> 'Distribusi Buku',
    //         'arahanMenteri'=> 'Distribusi Buku',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 4 ,
    //         'isu'=>'Pembangunan Wilayah Pemukiman Untuk Daerah Terkena Bencana Alam',
    //         'renaksi'=> 'Renaksi 4',
    //         'turunan_renaksi'=> 'Turunan Renaksi 4',
    //         'tgl_pelaksanaan'=> '2021-09-12',
    //         'kegiatan'=> 'Pembangunan Pemukiman',
    //         'arahanMenteri'=> 'Alat transportasi akan disesuaikan dengan jumlah bawaan oleh tim',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 5 ,
    //         'isu'=>'Penyebaran Vaksin di Daerah Jawa Barat',
    //         'renaksi'=> 'Renaksi 5',
    //         'turunan_renaksi'=> 'Turunan Renaksi 5',
    //         'tgl_pelaksanaan'=> '2021-10-30',
    //         'kegiatan'=> 'Penyebaran Vaksin',
    //         'arahanMenteri'=> 'Unit kerja yang ada sekarang jumlah nya kurang memadai sehingga akan dialihkan ke unit kerja lainnya',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 6 ,
    //         'isu'=>'Mengantisipasi ancaman di Laut China Selatan',
    //         'renaksi'=> 'Renaksi 1',
    //         'turunan_renaksi'=> 'Turunan Renaksi 1',
    //         'tgl_pelaksanaan'=> '2021-05-16',
    //         'kegiatan'=> 'Mengantisipasi ancaman',
    //         'arahanMenteri'=> 'Mengantisipasi ancaman',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 7 ,
    //         'isu'=>'Membentuk Dewan Negara Produsen Kelapa Sawit',
    //         'renaksi'=> 'Renaksi 2',
    //         'turunan_renaksi'=> 'Turunan Renaksi 2',
    //         'tgl_pelaksanaan'=> '2021-09-01',
    //         'kegiatan'=> 'Membentuk Dewan Negara Produsen Kelapa Sawit',
    //         'arahanMenteri'=> 'Membentuk Dewan Negara',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 8 ,
    //         'isu'=>' Hilirisasi pertambangan mineral',
    //         'renaksi'=> 'Renaksi 3',
    //         'turunan_renaksi'=> 'Turunan Renaksi 3',
    //         'tgl_pelaksanaan'=> '2021-07-29',
    //         'kegiatan'=> 'Hilirisasi pertambangan mineral',
    //         'arahanMenteri'=> 'Hilirisasi',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 9 ,
    //         'isu'=>'Bantuan Untuk Daerah Terkena Bencana Alam',
    //         'renaksi'=> 'Renaksi 4',
    //         'turunan_renaksi'=> 'Turunan Renaksi 4',
    //         'tgl_pelaksanaan'=> '2021-11-15',
    //         'kegiatan'=> 'Pembangunan Pemukiman',
    //         'arahanMenteri'=> 'Alat transportasi akan disesuaikan dengan jumlah bawaan oleh tim',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 10 ,
    //         'isu'=>'Percepatan infrastruktur pariwisata seperti kawasan Danau Toba',
    //         'renaksi'=> 'Renaksi 5',
    //         'turunan_renaksi'=> 'Turunan Renaksi 5',
    //         'tgl_pelaksanaan'=> '2021-07-26',
    //         'kegiatan'=> 'Percepatan infrastruktur pariwisata',
    //         'arahanMenteri'=> 'Percepatan infrastruktur pariwisata',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 11 ,
    //         'isu'=>'Satgas illegal fishing',
    //         'renaksi'=> 'Renaksi 1',
    //         'turunan_renaksi'=> 'Turunan Renaksi 1',
    //         'tgl_pelaksanaan'=> '2021-08-28',
    //         'kegiatan'=> 'Satgas illegal fishing',
    //         'arahanMenteri'=> 'Adanya illegal fishing',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 12 ,
    //         'isu'=>'Pelayaran Gerhana Matahari Total',
    //         'renaksi'=> 'Renaksi 2',
    //         'turunan_renaksi'=> 'Turunan Renaksi 2',
    //         'tgl_pelaksanaan'=> '2021-12-12',
    //         'kegiatan'=> 'Pelayaran Gerhana Matahari Total',
    //         'arahanMenteri'=> 'Pelayaran Gerhana Matahari Total ',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 13 ,
    //         'isu'=>'Ratifikasi batas Indonesia-Singapura',
    //         'renaksi'=> 'Renaksi 3',
    //         'turunan_renaksi'=> 'Turunan Renaksi 3',
    //         'tgl_pelaksanaan'=> '2021-10-05',
    //         'kegiatan'=> 'Ratifikasi batas Indonesia-Singapura',
    //         'arahanMenteri'=> 'Ratifikasi batas Indonesia-Singapura',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 14 ,
    //         'isu'=>' Tata niaga garam',
    //         'renaksi'=> 'Renaksi 4',
    //         'turunan_renaksi'=> 'Turunan Renaksi 4',
    //         'tgl_pelaksanaan'=> '2021-08-20',
    //         'kegiatan'=> 'Niaga garam',
    //         'arahanMenteri'=> 'Tata niaga garam',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 15 ,
    //         'isu'=>'Bebas visa',
    //         'renaksi'=> 'Renaksi 5',
    //         'turunan_renaksi'=> 'Turunan Renaksi 5',
    //         'tgl_pelaksanaan'=> '2021-09-09',
    //         'kegiatan'=> ' Bebas visa',
    //         'arahanMenteri'=> 'Bebas visa',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 16 ,
    //         'isu'=>'Pembenahan Borobudur ',
    //         'renaksi'=> 'Renaksi 1',
    //         'turunan_renaksi'=> 'Turunan Renaksi 1',
    //         'tgl_pelaksanaan'=> '2021-11-21',
    //         'kegiatan'=> 'Pembenahan Borobudur ',
    //         'arahanMenteri'=> 'Pembenahan',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 17 ,
    //         'isu'=>'Peningkatan kualitas SDM kemaritiman',
    //         'renaksi'=> 'Renaksi 2',
    //         'turunan_renaksi'=> 'Turunan Renaksi 2',
    //         'tgl_pelaksanaan'=> '2021-08-18',
    //         'kegiatan'=> 'Peningkatan kualitas SDM ',
    //         'arahanMenteri'=> 'Peningkatan kualitas SDM kemaritiman',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 18 ,
    //         'isu'=>'Pengembangan destinasi wisata bahari Great Jakarta',
    //         'renaksi'=> 'Renaksi 3',
    //         'turunan_renaksi'=> 'Turunan Renaksi 3',
    //         'tgl_pelaksanaan'=> '2021-07-30',
    //         'kegiatan'=> 'Pengembangan destinasi wisata bahari Great Jakarta',
    //         'arahanMenteri'=> 'Pengembangan destinasi wisata ',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 19 ,
    //         'isu'=>'Pembangunan Wilayah Pemukiman Untuk Daerah Terkena Bencana Alam',
    //         'renaksi'=> 'Renaksi 4',
    //         'turunan_renaksi'=> 'Turunan Renaksi 4',
    //         'tgl_pelaksanaan'=> '2021-06-30',
    //         'kegiatan'=> 'Pembangunan Pemukiman',
    //         'arahanMenteri'=> 'Alat transportasi akan disesuaikan dengan jumlah bawaan oleh tim',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 20 ,
    //         'isu'=>'Hilirisasi hasil riset maritim',
    //         'renaksi'=> 'Renaksi 5',
    //         'turunan_renaksi'=> 'Turunan Renaksi 5',
    //         'tgl_pelaksanaan'=> '2021-06-30',
    //         'kegiatan'=> 'hilirisasi hasil riset ',
    //         'arahanMenteri'=> 'hilirisasi hasil riset maritim',
    //     ]);

    //     DB::table('catatan')->insert([
    //         'id'=> 21 ,
    //         'isu'=>'Penguatan karakter budaya bahari',
    //         'renaksi'=> 'Renaksi 1',
    //         'turunan_renaksi'=> 'Turunan Renaksi 1',
    //         'tgl_pelaksanaan'=> '2021-05-12',
    //         'kegiatan'=> 'Penguatan karakter budaya bahari',
    //         'arahanMenteri'=> 'Penguatan ',
    //     ]);

    }
}
