<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NotifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('notifikasi')->insert([
            'id_notifikasi'=>'1',
            'id_unitkerja'=>'1',
            'id_pegawai'=>'1',
            'tanggal'=>Carbon::parse(''),
            'waktu'=>'08:00:00',
            'notifikasi'=>'',
            'keterangan'=>''
        ]);

        DB::table('notifikasi')->insert([
            'id_notifikasi'=>'2',
            'id_unitkerja'=>'1',
            'id_pegawai'=>'1',
            'tanggal'=>Carbon::parse(''),
            'waktu'=>'08:00:00',
            'notifikasi'=>'',
            'keterangan'=>''
        ]);

        DB::table('notifikasi')->insert([
            'id_notifikasi'=>'3',
            'id_unitkerja'=>'1',
            'id_pegawai'=>'1',
            'tanggal'=>Carbon::parse(''),
            'waktu'=>'08:00:00',
            'notifikasi'=>'',
            'keterangan'=>''
        ]);

        DB::table('notifikasi')->insert([
            'id_notifikasi'=>'4',
            'id_unitkerja'=>'1',
            'id_pegawai'=>'1',
            'tanggal'=>Carbon::parse(''),
            'waktu'=>'08:00:00',
            'notifikasi'=>'',
            'keterangan'=>''
        ]);

        DB::table('notifikasi')->insert([
            'id_notifikasi'=>'5',
            'id_unitkerja'=>'1',
            'id_pegawai'=>'1',
            'tanggal'=>Carbon::parse(''),
            'waktu'=>'08:00:00',
            'notifikasi'=>'',
            'keterangan'=>''
        ]);

        DB::table('notifikasi')->insert([
            'id_notifikasi'=>'6',
            'id_unitkerja'=>'1',
            'id_pegawai'=>'1',
            'tanggal'=>Carbon::parse(''),
            'waktu'=>'08:00:00',
            'notifikasi'=>'',
            'keterangan'=>''
        ]);

        DB::table('notifikasi')->insert([
            'id_notifikasi'=>'7',
            'id_unitkerja'=>'1',
            'id_pegawai'=>'1',
            'tanggal'=>Carbon::parse(''),
            'waktu'=>'08:00:00',
            'notifikasi'=>'',
            'keterangan'=>''
        ]);
    }
}
