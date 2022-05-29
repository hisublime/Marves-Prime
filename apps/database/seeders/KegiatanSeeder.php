<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('kegiatan')->insert([
            'id_kegiatan'=>'1',
            'id_renaksi'=>'1',
            'id_proker' => '1',
            'nama_kegiatan'=>'Sosialisasi teknik pembuatan garam',
            'lokasi'=>'Medan',
            'pic'=>'Deputi 1',
            'tgl_mulai'=>Carbon::parse('2020-01-01'),
            'tgl_akhir'=>Carbon::parse('2020-01-01'),
            'status'=>'Aktif',
            'tgl_mulairealisasi'=>Carbon::parse('2020-01-01'),
            'tgl_akhirrealisasi'=>Carbon::parse('2020-01-01'),
            'alasan'=>'Karena kurangnya garam yang diproduksi',
        ]);

        \DB::table('kegiatan')->insert([
            'id_kegiatan'=>'2',
            'id_renaksi'=>'2',
            'id_proker' => '1',
            'nama_kegiatan'=>'Promosi ke investor tentang industri garam',
            'lokasi'=>'Medan',
            'pic'=>'Deputi 2',
            'tgl_mulai'=>Carbon::parse('2020-01-01'),
            'tgl_akhir'=>Carbon::parse('2020-01-01'),
            'status'=>'Done',
            'tgl_mulairealisasi'=>Carbon::parse('2020-01-01'),
            'tgl_akhirrealisasi'=>Carbon::parse('2020-01-01'),
            'alasan'=>'Minimnya modal petani untuk memproduksikan produk garam ',
        ]);

        \DB::table('kegiatan')->insert([
            'id_kegiatan'=>'3',
            'id_renaksi'=>'3',
            'id_proker' => '1',
            'nama_kegiatan'=>'Distibusi garam ke Daerah Medan',
            'lokasi'=>'Medan',
            'pic'=>'Deputi 3',
            'tgl_mulai'=>Carbon::parse('2020-01-01'),
            'tgl_akhir'=>Carbon::parse('2020-01-01'),
            'status'=>'Done',
            'tgl_mulairealisasi'=>Carbon::parse('2020-01-01'),
            'tgl_akhirrealisasi'=>Carbon::parse('2020-01-01'),
            'alasan'=>'Distribusi kurang merata',
        ]);

        \DB::table('kegiatan')->insert([
            'id_kegiatan'=>'4',
            'id_renaksi'=>'4',
            'id_proker' => '1',
            'nama_kegiatan'=>'Sosialisasi ke Petani garam',
            'lokasi'=>'Medan',
            'pic'=>'Deputi 4',
            'tgl_mulai'=>Carbon::parse('2020-01-01'),
            'tgl_akhir'=>Carbon::parse('2020-01-01'),
            'status'=>'Pending',
            'tgl_mulairealisasi'=>Carbon::parse('2020-01-01'),
            'tgl_akhirrealisasi'=>Carbon::parse('2020-01-01'),
            'alasan'=>'Agar para petani garam mendapatkan upah yang lebih besar daripada menjual ke tengkulak',
        ]);


        \DB::table('kegiatan')->insert([
            'id_kegiatan'=>'5',
            'id_renaksi'=>'2',
            'id_proker' => '1',
            'nama_kegiatan'=>'Perizinan lahan sewa',
            'lokasi'=>'Medan',
            'pic'=>'Deputi 5',
            'tgl_mulai'=>Carbon::parse('2020-01-01'),
            'tgl_akhir'=>Carbon::parse('2020-01-01'),
            'status'=>'Pending',
            'tgl_mulairealisasi'=>Carbon::parse('2020-01-01'),
            'tgl_akhirrealisasi'=>Carbon::parse('2020-01-01'),
            'alasan'=>'Untuk menjemur garam perlu lahan',
            ]);
            
            \DB::table('kegiatan')->insert([
                'id_kegiatan'=>'6',
                'id_renaksi'=>'4',
                'id_proker' => '1',
                'nama_kegiatan'=>'Perlu dilakukan promosi garam',
                'lokasi'=>'Medan',
                'pic'=>'Deputi 6',
                'tgl_mulai'=>Carbon::parse('2020-01-01'),
                'tgl_akhir'=>Carbon::parse('2020-01-01'),
                'status'=>'Pending',
                'tgl_mulairealisasi'=>Carbon::parse('2020-01-01'),
                'tgl_akhirrealisasi'=>Carbon::parse('2020-01-01'),
                'alasan'=>'Para petani perlu melakukan promosi produk garam ',
            ]);
    
            \DB::table('kegiatan')->insert([
                'id_kegiatan'=>'7',
                'id_renaksi'=>'2',
                'id_proker' => '1',
                'nama_kegiatan'=>'Wawancara Petani garam',
                'lokasi'=>'Medan',
                'pic'=>'Deputi 2',
                'tgl_mulai'=>Carbon::parse('2020-01-01'),
                'tgl_akhir'=>Carbon::parse('2020-01-01'),
                'status'=>'Done',
                'tgl_mulairealisasi'=>Carbon::parse('2020-01-01'),
                'tgl_akhirrealisasi'=>Carbon::parse('2020-01-01'),
                'alasan'=>'Untuk mengetahui kendala saat melakukan produksi garam',
            ]);
    
            \DB::table('kegiatan')->insert([
                'id_kegiatan'=>'8',
                'id_renaksi'=>'3',
                'id_proker' => '1',
                'nama_kegiatan'=>'Kunjungan ke pasar ditribusi garam',
                'lokasi'=>'Medan',
                'pic'=>'Deputi 2',
                'tgl_mulai'=>Carbon::parse('2020-01-01'),
                'tgl_akhir'=>Carbon::parse('2020-01-01'),
                'status'=>'Pending',
                'tgl_mulairealisasi'=>Carbon::parse('2020-01-01'),
                'tgl_akhirrealisasi'=>Carbon::parse('2020-01-01'),
                'alasan'=>'Untuk mengetahui asal produksi garam',
            ]);
    
            \DB::table('kegiatan')->insert([
                'id_kegiatan'=>'9',
                'id_renaksi'=>'4',
                'id_proker' => '1',
                'nama_kegiatan'=>'Meninjau produsen garam',
                'lokasi'=>'Medan',
                'pic'=>'Deputi 4',
                'tgl_mulai'=>Carbon::parse('2020-01-01'),
                'tgl_akhir'=>Carbon::parse('2020-01-01'),
                'status'=>'Done',
                'tgl_mulairealisasi'=>Carbon::parse('2020-01-01'),
                'tgl_akhirrealisasi'=>Carbon::parse('2020-01-01'),
                'alasan'=>'Untuk mengetahui masalah pemasaran garam',
            ]);
    
            \DB::table('kegiatan')->insert([
               'id_kegiatan'=>'10',
                'id_renaksi'=>'9',
                'id_proker' => '1',
                'nama_kegiatan'=>'Kunjungan ke produsen garam',
                'lokasi'=>'Medan',
                'pic'=>'Deputi 6',
                'tgl_mulai'=>Carbon::parse('2020-01-01'),
                'tgl_akhir'=>Carbon::parse('2020-01-01'),
                'status'=>'Pending',
                'tgl_mulairealisasi'=>Carbon::parse('2020-01-01'),
                'tgl_akhirrealisasi'=>Carbon::parse('2020-01-01'),
                'alasan'=>'Untuk mengetahui kendala apa yang dihadapi para petani garam',
            ]);
    }
}
