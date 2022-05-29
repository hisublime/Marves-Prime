<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TurenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('turen')->insert([
            'id_turen'=>'1',
            'id_renaksiinduk'=>'6',
            'id_proker' => '1',
            'nama_turen'=>'Diskusi terkait kendala disribusi garam',
            'pic'=>'Deputi 1',
            'tgl_mulai_turen'=>Carbon::parse('2020-01-01'),
            'tgl_akhir_turen'=>Carbon::parse('2020-01-01'),
            'status'=>'Done',
            'tindak_lanjut'=>'Pengambilan keputusan terhadap kendala yang dihadapi',
            'keterangan'=>'Biaya akomodasi ditanggung',
            
        ]);

        DB::table('turen')->insert([
            'id_turen'=>'2',
            'id_renaksiinduk'=>'2',
            'id_proker' => '1',
            'nama_turen'=>'Sewa lahan',
            'pic'=>'Deputi 1',
            'tgl_mulai_turen'=>Carbon::parse('2020-01-01'),
            'tgl_akhir_turen'=>Carbon::parse('2020-01-01'),
            'status'=>'Pending',
            'tindak_lanjut'=>'Mengetahui kepemilikan lahan garam',
            'keterangan'=>'Dilakukan selama periode waktu yang ditentukan',
            
        ]);

        DB::table('turen')->insert([
            'id_turen'=>'3',
            'id_renaksiinduk'=>'5',
            'id_proker' => '1',
            'nama_turen'=>'Petani Garam melakukan sewa lahan',
            'pic'=>'Deputi 1',
            'tgl_mulai_turen'=>Carbon::parse('2020-01-01'),
            'tgl_akhir_turen'=>Carbon::parse('2020-01-01'),
            'status'=>'Active',
            'tindak_lanjut'=>'Memberikan pengarahan lebih lanjut terkait lahan sewa',
            'keterangan'=>'Para petani menggunakan lahan sewa',
            
        ]);

        DB::table('turen')->insert([
            'id_turen'=>'4',
            'id_renaksiinduk'=>'4',
            'id_proker' => '1',
            'nama_turen'=>'Lahan Untuk disewa',
            'pic'=>'Deputi 1',
            'tgl_mulai_turen'=>Carbon::parse('2020-01-01'),
            'tgl_akhir_turen'=>Carbon::parse('2020-01-01'),
            'status'=>'Done',
            'tindak_lanjut'=>'Memperjelas lahan yang bisa disewa dan tidak',
            'keterangan'=>'Para petani menggunakan lahan sewa',
            
        ]);

        DB::table('turen')->insert([
            'id_turen'=>'5',
            'id_renaksiinduk'=>'7',
            'id_proker' => '1',
            'nama_turen'=>'Wawancara tentang pendistribusian garam',
            'pic'=>'Deputi 1',
            'tgl_mulai_turen'=>Carbon::parse('2020-01-01'),
            'tgl_akhir_turen'=>Carbon::parse('2020-01-01'),
            'status'=>'Done',
            'tindak_lanjut'=>'Dilakukan sosialisasi kepada para petani garam',
            'keterangan'=>'Biaya akomodasi ditanggung',
            
        ]);

        DB::table('turen')->insert([
            'id_turen'=>'6',
            'id_renaksiinduk'=>'10',
            'id_proker' => '1',
            'nama_turen'=>'Perlu dilakukan promosi ke investor',
            'pic'=>'Deputi 1',
            'tgl_mulai_turen'=>Carbon::parse('2020-01-01'),
            'tgl_akhir_turen'=>Carbon::parse('2020-01-01'),
            'status'=>'Done',
            'tindak_lanjut'=>'Pemerintah memberikan akses ke Petani garam',
            'keterangan'=>'Kegiatan diadakan oleh pemerintah',
            
        ]);

        DB::table('turen')->insert([
            'id_turen'=>'7',
            'id_renaksiinduk'=>'5',
            'id_proker' => '1',
            'nama_turen'=>'Masalah lahan sewa',
            'pic'=>'Deputi 1',
            'tgl_mulai_turen'=>Carbon::parse('2020-01-01'),
            'tgl_akhir_turen'=>Carbon::parse('2020-01-01'),
            'status'=>'Pending',
            'tindak_lanjut'=>'Memberikan pengarahan lebih lanjut terkait lahan sewa',
            'keterangan'=>'Para petani menggunakan lahan sewa',
            
        ]);

        DB::table('turen')->insert([
            'id_turen'=>'8',
            'id_renaksiinduk'=>'7',
            'id_proker' => '1',
            'nama_turen'=>'Melakukan kunjungan ke petani garam',
            'pic'=>'Deputi 1',
            'tgl_mulai_turen'=>Carbon::parse('2020-01-01'),
            'tgl_akhir_turen'=>Carbon::parse('2020-01-01'),
            'status'=>'Active',
            'tindak_lanjut'=>'Mendiskusikan kendala yang dihadapi',
            'keterangan'=>'Pengambilan keputusan berdasarkan solusi yang ditemukan',
            
        ]);

        DB::table('turen')->insert([
            'id_turen'=>'9',
            'id_renaksiinduk'=>'9',
            'id_proker' => '1',
            'nama_turen'=>'Sosialisasi distribusi garam',
            'pic'=>'Deputi 1',
            'tgl_mulai_turen'=>Carbon::parse('2020-01-01'),
            'tgl_akhir_turen'=>Carbon::parse('2020-01-01'),
            'status'=>'Done',
            'tindak_lanjut'=>'Perlu dilakukan fokus pemerintah kebagian pendistribusian',
            'keterangan'=>'Hal ini diperlukan untuk peningkatan pendapatan petani garam',
            
        ]);

        DB::table('turen')->insert([
            'id_turen'=>'10',
            'id_renaksiinduk'=>'4',
            'id_proker' => '1',
            'nama_turen'=>'Petani garam kesulitan mendistribusikan garam',
            'pic'=>'Deputi 1',
            'tgl_mulai_turen'=>Carbon::parse('2020-01-01'),
            'tgl_akhir_turen'=>Carbon::parse('2020-01-01'),
            'status'=>'Pending',
            'tindak_lanjut'=>'Memberikan keleluasaan kepada petani garam untuk dapat langsung menjual garam tanpa melalui tengkulak',
            'keterangan'=>'Biasanya para petani garam mendapatkan hasil yang sedikit untuk penjualan garam',
            
        ]);



    }
}
