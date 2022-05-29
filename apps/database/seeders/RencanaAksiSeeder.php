<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RencanaAksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rencana_aksi')->insert([
            'id_renaksi'=>'1',
            'id_proker'=>'1',
            'nama_renaksi'=>'Penguasaan teknik pembuatan garam minim',
            'pic'=>'Deputi 1',
            'tgl_mulai'=>Carbon::parse('2020-01-01'),
            'tgl_akhir'=>Carbon::parse('2020-01-01'),
            'status'=>'Done',
            'tindak_lanjut'=>'Memberikan sosialisasi pada petani garam tentang teknik pembuatan garam yang baik dan benar',
            'keterangan'=>'Dilakukan  dalam periode waktu yang ditentukan',
            
        ]);

        DB::table('rencana_aksi')->insert([
            'id_renaksi'=>'2',
            'id_proker'=>'1',
            'nama_renaksi'=>'Kepemilikan modal yang kecil',
            'pic'=>'Deputi 1',
            'tgl_mulai'=>Carbon::parse('2020-01-01'),
            'tgl_akhir'=>Carbon::parse('2020-01-01'),
            'status'=>'Done',
            'tindak_lanjut'=>'Pemerintah memberikan bantuan terkait pemodalan petani garam',
            'keterangan'=>'Dilakukan selama periode waktu yang ditentukan',
            
        ]);

        DB::table('rencana_aksi')->insert([
            'id_renaksi'=>'3',
            'id_proker'=>'1',
            'nama_renaksi'=>'Akses ke pasar yang minim',
            'pic'=>'Deputi 3',
            'tgl_mulai'=>Carbon::parse('2020-01-01'),
            'tgl_akhir'=>Carbon::parse('2020-01-01'),
            'status'=>'Done',
            'tindak_lanjut'=>'Perlu diberikan akses terbuka bagi petani garam untuk memasarkan produknya',
            'keterangan'=>'Dilakukan dengan bantuan tim dari pemerintah yang bersangkutan',
            
        ]);
         
        DB::table('rencana_aksi')->insert([
            'id_renaksi'=>'4',
            'id_proker'=>'1',
            'nama_renaksi'=>'Ketergantungan kepada tengkulak',
            'pic'=>'Deputi 1',
            'tgl_mulai'=>Carbon::parse('2020-01-01'),
            'tgl_akhir'=>Carbon::parse('2020-01-01'),
            'status'=>'Done',
            'tindak_lanjut'=>'Memberikan keleluasaan kepada petani garam untuk dapat langsung menjual garam tanpa melalui tengkulak',
            'keterangan'=>'Biasanya para petani garam mendapatkan hasil yang sedikit untuk penjualan garam',
            
        ]);

        DB::table('rencana_aksi')->insert([
            'id_renaksi'=>'5',
            'id_proker'=>'1',
            'nama_renaksi'=>'Keterbatasan kepemilikan lahan',
            'pic'=>'Deputi 1',
            'tgl_mulai'=>Carbon::parse('2020-01-01'),
            'tgl_akhir'=>Carbon::parse('2020-01-01'),
            'status'=>'Pending',
            'tindak_lanjut'=>'Memberikan pengarahan lebih lanjut terkait lahan sewa',
            'keterangan'=>'Para petani menggunakan lahan sewa',
            
        ]);

        DB::table('rencana_aksi')->insert([
            'id_renaksi'=>'6',
            'id_proker'=>'1',
            'nama_renaksi'=>'Survey lapangan ke lahan garam',
            'pic'=>'Deputi 1',
            'tgl_mulai'=>Carbon::parse('2020-01-01'),
            'tgl_akhir'=>Carbon::parse('2020-01-01'),
            'status'=>'Done',
            'tindak_lanjut'=>'Mennyelesaikan permasalahan petani garam terkait hal hal yang dibutuhkan kedepannya',
            'keterangan'=>'Biaya akomodasi ditanggung',
            
        ]);

        DB::table('rencana_aksi')->insert([
            'id_renaksi'=>'7',
            'id_proker'=>'1',
            'nama_renaksi'=>'Pola distribusi garam bermasalah',
            'pic'=>'Deputi 5',
            'tgl_mulai'=>Carbon::parse('2020-01-01'),
            'tgl_akhir'=>Carbon::parse('2020-01-01'),
            'status'=>'Pending',
            'tindak_lanjut'=>'Perlu sosialisasi untuk mengarahkan area area mana saja garam perlu didistribusikan',
            'keterangan'=>'Biaya akomodasi ditanggung',
            
        ]);

        DB::table('rencana_aksi')->insert([
            'id_renaksi'=>'8',
            'id_proker'=>'1',
            'nama_renaksi'=>'Terhambatnya produksi garam',
            'pic'=>'Deputi 2',
            'tgl_mulai'=>Carbon::parse('2020-01-01'),
            'tgl_akhir'=>Carbon::parse('2020-01-01'),
            'status'=>'Pending',
            'tindak_lanjut'=>'Melakukan import garam agar distribusi garam merata',
            'keterangan'=>'Akibat terjadi hujan terus menerus',
            
        ]);

        DB::table('rencana_aksi')->insert([
            'id_renaksi'=>'9',
            'id_proker'=>'1',
            'nama_renaksi'=>'Minimnya pendapatan petani garam',
            'pic'=>'Deputi 4',
            'tgl_mulai'=>Carbon::parse('2020-01-01'),
            'tgl_akhir'=>Carbon::parse('2020-01-01'),
            'status'=>'Done',
            'tindak_lanjut'=>'Perlu dilakukan fokus pemerintah kebagian pendistribusian',
            'keterangan'=>'Hal ini diperlukan untuk peningkatan pendapatan petani garam',
            
        ]);

        DB::table('rencana_aksi')->insert([
            'id_renaksi'=>'10',
            'id_proker'=>'1',
            'nama_renaksi'=>'Investor  belum berkomitmen dengan lahan yang disewakan',
            'pic'=>'Deputi 1',
            'tgl_mulai'=>Carbon::parse('2020-01-01'),
            'tgl_akhir'=>Carbon::parse('2020-01-01'),
            'status'=>'Done',
            'tindak_lanjut'=>'Pemerintah melakukan penindakan tegas terhadap investor yang melanggar perjanjian',
            'keterangan'=>'Dalam status masih disewakan',
            
        ]);
    }
}

