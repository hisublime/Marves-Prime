<?php

namespace Database\seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProgramKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //data proker deputi 1 asdep 1
        \DB::table('program_kerja')->insert(
            ['id_proker' => '1',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 1', 
             'nama_proker'=>'Permasalahan Kesehatan di Jakarta', 
             'substansi'=>'Kesehatan', 
             'pic_proker'=>'Naomi', 
             'kolaborator'=>'', 
             'tgl_mulai'=> '2021-05-05', 
             'tgl_akhir'=>'2022-01-18', 
             'kategori'=>'Arahan Menteri',
             'status'=>'Active',
             'progres'=>'40%',
             'kendala'=>'',
             'tindak_lanjut'=>'',
             'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '2',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Pembangunan Bendungan di Nganjuk', 
            'substansi'=>'Pembangungan Bendungan', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '3',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Distribusi Buku Pelajaran ke Daerah Terpencil', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '4',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Pembangunan Wilayah Pemukiman Untuk Daerah Terkena Bencana Alam', 
            'substansi'=>'Pembangunan Pemukiman', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'Alat Trasnportasi yang Tidak Memadai',
            'tindak_lanjut'=>'Menyediakan transportasi yang memadai untuk tim',
            'keterangan'=>'Alat transportasi akan disesuaikan dengan jumlah bawaan oleh tim']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '5',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Penyebaran Vaksin di Daerah Jawa Barat', 
            'substansi'=>'Penyebaran Vaksin', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'Kurangnya jumlah orang untuk melakukan penyebaran vaksin',
            'tindak_lanjut'=>'Akan dialihkan ke unit kerja lainnya',
            'keterangan'=>'Unit kerja yang ada sekarang jumlah nya kurang memadai sehingga akan dialihkan ke unit kerja lainnya']);
    //End Of Deputi 1 Asdep 1 Proker

    //Data Proker Deputi 1 Asdep 2
        \DB::table('program_kerja')->insert(
            ['id_proker' => '6',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 2', 
            'nama_proker'=>'Permasalahan Banjir di Kalimantan', 
            'substansi'=>'Banjir', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-05-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'40%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '7',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 2', 
            'nama_proker'=>'Pembangunan Jalan di Medan', 
            'substansi'=>'Pembangunan Jalan', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '8',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 2', 
            'nama_proker'=>'Distribusi Alat Tulis ke Daerah Terpencil', 
            'substansi'=>'Distribusi Alat Tulis', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '9',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 2', 
            'nama_proker'=>'Pembangunan Daerah Rawan Banjir', 
            'substansi'=>'Pembangunan Daerah Rawan Banjir', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '10',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 2', 
            'nama_proker'=>'Penyebaran APD di Jakarta', 
            'substansi'=>'Penyebaran APD', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //End of Proker Deputi 1 Asdep 2

        //data proker for Deputi 1 Asdep 3
        \DB::table('program_kerja')->insert(
            ['id_proker' => '11',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 3', 
             'nama_proker'=>'Pemberdayaan Korban Narkoba di Jakarta', 
             'substansi'=>'Narkoba', 
             'pic_proker'=>'Naomi', 
             'kolaborator'=>'', 
             'tgl_mulai'=> '2021-05-05', 
             'tgl_akhir'=>'2022-01-18', 
             'kategori'=>'Arahan Menteri',
             'status'=>'Active',
             'progres'=>'40%',
             'kendala'=>'',
             'tindak_lanjut'=>'',
             'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '12',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Pembangunan Pusat Rehabilitasi di Jawa', 
            'substansi'=>'Pembangungan Pusat Rehabilitasi', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '13',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Distribusi Sembako Korban Banjir di Jakarta', 
            'substansi'=>'Distribusi Sembako', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '14',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Pembangunan Wisata Alam di Puncak', 
            'substansi'=>'Pembangunan Wisata Alam', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '15',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Bantuan Vaksin di Daerah Jawa Barat', 
            'substansi'=>'Bantuan Vaksin', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //end of data proker for deputi 1 asdep 3        
        
        //Data Proker for Deputi 1 Asdep 4
        \DB::table('program_kerja')->insert(
            ['id_proker' => '16',
            'eselon1' => 'Deputi 1', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Pemberdayaan SDM di Jakarta', 
            'substansi'=>'Pemberdayaan SDM', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-05-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'40%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '17',
            'eselon1' => 'Deputi 1', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Pembangunan Rel Kereta Api di Nganjuk', 
            'substansi'=>'Pembangungan Rel Kereta Api', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '18',
            'eselon1' => 'Deputi 1', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Distribusi Obat ke Daerah Terpencil', 
            'substansi'=>'Distribusi Obat', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '19',
            'eselon1' => 'Deputi 1', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Evakuasi Korban Bencana Alam', 
            'substansi'=>'Evakuasi Korban', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //end of data proker for deputi 1 asdep 4

        //Data proker for deputi 1 Asdep 5
        \DB::table('program_kerja')->insert(
            ['id_proker' => '20',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 5', 
             'nama_proker'=>'Pembangunan Sekolah di Papua', 
             'substansi'=>'Sekolah', 
             'pic_proker'=>'Naomi', 
             'kolaborator'=>'', 
             'tgl_mulai'=> '2025-05-05', 
             'tgl_akhir'=>'2022-01-18', 
             'kategori'=>'Arahan Menteri',
             'status'=>'Active',
             'progres'=>'40%',
             'kendala'=>'',
             'tindak_lanjut'=>'',
             'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '21',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Permasalahan Kejahatan di Nganjuk', 
            'substansi'=>'Permasalahan Kejahatan', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '22',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Penanggulangan sampah plastik di Jakarta', 
            'substansi'=>'Sampah plastik', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '23',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Penanggulangan Sungai Tercemar', 
            'substansi'=>'Sungai Tercemar', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '24',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Tingginya Pemanasan Global di Indonesia', 
            'substansi'=>'Pemanasan Global', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //end of data proker for deputi 1 asdep 5

        //Data proker for deputi 1 Sekdep
        \DB::table('program_kerja')->insert(
            ['id_proker' => '25',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Pencemaran Udara di Jakarta', 
            'substansi'=>'Pencemaran Udara', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-05-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'40%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '26',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Sosialisasi Pentingnya Imunisasi', 
            'substansi'=>'Imunisasi', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '27',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Penanggulangan Sulitnya Air Bersih di Papua', 
            'substansi'=>'Air bersih', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '28',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Illegal Logging di Kalimantan', 
            'substansi'=>'Illegal Logging', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '29',
            'eselon1' => 'Deputi 1', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Pencemaran Tanah di Jakarta', 
            'substansi'=>'Pencemaran Tanah', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        //Program Kerja data for Deputi 2
        \DB::table('program_kerja')->insert(
            ['id_proker' => '30',
            'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 1', 
             'nama_proker'=>'Permasalahan Rusaknya Ekosistem Laut di Kawasan Toba', 
             'substansi'=>'Ekosistem Laut', 
             'pic_proker'=>'Naomi', 
             'kolaborator'=>'', 
             'tgl_mulai'=> '2021-05-05', 
             'tgl_akhir'=>'2022-01-18', 
             'kategori'=>'Arahan Menteri',
             'status'=>'Active',
             'progres'=>'40%',
             'kendala'=>'',
             'tindak_lanjut'=>'',
             'keterangan'=>'']);
        
             \DB::table('program_kerja')->insert(
                ['id_proker' => '31',
                'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 1', 
                'nama_proker'=>'Permasalahan Kejahatan di Nganjuk', 
                'substansi'=>'Permasalahan Kejahatan', 
                'pic_proker'=>'Roy', 
                'kolaborator'=>'Deputi 2', 
                'tgl_mulai'=> '2021-08-17', 
                'tgl_akhir'=>'2022-10-18', 
                'kategori'=>'Arahan Menteri',
                'status'=>'Pending',
                'progres'=>'20%',
                'kendala'=>'',
                'tindak_lanjut'=>'',
                'keterangan'=>'']);
    
            \DB::table('program_kerja')->insert(
                ['id_proker' => '32',
                'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 1', 
                'nama_proker'=>'Penanggulangan sampah plastik di Jakarta', 
                'substansi'=>'Sampah plastik', 
                'pic_proker'=>'Yohanes', 
                'kolaborator'=>'', 
                'tgl_mulai'=> '2021-04-05', 
                'tgl_akhir'=>'2021-06-18', 
                'kategori'=>'Arahan Menteri',
                'status'=>'Done',
                'progres'=>'100%',
                'kendala'=>'',
                'tindak_lanjut'=>'',
                'keterangan'=>'']);
        
            \DB::table('program_kerja')->insert(
                ['id_proker' => '33',
                'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 1', 
                'nama_proker'=>'Penanggulangan Sungai Tercemar', 
                'substansi'=>'Sungai Tercemar', 
                'pic_proker'=>'Cindy', 
                'kolaborator'=>'', 
                'tgl_mulai'=> '2021-09-05', 
                'tgl_akhir'=>'2022-01-18', 
                'kategori'=>'Arahan Menteri',
                'status'=>'Suspended',
                'progres'=>'50%',
                'kendala'=>'',
                'tindak_lanjut'=>'',
                'keterangan'=>'']);
    
            \DB::table('program_kerja')->insert(
                ['id_proker' => '34',
                'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 1', 
                'nama_proker'=>'Tingginya Pemanasan Global di Indonesia', 
                'substansi'=>'Pemanasan Global', 
                'pic_proker'=>'Erika', 
                'kolaborator'=>'', 
                'tgl_mulai'=> '2021-04-05', 
                'tgl_akhir'=>'2021-06-18', 
                'kategori'=>'Arahan Menteri',
                'status'=>'Overdue',
                'progres'=>'80%',
                'kendala'=>'',
                'tindak_lanjut'=>'',
                'keterangan'=>'']);
    //End Of Deputi 2 Asdep 1 Proker

    //Data Proker Deputi 2 Asdep 2
    \DB::table('program_kerja')->insert(
        ['id_proker' => '35',
        'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Permasalahan Banjir di Kalimantan', 
        'substansi'=>'Banjir', 
        'pic_proker'=>'Naomi', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-05-05', 
        'tgl_akhir'=>'2022-01-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Active',
        'progres'=>'40%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);
    
    \DB::table('program_kerja')->insert(
        ['id_proker' => '36',
        'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Pembangunan Jalan di Medan', 
        'substansi'=>'Pembangunan Jalan', 
        'pic_proker'=>'Roy', 
        'kolaborator'=>'Deputi 2', 
        'tgl_mulai'=> '2021-08-17', 
        'tgl_akhir'=>'2022-10-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Pending',
        'progres'=>'20%',
        'kendala'=>'Libur Lebaran',
        'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
        'keterangan'=>'Para pekerja sedang diliburkan']);

    \DB::table('program_kerja')->insert(
        ['id_proker' => '37',
        'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Distribusi Alat Tulis ke Daerah Terpencil', 
        'substansi'=>'Distribusi Alat Tulis', 
        'pic_proker'=>'Yohanes', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-04-05', 
        'tgl_akhir'=>'2021-06-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Done',
        'progres'=>'100%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);

    \DB::table('program_kerja')->insert(
        ['id_proker' => '38',
        'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Pembangunan Daerah Rawan Banjir', 
        'substansi'=>'Pembangunan Daerah Rawan Banjir', 
        'pic_proker'=>'Cindy', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-09-05', 
        'tgl_akhir'=>'2022-01-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Suspended',
        'progres'=>'50%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);

    \DB::table('program_kerja')->insert(
        ['id_proker' => '39',
        'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Penyebaran APD di Jakarta', 
        'substansi'=>'Penyebaran APD', 
        'pic_proker'=>'Erika', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-04-05', 
        'tgl_akhir'=>'2021-06-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Overdue',
        'progres'=>'80%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);
        //End of Proker Deputi 2 Asdep 2

        //data proker for Deputi 2 Asdep 3
        \DB::table('program_kerja')->insert(
            ['id_proker' => '40',
            'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 3', 
             'nama_proker'=>'Pemberdayaan Korban Narkoba di Jakarta', 
             'substansi'=>'Narkoba', 
             'pic_proker'=>'Naomi', 
             'kolaborator'=>'', 
             'tgl_mulai'=> '2021-05-05', 
             'tgl_akhir'=>'2022-01-18', 
             'kategori'=>'Arahan Menteri',
             'status'=>'Active',
             'progres'=>'40%',
             'kendala'=>'',
             'tindak_lanjut'=>'',
             'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '41',
            'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Pembangunan Pusat Rehabilitasi di Jawa', 
            'substansi'=>'Pembangungan Pusat Rehabilitasi', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '42',
            'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Distribusi Sembako Korban Banjir di Jakarta', 
            'substansi'=>'Distribusi Sembako', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '43',
            'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Pembangunan Wisata Alam di Puncak', 
            'substansi'=>'Pembangunan Wisata Alam', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '44',
            'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Bantuan Vaksin di Daerah Jawa Barat', 
            'substansi'=>'Bantuan Vaksin', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //end of data proker for Deputi 2 asdep 3        
        
        //Data Proker for Deputi 2 Asdep 4
        \DB::table('program_kerja')->insert(
            ['id_proker' => '45',
            'eselon1' => 'Deputi 2', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Pemberdayaan SDM di Jakarta', 
            'substansi'=>'Pemberdayaan SDM', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-05-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'40%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '46',
            'eselon1' => 'Deputi 2', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Pembangunan Rel Kereta Api di Nganjuk', 
            'substansi'=>'Pembangungan Rel Kereta Api', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '47',
            'eselon1' => 'Deputi 2', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Distribusi Obat ke Daerah Terpencil', 
            'substansi'=>'Distribusi Obat', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '48',
            'eselon1' => 'Deputi 2', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Evakuasi Korban Bencana Alam', 
            'substansi'=>'Evakuasi Korban', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //end of data proker for Deputi 2 asdep 4

        //Data proker for Deputi 2 Asdep 5
        \DB::table('program_kerja')->insert(
            ['id_proker' => '49',
            'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 5', 
             'nama_proker'=>'Permasalahan Kesehatan di Jakarta', 
             'substansi'=>'Kesehatan', 
             'pic_proker'=>'Naomi', 
             'kolaborator'=>'', 
             'tgl_mulai'=> '2025-05-05', 
             'tgl_akhir'=>'2022-01-18', 
             'kategori'=>'Arahan Menteri',
             'status'=>'Active',
             'progres'=>'40%',
             'kendala'=>'',
             'tindak_lanjut'=>'',
             'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '50',
            'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Pembangunan Bendungan di Nganjuk', 
            'substansi'=>'Pembangungan Bendungan', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '51',
            'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Distribusi Buku Pelajaran ke Daerah Terpencil', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '52',
            'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Pembangunan Wilayah Pemukiman Untuk Daerah Terkena Bencana Alam', 
            'substansi'=>'Pembangunan Pemukiman', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'Alat Trasnportasi yang Tidak Memadai',
            'tindak_lanjut'=>'Menyediakan transportasi yang memadai untuk tim',
            'keterangan'=>'Alat transportasi akan disesuaikan dengan jumlah bawaan oleh tim']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '53',
            'eselon1' => 'Deputi 2', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Penyebaran Vaksin di Daerah Jawa Barat', 
            'substansi'=>'Penyebaran Vaksin', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'Kurangnya jumlah orang untuk melakukan penyebaran vaksin',
            'tindak_lanjut'=>'Akan dialihkan ke unit kerja lainnya',
            'keterangan'=>'Unit kerja yang ada sekarang jumlah nya kurang memadai sehingga akan dialihkan ke unit kerja lainnya']);
        //end of data proker for Deputi 2 asdep 5

        //Data proker for Deputi 2 Sekdep
        \DB::table('program_kerja')->insert(
            ['id_proker' => '54',
            'eselon1' => 'Deputi 2', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Pencemaran Udara di Jakarta', 
            'substansi'=>'Pencemaran Udara', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-05-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'40%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '55',
            'eselon1' => 'Deputi 2', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Sosialisasi Pentingnya Imunisasi', 
            'substansi'=>'Imunisasi', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '56',
            'eselon1' => 'Deputi 2', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Penanggulangan Sulitnya Air Bersih di Papua', 
            'substansi'=>'Air bersih', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '57',
            'eselon1' => 'Deputi 2', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Illegal Logging di Kalimantan', 
            'substansi'=>'Illegal Logging', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '58',
            'eselon1' => 'Deputi 2', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Pencemaran Tanah di Jakarta', 
            'substansi'=>'Pencemaran Tanah', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        // End Of data proker for Deputi 2

        //Program Kerja data for Deputi 3
        \DB::table('program_kerja')->insert(
            ['id_proker' => '59',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Permasalahan Kesehatan di Jakarta', 
            'substansi'=>'Kesehatan', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-05-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'40%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '60',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Pembangunan Bendungan di Nganjuk', 
            'substansi'=>'Pembangun gan Bendungan', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 3', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '61',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Distribusi Buku Pelajaran ke Daerah Terpencil', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '62',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Pembangunan Wilayah Pemukiman Untuk Daerah Terkena Bencana Alam', 
            'substansi'=>'Pembangunan Pemukiman', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'Alat Trasnportasi yang Tidak Memadai',
            'tindak_lanjut'=>'Menyediakan transportasi yang memadai untuk tim',
            'keterangan'=>'Alat transportasi akan disesuaikan dengan jumlah bawaan oleh tim']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '63',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Penyebaran Vaksin di Daerah Jawa Barat', 
            'substansi'=>'Penyebaran Vaksin', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'Kurangnya jumlah orang untuk melakukan penyebaran vaksin',
            'tindak_lanjut'=>'Akan dialihkan ke unit kerja lainnya',
            'keterangan'=>'Unit kerja yang ada sekarang jumlah nya kurang memadai sehingga akan dialihkan ke unit kerja lainnya']);
        //End Of Deputi 3 Asdep 1 Proker

        //Data Proker Deputi 3 Asdep 2
    \DB::table('program_kerja')->insert(
        ['id_proker' => '64',
        'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Permasalahan Banjir di Kalimantan', 
        'substansi'=>'Banjir', 
        'pic_proker'=>'Naomi', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-05-05', 
        'tgl_akhir'=>'2022-01-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Active',
        'progres'=>'40%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);
    
    \DB::table('program_kerja')->insert(
        ['id_proker' => '65',
        'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Pembangunan Jalan di Medan', 
        'substansi'=>'Pembangunan Jalan', 
        'pic_proker'=>'Roy', 
        'kolaborator'=>'Deputi 2', 
        'tgl_mulai'=> '2021-08-17', 
        'tgl_akhir'=>'2022-10-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Pending',
        'progres'=>'20%',
        'kendala'=>'Libur Lebaran',
        'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
        'keterangan'=>'Para pekerja sedang diliburkan']);

    \DB::table('program_kerja')->insert(
        ['id_proker' => '66',
        'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Distribusi Alat Tulis ke Daerah Terpencil', 
        'substansi'=>'Distribusi Alat Tulis', 
        'pic_proker'=>'Yohanes', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-04-05', 
        'tgl_akhir'=>'2021-06-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Done',
        'progres'=>'100%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);

    \DB::table('program_kerja')->insert(
        ['id_proker' => '67',
        'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Pembangunan Daerah Rawan Banjir', 
        'substansi'=>'Pembangunan Daerah Rawan Banjir', 
        'pic_proker'=>'Cindy', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-09-05', 
        'tgl_akhir'=>'2022-01-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Suspended',
        'progres'=>'50%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);

    \DB::table('program_kerja')->insert(
        ['id_proker' => '68',
        'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Penyebaran APD di Jakarta', 
        'substansi'=>'Penyebaran APD', 
        'pic_proker'=>'Erika', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-04-05', 
        'tgl_akhir'=>'2021-06-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Overdue',
        'progres'=>'80%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);
        //End of Proker Deputi 3 Asdep 2

        //data proker for Deputi 3 Asdep 3
        \DB::table('program_kerja')->insert(
            ['id_proker' => '69',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 3', 
             'nama_proker'=>'Pemberdayaan Korban Narkoba di Jakarta', 
             'substansi'=>'Narkoba', 
             'pic_proker'=>'Naomi', 
             'kolaborator'=>'', 
             'tgl_mulai'=> '2021-05-05', 
             'tgl_akhir'=>'2022-01-18', 
             'kategori'=>'Arahan Menteri',
             'status'=>'Active',
             'progres'=>'40%',
             'kendala'=>'',
             'tindak_lanjut'=>'',
             'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '70',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Pembangunan Pusat Rehabilitasi di Jawa', 
            'substansi'=>'Pembangungan Pusat Rehabilitasi', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '71',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Distribusi Sembako Korban Banjir di Jakarta', 
            'substansi'=>'Distribusi Sembako', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '72',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Pembangunan Wisata Alam di Puncak', 
            'substansi'=>'Pembangunan Wisata Alam', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '73',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Bantuan Vaksin di Daerah Jawa Barat', 
            'substansi'=>'Bantuan Vaksin', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //end of data proker for Deputi 3 asdep 3        
        
        //Data Proker for Deputi 3 Asdep 4
        \DB::table('program_kerja')->insert(
            ['id_proker' => '74',
            'eselon1' => 'Deputi 3', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Pemberdayaan SDM di Jakarta', 
            'substansi'=>'Pemberdayaan SDM', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-05-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'40%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '75',
            'eselon1' => 'Deputi 3', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Pembangunan Rel Kereta Api di Nganjuk', 
            'substansi'=>'Pembangungan Rel Kereta Api', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '76',
            'eselon1' => 'Deputi 3', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Distribusi Obat ke Daerah Terpencil', 
            'substansi'=>'Distribusi Obat', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '77',
            'eselon1' => 'Deputi 3', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Evakuasi Korban Bencana Alam', 
            'substansi'=>'Evakuasi Korban', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //end of data proker for Deputi 3 asdep 4

        //Data proker for Deputi 3 Asdep 5
        \DB::table('program_kerja')->insert(
            ['id_proker' => '78',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 5', 
             'nama_proker'=>'Permasalahan Kesehatan di Jakarta', 
             'substansi'=>'Kesehatan', 
             'pic_proker'=>'Naomi', 
             'kolaborator'=>'', 
             'tgl_mulai'=> '2025-05-05', 
             'tgl_akhir'=>'2022-01-18', 
             'kategori'=>'Arahan Menteri',
             'status'=>'Active',
             'progres'=>'40%',
             'kendala'=>'',
             'tindak_lanjut'=>'',
             'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '79',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Pembangunan Bendungan di Nganjuk', 
            'substansi'=>'Pembangungan Bendungan', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '80',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Distribusi Buku Pelajaran ke Daerah Terpencil', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '81',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Pembangunan Wilayah Pemukiman Untuk Daerah Terkena Bencana Alam', 
            'substansi'=>'Pembangunan Pemukiman', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'Alat Trasnportasi yang Tidak Memadai',
            'tindak_lanjut'=>'Menyediakan transportasi yang memadai untuk tim',
            'keterangan'=>'Alat transportasi akan disesuaikan dengan jumlah bawaan oleh tim']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '82',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Penyebaran Vaksin di Daerah Jawa Barat', 
            'substansi'=>'Penyebaran Vaksin', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'Kurangnya jumlah orang untuk melakukan penyebaran vaksin',
            'tindak_lanjut'=>'Akan dialihkan ke unit kerja lainnya',
            'keterangan'=>'Unit kerja yang ada sekarang jumlah nya kurang memadai sehingga akan dialihkan ke unit kerja lainnya']);
        //end of data proker for Deputi 3 asdep 5

        //Data proker for Deputi 3 Sekdep
        \DB::table('program_kerja')->insert(
            ['id_proker' => '83',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Pencemaran Udara di Jakarta', 
            'substansi'=>'Pencemaran Udara', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-05-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'40%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '84',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Sosialisasi Pentingnya Imunisasi', 
            'substansi'=>'Imunisasi', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '85',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Penanggulangan Sulitnya Air Bersih di Papua', 
            'substansi'=>'Air bersih', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '86',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Illegal Logging di Kalimantan', 
            'substansi'=>'Illegal Logging', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '87',
            'eselon1' => 'Deputi 3', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Pencemaran Tanah di Jakarta', 
            'substansi'=>'Pencemaran Tanah', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        // End Of data proker for Deputi 3

        // data proker for Deputi 4
        \DB::table('program_kerja')->insert(
            ['id_proker' => '88',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Permasalahan Kesehatan di Jakarta', 
            'substansi'=>'Kesehatan', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-05-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'40%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '89',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Pembangunan Bendungan di Nganjuk', 
            'substansi'=>'Pembangungan Bendungan', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 4', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '90',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Distribusi Buku Pelajaran ke Daerah Terpencil', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '91',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Pembangunan Wilayah Pemukiman Untuk Daerah Terkena Bencana Alam', 
            'substansi'=>'Pembangunan Pemukiman', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'Alat Trasnportasi yang Tidak Memadai',
            'tindak_lanjut'=>'Menyediakan transportasi yang memadai untuk tim',
            'keterangan'=>'Alat transportasi akan disesuaikan dengan jumlah bawaan oleh tim']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '92',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Penyebaran Vaksin di Daerah Jawa Barat', 
            'substansi'=>'Penyebaran Vaksin', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'Kurangnya jumlah orang untuk melakukan penyebaran vaksin',
            'tindak_lanjut'=>'Akan dialihkan ke unit kerja lainnya',
            'keterangan'=>'Unit kerja yang ada sekarang jumlah nya kurang memadai sehingga akan dialihkan ke unit kerja lainnya']);
        //End Of Deputi 4 Asdep 1 Proker

        //Data Proker Deputi 4 Asdep 2
    \DB::table('program_kerja')->insert(
        ['id_proker' => '93',
        'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Permasalahan Banjir di Kalimantan', 
        'substansi'=>'Banjir', 
        'pic_proker'=>'Naomi', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-05-05', 
        'tgl_akhir'=>'2022-01-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Active',
        'progres'=>'40%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);
    
    \DB::table('program_kerja')->insert(
        ['id_proker' => '94',
        'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Pembangunan Jalan di Medan', 
        'substansi'=>'Pembangunan Jalan', 
        'pic_proker'=>'Roy', 
        'kolaborator'=>'Deputi 2', 
        'tgl_mulai'=> '2021-08-17', 
        'tgl_akhir'=>'2022-10-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Pending',
        'progres'=>'20%',
        'kendala'=>'Libur Lebaran',
        'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
        'keterangan'=>'Para pekerja sedang diliburkan']);

    \DB::table('program_kerja')->insert(
        ['id_proker' => '95',
        'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Distribusi Alat Tulis ke Daerah Terpencil', 
        'substansi'=>'Distribusi Alat Tulis', 
        'pic_proker'=>'Yohanes', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-04-05', 
        'tgl_akhir'=>'2021-06-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Done',
        'progres'=>'100%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);

    \DB::table('program_kerja')->insert(
        ['id_proker' => '96',
        'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Pembangunan Daerah Rawan Banjir', 
        'substansi'=>'Pembangunan Daerah Rawan Banjir', 
        'pic_proker'=>'Cindy', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-09-05', 
        'tgl_akhir'=>'2022-01-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Suspended',
        'progres'=>'50%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);

    \DB::table('program_kerja')->insert(
        ['id_proker' => '97',
        'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Penyebaran APD di Jakarta', 
        'substansi'=>'Penyebaran APD', 
        'pic_proker'=>'Erika', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-04-05', 
        'tgl_akhir'=>'2021-06-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Overdue',
        'progres'=>'80%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);
        //End of Proker Deputi 4 Asdep 2

        //data proker for Deputi 4 Asdep 3
        \DB::table('program_kerja')->insert(
            ['id_proker' => '98',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 3', 
             'nama_proker'=>'Pemberdayaan Korban Narkoba di Jakarta', 
             'substansi'=>'Narkoba', 
             'pic_proker'=>'Naomi', 
             'kolaborator'=>'', 
             'tgl_mulai'=> '2021-05-05', 
             'tgl_akhir'=>'2022-01-18', 
             'kategori'=>'Arahan Menteri',
             'status'=>'Active',
             'progres'=>'40%',
             'kendala'=>'',
             'tindak_lanjut'=>'',
             'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '99',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Pembangunan Pusat Rehabilitasi di Jawa', 
            'substansi'=>'Pembangungan Pusat Rehabilitasi', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '100',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Distribusi Sembako Korban Banjir di Jakarta', 
            'substansi'=>'Distribusi Sembako', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '101',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Pembangunan Wisata Alam di Puncak', 
            'substansi'=>'Pembangunan Wisata Alam', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '102',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Bantuan Vaksin di Daerah Jawa Barat', 
            'substansi'=>'Bantuan Vaksin', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //end of data proker for Deputi 4 asdep 3        
        
        //Data Proker for Deputi 4 Asdep 4
        \DB::table('program_kerja')->insert(
            ['id_proker' => '103',
            'eselon1' => 'Deputi 4', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Pemberdayaan SDM di Jakarta', 
            'substansi'=>'Pemberdayaan SDM', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-05-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'40%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '104',
            'eselon1' => 'Deputi 4', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Pembangunan Rel Kereta Api di Nganjuk', 
            'substansi'=>'Pembangungan Rel Kereta Api', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '105',
            'eselon1' => 'Deputi 4', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Distribusi Obat ke Daerah Terpencil', 
            'substansi'=>'Distribusi Obat', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '106',
            'eselon1' => 'Deputi 4', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Evakuasi Korban Bencana Alam', 
            'substansi'=>'Evakuasi Korban', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //end of data proker for Deputi 4 asdep 4

        //Data proker for Deputi 4 Asdep 5
        \DB::table('program_kerja')->insert(
            ['id_proker' => '107',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 5', 
             'nama_proker'=>'Permasalahan Kesehatan di Jakarta', 
             'substansi'=>'Kesehatan', 
             'pic_proker'=>'Naomi', 
             'kolaborator'=>'', 
             'tgl_mulai'=> '2025-05-05', 
             'tgl_akhir'=>'2022-01-18', 
             'kategori'=>'Arahan Menteri',
             'status'=>'Active',
             'progres'=>'40%',
             'kendala'=>'',
             'tindak_lanjut'=>'',
             'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '108',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Pembangunan Bendungan di Nganjuk', 
            'substansi'=>'Pembangungan Bendungan', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '109',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Distribusi Buku Pelajaran ke Daerah Terpencil', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '110',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Pembangunan Wilayah Pemukiman Untuk Daerah Terkena Bencana Alam', 
            'substansi'=>'Pembangunan Pemukiman', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'Alat Trasnportasi yang Tidak Memadai',
            'tindak_lanjut'=>'Menyediakan transportasi yang memadai untuk tim',
            'keterangan'=>'Alat transportasi akan disesuaikan dengan jumlah bawaan oleh tim']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '111',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Penyebaran Vaksin di Daerah Jawa Barat', 
            'substansi'=>'Penyebaran Vaksin', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'Kurangnya jumlah orang untuk melakukan penyebaran vaksin',
            'tindak_lanjut'=>'Akan dialihkan ke unit kerja lainnya',
            'keterangan'=>'Unit kerja yang ada sekarang jumlah nya kurang memadai sehingga akan dialihkan ke unit kerja lainnya']);
        //end of data proker for Deputi 4 asdep 5

        //Data proker for Deputi 4 Sekdep
        \DB::table('program_kerja')->insert(
            ['id_proker' => '112',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Pencemaran Udara di Jakarta', 
            'substansi'=>'Pencemaran Udara', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-05-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'40%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '113',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Sosialisasi Pentingnya Imunisasi', 
            'substansi'=>'Imunisasi', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '114',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Penanggulangan Sulitnya Air Bersih di Papua', 
            'substansi'=>'Air bersih', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '115',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Illegal Logging di Kalimantan', 
            'substansi'=>'Illegal Logging', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '116',
            'eselon1' => 'Deputi 4', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Pencemaran Tanah di Jakarta', 
            'substansi'=>'Pencemaran Tanah', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        // End Of data proker for Deputi 4
        
        //Data proker for Deputi 5
        \DB::table('program_kerja')->insert(
            ['id_proker' => '117',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Distribusi Buku Pelajaran ke Daerah Terpencil', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '118',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Pembangunan Bendungan di Nganjuk', 
            'substansi'=>'Pembangungan Bendungan', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 5', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '119',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Distribusi Buku Pelajaran ke Daerah Terpencil', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '120',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Pembangunan Wilayah Pemukiman Untuk Daerah Terkena Bencana Alam', 
            'substansi'=>'Pembangunan Pemukiman', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'Alat Trasnportasi yang Tidak Memadai',
            'tindak_lanjut'=>'Menyediakan transportasi yang memadai untuk tim',
            'keterangan'=>'Alat transportasi akan disesuaikan dengan jumlah bawaan oleh tim']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '121',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Penyebaran Vaksin di Daerah Jawa Barat', 
            'substansi'=>'Penyebaran Vaksin', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'Kurangnya jumlah orang untuk melakukan penyebaran vaksin',
            'tindak_lanjut'=>'Akan dialihkan ke unit kerja lainnya',
            'keterangan'=>'Unit kerja yang ada sekarang jumlah nya kurang memadai sehingga akan dialihkan ke unit kerja lainnya']);
        //End Of Deputi 5 Asdep 1 Proker

        //Data Proker Deputi 5 Asdep 2
    \DB::table('program_kerja')->insert(
        ['id_proker' => '122',
        'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Permasalahan Banjir di Kalimantan', 
        'substansi'=>'Banjir', 
        'pic_proker'=>'Naomi', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-05-05', 
        'tgl_akhir'=>'2022-01-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Active',
        'progres'=>'40%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);
    
    \DB::table('program_kerja')->insert(
        ['id_proker' => '123',
        'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Pembangunan Jalan di Medan', 
        'substansi'=>'Pembangunan Jalan', 
        'pic_proker'=>'Roy', 
        'kolaborator'=>'Deputi 2', 
        'tgl_mulai'=> '2021-08-17', 
        'tgl_akhir'=>'2022-10-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Pending',
        'progres'=>'20%',
        'kendala'=>'Libur Lebaran',
        'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
        'keterangan'=>'Para pekerja sedang diliburkan']);

    \DB::table('program_kerja')->insert(
        ['id_proker' => '124',
        'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Distribusi Alat Tulis ke Daerah Terpencil', 
        'substansi'=>'Distribusi Alat Tulis', 
        'pic_proker'=>'Yohanes', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-04-05', 
        'tgl_akhir'=>'2021-06-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Done',
        'progres'=>'100%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);

    \DB::table('program_kerja')->insert(
        ['id_proker' => '125',
        'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Pembangunan Daerah Rawan Banjir', 
        'substansi'=>'Pembangunan Daerah Rawan Banjir', 
        'pic_proker'=>'Cindy', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-09-05', 
        'tgl_akhir'=>'2022-01-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Suspended',
        'progres'=>'50%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);

    \DB::table('program_kerja')->insert(
        ['id_proker' => '126',
        'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Penyebaran APD di Jakarta', 
        'substansi'=>'Penyebaran APD', 
        'pic_proker'=>'Erika', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-04-05', 
        'tgl_akhir'=>'2021-06-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Overdue',
        'progres'=>'80%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);
        //End of Proker Deputi 5 Asdep 2

        //data proker for Deputi 5 Asdep 3
        \DB::table('program_kerja')->insert(
            ['id_proker' => '127',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 3', 
             'nama_proker'=>'Pemberdayaan Korban Narkoba di Jakarta', 
             'substansi'=>'Narkoba', 
             'pic_proker'=>'Naomi', 
             'kolaborator'=>'', 
             'tgl_mulai'=> '2021-05-05', 
             'tgl_akhir'=>'2022-01-18', 
             'kategori'=>'Arahan Menteri',
             'status'=>'Active',
             'progres'=>'40%',
             'kendala'=>'',
             'tindak_lanjut'=>'',
             'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '128',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Pembangunan Pusat Rehabilitasi di Jawa', 
            'substansi'=>'Pembangungan Pusat Rehabilitasi', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '129',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Distribusi Sembako Korban Banjir di Jakarta', 
            'substansi'=>'Distribusi Sembako', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '130',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Pembangunan Wisata Alam di Puncak', 
            'substansi'=>'Pembangunan Wisata Alam', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '131',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Bantuan Vaksin di Daerah Jawa Barat', 
            'substansi'=>'Bantuan Vaksin', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //end of data proker for Deputi 5 asdep 3        
        
        //Data Proker for Deputi 5 Asdep 4
        \DB::table('program_kerja')->insert(
            ['id_proker' => '132',
            'eselon1' => 'Deputi 5', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Pemberdayaan SDM di Jakarta', 
            'substansi'=>'Pemberdayaan SDM', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-05-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'40%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '133',
            'eselon1' => 'Deputi 5', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Pembangunan Rel Kereta Api di Nganjuk', 
            'substansi'=>'Pembangungan Rel Kereta Api', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '134',
            'eselon1' => 'Deputi 5', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Distribusi Obat ke Daerah Terpencil', 
            'substansi'=>'Distribusi Obat', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '135',
            'eselon1' => 'Deputi 5', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Evakuasi Korban Bencana Alam', 
            'substansi'=>'Evakuasi Korban', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //end of data proker for Deputi 5 asdep 4

        //Data proker for Deputi 5 Asdep 5
        \DB::table('program_kerja')->insert(
            ['id_proker' => '136',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 5', 
             'nama_proker'=>'Permasalahan Kesehatan di Jakarta', 
             'substansi'=>'Kesehatan', 
             'pic_proker'=>'Naomi', 
             'kolaborator'=>'', 
             'tgl_mulai'=> '2025-05-05', 
             'tgl_akhir'=>'2022-01-18', 
             'kategori'=>'Arahan Menteri',
             'status'=>'Active',
             'progres'=>'40%',
             'kendala'=>'',
             'tindak_lanjut'=>'',
             'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '137',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Pembangunan Bendungan di Nganjuk', 
            'substansi'=>'Pembangungan Bendungan', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '138',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Distribusi Buku Pelajaran ke Daerah Terpencil', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '139',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Pembangunan Wilayah Pemukiman Untuk Daerah Terkena Bencana Alam', 
            'substansi'=>'Pembangunan Pemukiman', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'Alat Trasnportasi yang Tidak Memadai',
            'tindak_lanjut'=>'Menyediakan transportasi yang memadai untuk tim',
            'keterangan'=>'Alat transportasi akan disesuaikan dengan jumlah bawaan oleh tim']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '140',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Penyebaran Vaksin di Daerah Jawa Barat', 
            'substansi'=>'Penyebaran Vaksin', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'Kurangnya jumlah orang untuk melakukan penyebaran vaksin',
            'tindak_lanjut'=>'Akan dialihkan ke unit kerja lainnya',
            'keterangan'=>'Unit kerja yang ada sekarang jumlah nya kurang memadai sehingga akan dialihkan ke unit kerja lainnya']);
        //end of data proker for Deputi 5 asdep 5

        //Data proker for Deputi 5 Sekdep
        \DB::table('program_kerja')->insert(
            ['id_proker' => '141',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Pencemaran Udara di Jakarta', 
            'substansi'=>'Pencemaran Udara', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-05-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'40%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '142',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Sosialisasi Pentingnya Imunisasi', 
            'substansi'=>'Imunisasi', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '143',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Penanggulangan Sulitnya Air Bersih di Papua', 
            'substansi'=>'Air bersih', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '144',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Illegal Logging di Kalimantan', 
            'substansi'=>'Illegal Logging', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '145',
            'eselon1' => 'Deputi 5', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Pencemaran Tanah di Jakarta', 
            'substansi'=>'Pencemaran Tanah', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        // End Of data proker for Deputi 5

        //Data proker for Deputi 6
        \DB::table('program_kerja')->insert(
            ['id_proker' => '146',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Permasalahan Kesehatan di Jakarta', 
            'substansi'=>'Kesehatan', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-05-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'40%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '147',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Pembangunan Bendungan di Nganjuk', 
            'substansi'=>'Pembangungan Bendungan', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 6', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '148',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Distribusi Buku Pelajaran ke Daerah Terpencil', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '149',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Pembangunan Wilayah Pemukiman Untuk Daerah Terkena Bencana Alam', 
            'substansi'=>'Pembangunan Pemukiman', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'Alat Trasnportasi yang Tidak Memadai',
            'tindak_lanjut'=>'Menyediakan transportasi yang memadai untuk tim',
            'keterangan'=>'Alat transportasi akan disesuaikan dengan jumlah bawaan oleh tim']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '150',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 1', 
            'nama_proker'=>'Penyebaran Vaksin di Daerah Jawa Barat', 
            'substansi'=>'Penyebaran Vaksin', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'Kurangnya jumlah orang untuk melakukan penyebaran vaksin',
            'tindak_lanjut'=>'Akan dialihkan ke unit kerja lainnya',
            'keterangan'=>'Unit kerja yang ada sekarang jumlah nya kurang memadai sehingga akan dialihkan ke unit kerja lainnya']);
        //End Of Deputi 6 Asdep 1 Proker

        //Data Proker Deputi 6 Asdep 2
    \DB::table('program_kerja')->insert(
        ['id_proker' => '151',
        'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Permasalahan Banjir di Kalimantan', 
        'substansi'=>'Banjir', 
        'pic_proker'=>'Naomi', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-05-05', 
        'tgl_akhir'=>'2022-01-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Active',
        'progres'=>'40%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);
    
    \DB::table('program_kerja')->insert(
        ['id_proker' => '152',
        'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Pembangunan Jalan di Medan', 
        'substansi'=>'Pembangunan Jalan', 
        'pic_proker'=>'Roy', 
        'kolaborator'=>'Deputi 2', 
        'tgl_mulai'=> '2021-08-17', 
        'tgl_akhir'=>'2022-10-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Pending',
        'progres'=>'20%',
        'kendala'=>'Libur Lebaran',
        'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
        'keterangan'=>'Para pekerja sedang diliburkan']);

    \DB::table('program_kerja')->insert(
        ['id_proker' => '153',
        'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Distribusi Alat Tulis ke Daerah Terpencil', 
        'substansi'=>'Distribusi Alat Tulis', 
        'pic_proker'=>'Yohanes', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-04-05', 
        'tgl_akhir'=>'2021-06-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Done',
        'progres'=>'100%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);

    \DB::table('program_kerja')->insert(
        ['id_proker' => '154',
        'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Pembangunan Daerah Rawan Banjir', 
        'substansi'=>'Pembangunan Daerah Rawan Banjir', 
        'pic_proker'=>'Cindy', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-09-05', 
        'tgl_akhir'=>'2022-01-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Suspended',
        'progres'=>'50%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);

    \DB::table('program_kerja')->insert(
        ['id_proker' => '155',
        'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 2', 
        'nama_proker'=>'Penyebaran APD di Jakarta', 
        'substansi'=>'Penyebaran APD', 
        'pic_proker'=>'Erika', 
        'kolaborator'=>'', 
        'tgl_mulai'=> '2021-04-05', 
        'tgl_akhir'=>'2021-06-18', 
        'kategori'=>'Arahan Menteri',
        'status'=>'Overdue',
        'progres'=>'80%',
        'kendala'=>'',
        'tindak_lanjut'=>'',
        'keterangan'=>'']);
        //End of Proker Deputi 6 Asdep 2

        //data proker for Deputi 6 Asdep 3
        \DB::table('program_kerja')->insert(
            ['id_proker' => '156',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 3', 
             'nama_proker'=>'Pemberdayaan Korban Narkoba di Jakarta', 
             'substansi'=>'Narkoba', 
             'pic_proker'=>'Naomi', 
             'kolaborator'=>'', 
             'tgl_mulai'=> '2021-05-05', 
             'tgl_akhir'=>'2022-01-18', 
             'kategori'=>'Arahan Menteri',
             'status'=>'Active',
             'progres'=>'40%',
             'kendala'=>'',
             'tindak_lanjut'=>'',
             'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '157',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Pembangunan Pusat Rehabilitasi di Jawa', 
            'substansi'=>'Pembangungan Pusat Rehabilitasi', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '158',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Distribusi Sembako Korban Banjir di Jakarta', 
            'substansi'=>'Distribusi Sembako', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '159',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Pembangunan Wisata Alam di Puncak', 
            'substansi'=>'Pembangunan Wisata Alam', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '160',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 3', 
            'nama_proker'=>'Bantuan Vaksin di Daerah Jawa Barat', 
            'substansi'=>'Bantuan Vaksin', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //end of data proker for Deputi 6 asdep 3        
        
        //Data Proker for Deputi 6 Asdep 4
        \DB::table('program_kerja')->insert(
            ['id_proker' => '161',
            'eselon1' => 'Deputi 6', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Pemberdayaan SDM di Jakarta', 
            'substansi'=>'Pemberdayaan SDM', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-05-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'40%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '162',
            'eselon1' => 'Deputi 6', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Pembangunan Rel Kereta Api di Nganjuk', 
            'substansi'=>'Pembangungan Rel Kereta Api', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '163',
            'eselon1' => 'Deputi 6', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Distribusi Obat ke Daerah Terpencil', 
            'substansi'=>'Distribusi Obat', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '164',
            'eselon1' => 'Deputi 6', 'eselon2'=>'Asdep 4', 
            'nama_proker'=>'Evakuasi Korban Bencana Alam', 
            'substansi'=>'Evakuasi Korban', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //end of data proker for Deputi 6 asdep 4

        //Data proker for Deputi 6 Asdep 5
        \DB::table('program_kerja')->insert(
            ['id_proker' => '165',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 5', 
             'nama_proker'=>'Permasalahan Kesehatan di Jakarta', 
             'substansi'=>'Kesehatan', 
             'pic_proker'=>'Naomi', 
             'kolaborator'=>'', 
             'tgl_mulai'=> '2025-05-05', 
             'tgl_akhir'=>'2022-01-18', 
             'kategori'=>'Arahan Menteri',
             'status'=>'Active',
             'progres'=>'40%',
             'kendala'=>'',
             'tindak_lanjut'=>'',
             'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '166',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Pembangunan Bendungan di Nganjuk', 
            'substansi'=>'Pembangungan Bendungan', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'Libur Lebaran',
            'tindak_lanjut'=>'Akan dilanjutkan setelah lebaran selesai',
            'keterangan'=>'Para pekerja sedang diliburkan']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '167',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Distribusi Buku Pelajaran ke Daerah Terpencil', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '168',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Pembangunan Wilayah Pemukiman Untuk Daerah Terkena Bencana Alam', 
            'substansi'=>'Pembangunan Pemukiman', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'Alat Trasnportasi yang Tidak Memadai',
            'tindak_lanjut'=>'Menyediakan transportasi yang memadai untuk tim',
            'keterangan'=>'Alat transportasi akan disesuaikan dengan jumlah bawaan oleh tim']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '169',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Asdep 5', 
            'nama_proker'=>'Penyebaran Vaksin di Daerah Jawa Barat', 
            'substansi'=>'Penyebaran Vaksin', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'Kurangnya jumlah orang untuk melakukan penyebaran vaksin',
            'tindak_lanjut'=>'Akan dialihkan ke unit kerja lainnya',
            'keterangan'=>'Unit kerja yang ada sekarang jumlah nya kurang memadai sehingga akan dialihkan ke unit kerja lainnya']);
        //end of data proker for Deputi 6 asdep 5

        //Data proker for Deputi 6 Sekdep
        \DB::table('program_kerja')->insert(
            ['id_proker' => '170',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Pencemaran Udara di Jakarta', 
            'substansi'=>'Pencemaran Udara', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-05-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'40%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '171',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Sosialisasi Pentingnya Imunisasi', 
            'substansi'=>'Imunisasi', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'Deputi 2', 
            'tgl_mulai'=> '2021-08-17', 
            'tgl_akhir'=>'2022-10-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'20%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '172',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Penanggulangan Sulitnya Air Bersih di Papua', 
            'substansi'=>'Air bersih', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
    
        \DB::table('program_kerja')->insert(
            ['id_proker' => '173',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Illegal Logging di Kalimantan', 
            'substansi'=>'Illegal Logging', 
            'pic_proker'=>'Cindy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-09-05', 
            'tgl_akhir'=>'2022-01-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'50%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '174',
            'eselon1' => 'Deputi 6', 'eselon2' => 'Sekdep', 
            'nama_proker'=>'Permasalahan Pencemaran Tanah di Jakarta', 
            'substansi'=>'Pencemaran Tanah', 
            'pic_proker'=>'Erika', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'80%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        // End Of data proker for Deputi 6
        
        //Data proker for Sekretariat Kemenko: Inspektorat
        \DB::table('program_kerja')->insert(
            ['id_proker' => '175',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Inspektorat', 
            'nama_proker'=>'Proker AA', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '176',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Inspektorat', 
            'nama_proker'=>'Proker AB', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '180',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Inspektorat',  
            'nama_proker'=>'Proker AC', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '181',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Inspektorat', 
            'nama_proker'=>'Proker AD', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '182',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Inspektorat', 
            'nama_proker'=>'Proker AE', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '183',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Inspektorat',  
            'nama_proker'=>'Proker AF', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //End of data proker for Inspektorat

        //Data proker for Sekretariat Kemenko: Biro Komunikasi
        \DB::table('program_kerja')->insert(
            ['id_proker' => '184',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Komunikasi', 
            'nama_proker'=>'Proker A', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '185',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Komunikasi', 
            'nama_proker'=>'Proker B', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '186',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Komunikasi',  
            'nama_proker'=>'Proker C', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '187',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Komunikasi', 
            'nama_proker'=>'Proker D', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '188',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Komunikasi', 
            'nama_proker'=>'Proker E', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '189',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Komunikasi',  
            'nama_proker'=>'Proker F', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //End of data proker for Biro Komunikasi

        //Data proker for Sekretariat Kemenko: Biro Umum        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '190',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Umum', 
            'nama_proker'=>'Proker G', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '191',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Umum', 
            'nama_proker'=>'Proker H', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '192',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Umum',  
            'nama_proker'=>'Proker I', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '193',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Umum', 
            'nama_proker'=>'Proker J', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '194',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Umum', 
            'nama_proker'=>'Proker K', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '195',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Umum',  
            'nama_proker'=>'Proker L', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);
        //End of data proker for Biro Umum

        //Data proker for Sekretariat Kemenko: Biro Perencanaan
        \DB::table('program_kerja')->insert(
            ['id_proker' => '196',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Perencanaan', 
            'nama_proker'=>'Proker M', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '197',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Perencanaan', 
            'nama_proker'=>'Proker M', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '198',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Perencanaan',  
            'nama_proker'=>'Proker N', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '199',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Perencanaan', 
            'nama_proker'=>'Proker O', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '200',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Perencanaan', 
            'nama_proker'=>'Proker P', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '201',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Perencanaan',  
            'nama_proker'=>'Proker Q', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        //End of data proker for Biro Perencanaan

        //Data proker for Sekretariat Kemenko: Biro Hukum
        
        \DB::table('program_kerja')->insert(
            ['id_proker' => '202',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Hukum', 
            'nama_proker'=>'Proker R', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '203',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Hukum', 
            'nama_proker'=>'Proker S', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Done',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '204',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Hukum',  
            'nama_proker'=>'Proker T', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Pending',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '205',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Hukum', 
            'nama_proker'=>'Proker U', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Yohanes', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Suspended',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '206',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Hukum', 
            'nama_proker'=>'Proker V', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Naomi', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Overdue',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        \DB::table('program_kerja')->insert(
            ['id_proker' => '207',
            'eselon1' => 'Sekretariat', 'eselon2'=>'Biro Hukum',  
            'nama_proker'=>'Proker W', 
            'substansi'=>'Distribusi Buku', 
            'pic_proker'=>'Roy', 
            'kolaborator'=>'', 
            'tgl_mulai'=> '2021-04-05', 
            'tgl_akhir'=>'2021-06-18', 
            'kategori'=>'Arahan Menteri',
            'status'=>'Active',
            'progres'=>'100%',
            'kendala'=>'',
            'tindak_lanjut'=>'',
            'keterangan'=>'']);

        //End of data proker for Biro Hukum
    }

}
