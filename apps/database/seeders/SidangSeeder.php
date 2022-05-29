<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sidang')->insert([
            'id_laporan'=>'1',
            'id_pegawai'=>'1',
            'tanggal'=>Carbon::parse(''),
            'waktu'=>'08:00:00',
            'hasil_sidang'=>'',
            'keterangan'=>''
        ]);

        DB::table('sidang')->insert([
            'id_laporan'=>'2',
            'id_pegawai'=>'1',
            'tanggal'=>Carbon::parse(''),
            'waktu'=>'08:00:00',
            'hasil_sidang'=>'',
            'keterangan'=>''
        ]);

        DB::table('sidang')->insert([
            'id_laporan'=>'3',
            'id_pegawai'=>'1',
            'tanggal'=>Carbon::parse(''),
            'waktu'=>'08:00:00',
            'hasil_sidang'=>'',
            'keterangan'=>''
        ]);

        DB::table('sidang')->insert([
            'id_laporan'=>'4',
            'id_pegawai'=>'1',
            'tanggal'=>Carbon::parse(''),
            'waktu'=>'08:00:00',
            'hasil_sidang'=>'',
            'keterangan'=>''
        ]);

        DB::table('sidang')->insert([
            'id_laporan'=>'5',
            'id_pegawai'=>'1',
            'tanggal'=>Carbon::parse(''),
            'waktu'=>'08:00:00',
            'hasil_sidang'=>'',
            'keterangan'=>''
        ]);

        DB::table('sidang')->insert([
            'id_laporan'=>'6',
            'id_pegawai'=>'1',
            'tanggal'=>Carbon::parse(''),
            'waktu'=>'08:00:00',
            'hasil_sidang'=>'',
            'keterangan'=>''
        ]);

        DB::table('sidang')->insert([
            'id_laporan'=>'7',
            'id_pegawai'=>'1',
            'tanggal'=>Carbon::parse(''),
            'waktu'=>'08:00:00',
            'hasil_sidang'=>'',
            'keterangan'=>''
        ]);
    }
}
