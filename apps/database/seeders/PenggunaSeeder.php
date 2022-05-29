<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pengguna')->insert(
            ['id' => 1,
            'nama_user'=> 'Administration',
            'jabatan' => 'administration',
            'id_pegawai'=>'123456778',
            'asdep' => '',
            'username'=>'admin',
            'status' => 'Active',
            'avatar'=>'']);
            
            \DB::table('pengguna')->insert(
            ['id' => 2,
            'nama_user'=> 'Eselon I',
            'jabatan' => 'eseloni',
            'id_pegawai'=>'123456778',
            'asdep' => '',
            'username'=>'eseloni',
            'status' => 'Active',
            'avatar'=>'']);
            
            \DB::table('pengguna')->insert(
            ['id' => 3,
            'nama_user'=> 'Deputi 1',
            'jabatan' => 'Deputi 1',
            'id_pegawai'=>'123456778',
            'asdep' => 'Asdep 1',
            'username' =>'d1asdep1',
            'status' => 'Active',
            'avatar'=>'']);
    
            \DB::table('pengguna')->insert(
            ['id' => 4,
            'nama_user'=> 'Deputi 1',
            'jabatan' => 'Deputi 1',
            'id_pegawai'=>'123456778',
            'asdep' => 'Asdep 2',
            'username' => 'd1asdep2',
            'status' => 'Active',
            'avatar'=>'']);
    
            \DB::table('pengguna')->insert(
            ['id' => 5,
            'nama_user'=> 'Deputi 1',
            'jabatan' =>'Deputi 1',
            'id_pegawai' => '123456778',
            'asdep' => 'Asdep 3',
            'username' => 'd1asdep3',
            'status' => 'Active',
            'avatar'=>'']);
    
            \DB::table('pengguna')->insert(
            ['id' => 6,
            'nama_user'=> 'Deputi 1',
            'jabatan' => 'Deputi 1',
            'id_pegawai' => '123456778',
            'asdep' => 'Asdep 4',
            'username' => 'd1asdep4',
            'status' => 'Active',
            'avatar'=>'']);
    
            \DB::table('pengguna')->insert(
            ['id' => 7,
            'nama_user'=> 'Deputi 1',
            'jabatan' => 'Deputi 1',
            'id_pegawai' => '123456778',
            'asdep' => 'Asdep 5',
            'username'=>'d1asdep5',
            'status' => 'Active',
            'avatar'=>'']);
    
            \DB::table('pengguna')->insert(
                ['id' => 8,
                'nama_user'=> 'Deputi 2',
                'jabatan' => 'Deputi 2',
                'id_pegawai'=>'123456778',
                'asdep' => 'Asdep 1',
                'username' =>'d2asdep1',
                'status' => 'Active',
                'avatar'=>'']);
        
                \DB::table('pengguna')->insert(
                ['id' => 9,
                'nama_user'=> 'Deputi 2',
                'jabatan' => 'Deputi 2',
                'id_pegawai'=>'123456778',
                'asdep' => 'Asdep 2',
                'username' => 'd2asdep2',
                'status' => 'Active',
                'avatar'=>'']);
        
                \DB::table('pengguna')->insert(
                ['id' => 10,
                'nama_user'=> 'Deputi 2',
                'jabatan' =>'Deputi 2',
                'id_pegawai' => '123456778',
                'asdep' => 'Asdep 3',
                'username' => 'd2asdep3',
                'status' => 'Active',
                'avatar'=>'']);
        
                \DB::table('pengguna')->insert(
                ['id' => 11,
                'nama_user'=> 'Deputi 2',
                'jabatan' => 'Deputi 2',
                'id_pegawai' => '123456778',
                'asdep' => 'Asdep 4',
                'username' => 'd2asdep4',
                'status' => 'Active',
                'avatar'=>'']);
        
                \DB::table('pengguna')->insert(
                ['id' => 12,
                'nama_user'=> 'Deputi 2',
                'jabatan' => 'Deputi 2',
                'id_pegawai' => '123456778',
                'asdep' => 'Asdep 5',
                'username'=>'d2asdep5',
                'status' => 'Active',
                'avatar'=>'']);
    
                \DB::table('pengguna')->insert(
                    ['id' => 13,
                    'nama_user'=> 'Deputi 3',
                    'jabatan' => 'Deputi 3',
                    'id_pegawai'=>'123456778',
                    'asdep' => 'Asdep 1',
                    'username' =>'d3asdep1',
                    'status' => 'Active',
                    'avatar'=>'']);
            
                    \DB::table('pengguna')->insert(
                    ['id' => 14,
                    'nama_user'=> 'Deputi 3',
                    'jabatan' => 'Deputi 3',
                    'id_pegawai'=>'123456778',
                    'asdep' => 'Asdep 2',
                    'username' => 'd3asdep2',
                    'status' => 'Active',
                    'avatar'=>'']);
            
                    \DB::table('pengguna')->insert(
                    ['id' => 15,
                    'nama_user'=> 'Deputi 3',
                    'jabatan' =>'Deputi 3',
                    'id_pegawai' => '123456778',
                    'asdep' => 'Asdep 3',
                    'username' => 'd4asdep3',
                    'status' => 'Active',
                    'avatar'=>'']);
            
                    \DB::table('pengguna')->insert(
                    ['id' => 16,
                    'nama_user'=> 'Deputi 3',
                    'jabatan' => 'Deputi 3',
                    'id_pegawai' => '123456778',
                    'asdep' => 'Asdep 3',
                    'username' => 'd3asdep4',
                    'status' => 'Active',
                    'avatar'=>'']);
            
                    \DB::table('pengguna')->insert(
                    ['id' => 17,
                    'nama_user'=> 'Deputi 3',
                    'jabatan' => 'Deputi 3',
                    'id_pegawai' => '123456778',
                    'asdep' => 'Asdep 5',
                    'username'=>'d3asdep5',
                    'status' => 'Active',
                    'avatar'=>'']);
    
                    \DB::table('pengguna')->insert(
                        ['id' => 18,
                        'nama_user'=> 'Deputi 4',
                        'jabatan' => 'Deputi 4',
                        'id_pegawai'=>'123456778',
                        'asdep' => 'Asdep 1',
                        'username' =>'d4asdep1',
                        'status' => 'Active',
                        'avatar'=>'']);
                
                        \DB::table('pengguna')->insert(
                        ['id' => 19,
                        'nama_user'=> 'Deputi 4',
                        'jabatan' => 'Deputi 4',
                        'id_pegawai'=>'123456778',
                        'asdep' => 'Asdep 2',
                        'username' => 'd4asdep2',
                        'status' => 'Active',
                        'avatar'=>'']);
                
                        \DB::table('pengguna')->insert(
                        ['id' => 20,
                        'nama_user'=> 'Deputi 4',
                        'jabatan' =>'Deputi 4',
                        'id_pegawai' => '123456778',
                        'asdep' => 'Asdep 3',
                        'username' => 'd4asdep3',
                        'status' => 'Active',
                        'avatar'=>'']);
                
                        \DB::table('pengguna')->insert(
                        ['id' => 21,
                        'nama_user'=> 'Deputi 4',
                        'jabatan' => 'Deputi 4',
                        'id_pegawai' => '123456778',
                        'asdep' => 'Asdep 4',
                        'username' => 'd4asdep4',
                        'status' => 'Active',
                        'avatar'=>'']);
                
                        \DB::table('pengguna')->insert(
                        ['id' => 22,
                        'nama_user'=> 'Deputi 4',
                        'jabatan' => 'Deputi 4',
                        'id_pegawai' => '123456778',
                        'asdep' => 'Asdep 5',
                        'username'=>'d4asdep5',
                        'status' => 'Active',
                        'avatar'=>'']);
    
                        \DB::table('pengguna')->insert(
                            ['id' => 23,
                            'nama_user'=> 'Deputi 5',
                            'jabatan' => 'Deputi 5',
                            'id_pegawai'=>'123456778',
                            'asdep' => 'Asdep 1',
                            'username' =>'d5asdep1',
                            'status' => 'Active',
                            'avatar'=>'']);
                    
                            \DB::table('pengguna')->insert(
                            ['id' => 24,
                            'nama_user'=> 'Deputi 5',
                            'jabatan' => 'Deputi 5',
                            'id_pegawai'=>'123456778',
                            'asdep' => 'Asdep 2',
                            'username' => 'd5asdep2',
                            'status' => 'Active',
                            'avatar'=>'']);
                    
                            \DB::table('pengguna')->insert(
                            ['id' => 25,
                            'nama_user'=> 'Deputi 5',
                            'jabatan' =>'Deputi 5',
                            'id_pegawai' => '123456778',
                            'asdep' => 'Asdep 3',
                            'username' => 'd5asdep3',
                            'status' => 'Active',
                            'avatar'=>'']);
                    
                            \DB::table('pengguna')->insert(
                            ['id' => 26,
                            'nama_user'=> 'Deputi 5',
                            'jabatan' => 'Deputi 5',
                            'id_pegawai' => '123456778',
                            'asdep' => 'Asdep 4',
                            'username' => 'd5asdep4',
                            'status' => 'Active',
                            'avatar'=>'']);
                    
                            \DB::table('pengguna')->insert(
                            ['id' => 27,
                            'nama_user'=> 'Deputi 5',
                            'jabatan' => 'Deputi 5',
                            'id_pegawai' => '123456778',
                            'asdep' => 'Asdep 5',
                            'username'=>'d5asdep5',
                            'status' => 'Active',
                            'avatar'=>'']);
    
                            \DB::table('pengguna')->insert(
                                ['id' => 28,
                                'nama_user'=> 'Deputid6',
                                'jabatan' => 'Deputid6',
                                'id_pegawai'=>'123456778',
                                'asdep' => 'Asdep 1',
                                'username' =>'d6asdep1',
                                'status' => 'Active',
                                'avatar'=>'']);
                        
                                \DB::table('pengguna')->insert(
                                ['id' => 29,
                                'nama_user'=> 'Deputid6',
                                'jabatan' => 'Deputid6',
                                'id_pegawai'=>'123456778',
                                'asdep' => 'Asdep 2',
                                'username' => 'd6asdep2',
                                'status' => 'Active',
                                'avatar'=>'']);
                        
                                \DB::table('pengguna')->insert(
                                ['id' => 30,
                                'nama_user'=> 'Deputid6',
                                'jabatan' =>'Deputid6',
                                'id_pegawai' => '123456778',
                                'asdep' => 'Asdep 3',
                                'username' => 'd6asdep3',
                                'status' => 'Active',
                                'avatar'=>'']);
                        
                                \DB::table('pengguna')->insert(
                                ['id' => 31,
                                'nama_user'=> 'Deputid6',
                                'jabatan' => 'Deputid6',
                                'id_pegawai' => '123456778',
                                'asdep' => 'Asdep 4',
                                'username' => 'd6asdep4',
                                'status' => 'Active',
                                'avatar'=>'']);
                        
                                \DB::table('pengguna')->insert(
                                ['id' => 32,
                                'nama_user'=> 'Deputid6',
                                'jabatan' => 'Deputid6',
                                'id_pegawai' => '123456778',
                                'asdep' => 'Asdep 5',
                                'username'=>'d6asdep5',
                                'status' => 'Active',
                                'avatar'=>'']);
    
            \DB::table('pengguna')->insert(
            ['id' => 33,
            'nama_user'=> 'Pemimpin',
            'jabatan' => 'pemimpin',
            'id_pegawai' => '123456778',
            'asdep' => '',
            'username'=>'pemimpin',
            'status' => 'Active',
            'avatar'=>'']);
    
            \DB::table('pengguna')->insert(
            ['id' => 34,
            'nama_user'=> 'Menko Marves',
            'jabatan' => 'menkomarves',
            'id_pegawai' => '123456778',
            'asdep' => '',
            'username'=>'menkomarves',
            'status' => 'Active',
            'avatar'=>'']);
    
            \DB::table('pengguna')->insert(
            ['id' => 35,
            'nama_user'=> 'Persidangan',
            'jabatan' => 'persidangan',
            'id_pegawai'=>'123456778',
            'asdep' => '',
            'username'=>'pemimpin',
            'status' => 'Active',
            'avatar'=>'']);
    
            \DB::table('pengguna')->insert(
            ['id' => 36,
            'nama_user'=> 'Sekretariat-Kemenko',
            'jabatan' => 'sekretariat',
            'id_pegawai'=>'123456778',
            'asdep' => '',
            'username'=>'sekretariat-kemenko',
            'status' => 'Active',
            'avatar'=>'']);
    
            \DB::table('pengguna')->insert(
            ['id' => 37,
            'nama_user'=> 'Inspektorat',
            'jabatan' => 'inspektorat',
            'id_pegawai'=>'123456778',
            'asdep' => '',
            'username' => 'inspektorat',
            'status' => 'Active',
            'avatar'=>'']);
    }
}
