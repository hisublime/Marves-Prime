<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProgramKerja;

class ArahanMenteriController extends BaseController
{
    
    public function index(Request $request){
        if(auth()->user()->role=='Deputi 1'){
           
        $data_program = DB::table('program_kerja')->where('eselon1','=','Deputi 1','AND','kategori','Arahan Mentri')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
    
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else if(auth()->user()->role=='Deputi 2'){
           
        $data_program = DB::table('program_kerja')->where('eselon1','=','Deputi 2','AND','kategori','Arahan Mentri')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
    
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else if(auth()->user()->role=='Deputi 3'){
           
        $data_program = DB::table('program_kerja')->where('eselon1','=','Deputi 3','AND','kategori','Arahan Mentri')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
    
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else if(auth()->user()->role=='Deputi 4'){
           
        $data_program = DB::table('program_kerja')->where('eselon1','=','Deputi 4','AND','kategori','Arahan Mentri')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
    
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else if(auth()->user()->role=='Deputi 5'){
           
        $data_program = DB::table('program_kerja')->where('eselon1','=','Deputi 5','AND','kategori','Arahan Mentri')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
    
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else if(auth()->user()->role=='Deputi 6'){
           
        $data_program = DB::table('program_kerja')->where('eselon1','=','Deputi 6','AND','kategori','Arahan Mentri')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
    
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else if(auth()->user()->role=='eseloni'){
        $data_program = DB::table('program_kerja')->where('kategori','LIKE',"%Arahan Menteri%")->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
            
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        } else if(auth()->user()->role=='pemimpin'){
        $data_program = DB::table('program_kerja')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
                        
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        } else{
        $data_program = DB::table('program_kerja')->where('eselon1','=','Deputi 1','AND','kategori','Arahan Mentri')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
                
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }
        //jadi untuk persennya:
        $persen = ($jumlah_done/$count)*100;
        
        return view('eselon1.showArahanMenteri',['data_program'=>$data_program, 'persen' => $persen, 'jumlah_done'=> $jumlah_done, 'count'=>$count]);
    }

    function create()
    {
       return view('/eselon1/showArahanMenteri'); 
    }

    function save(Request $req)
    {
        $program_kerja = new program_kerja;
        $program_kerja ->nama= $req->nama;
        $program_kerja ->pic= $req->pic;
        $program_kerja ->kolaborator= $req->kolaborator;
        $program_kerja ->tgl_mulai= $req->tgl_mulai;
        $program_kerja ->tgl_akhir= $req->tgl_akhir;
        $program_kerja ->save();
        return redirect('/eselon1/showArahanMenteri')->with('flash_message_success', 'Insert Berhasil');
    }

    public function arahanmenko(Request $request){
        if(auth()->user()->role=='Deputi 1'){
           
        $data_program = DB::table('program_kerja')->where('eselon1','=','Deputi 1','AND','kategori','Arahan Mentri')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
    
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else if(auth()->user()->role=='Deputi 2'){
           
        $data_program = DB::table('program_kerja')->where('eselon1','=','Deputi 2','AND','kategori','Arahan Mentri')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
    
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else if(auth()->user()->role=='Deputi 3'){
           
        $data_program = DB::table('program_kerja')->where('eselon1','=','Deputi 3','AND','kategori','Arahan Mentri')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
    
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else if(auth()->user()->role=='Deputi 4'){
           
        $data_program = DB::table('program_kerja')->where('eselon1','=','Deputi 4','AND','kategori','Arahan Mentri')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
    
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else if(auth()->user()->role=='Deputi 5'){
           
        $data_program = DB::table('program_kerja')->where('eselon1','=','Deputi 5','AND','kategori','Arahan Mentri')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
    
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else if(auth()->user()->role=='Deputi 6'){
           
        $data_program = DB::table('program_kerja')->where('eselon1','=','Deputi 6','AND','kategori','Arahan Mentri')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
    
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        } else if(auth()->user()->role=='pemimpin'){
        $data_program = DB::table('program_kerja')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
                        
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else{
        $data_program = DB::table('program_kerja')->where('eselon1','=','Deputi 1','AND','kategori','Arahan Mentri')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
                
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }
        //jadi untuk persennya:
        $persen = ($jumlah_done/$count)*100;
        
        return view('menko.showArahanMenteri',['data_program'=>$data_program, 'persen' => $persen, 'jumlah_done'=> $jumlah_done, 'count'=>$count]);
    }
}