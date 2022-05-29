<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use \App\Models\ProgramKerja;
use DB;

class ProgramController extends Controller
{
    public function index(Request $request) 
    {
        if(auth()->user()->role=='Deputi 1'){
        $data_program = DB::table('program_kerja')->where('eselon1', 'Deputi 1')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();

        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        } else if(auth()->user()->role=='Deputi 2'){
        $data_program = DB::table('program_kerja')->where('eselon1', 'Deputi 2')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
    
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        } else if(auth()->user()->role=='Deputi 3'){
        $data_program = DB::table('program_kerja')->where('eselon1', 'Deputi 3')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
        
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        } else if(auth()->user()->role=='Deputi 4'){
        $data_program = DB::table('program_kerja')->where('eselon1', 'Deputi 4')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
        
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else if(auth()->user()->role=='Deputi 5'){
        $data_program = DB::table('program_kerja')->where('eselon1', 'Deputi 5')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
            
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else if(auth()->user()->role=='Deputi 6'){
        $data_program = DB::table('program_kerja')->where('eselon1', 'Deputi 6')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
                
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        } else if(auth()->user()->role=='eseloni'){
        $data_program = DB::table('program_kerja')->where('eselon1', 'eseloni')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
        
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        } else if(auth()->user()->role=='menkomarves'){
        $data_program = DB::table('program_kerja')->get();
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
        $data_program = DB::table('program_kerja')->where('eselon1', 'Deputi 1')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
                
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }

        //jadi untuk persennya:
        $persen = ($jumlah_done/$count)*100;
        return view('admin.index',['data_program' => $data_program,'persen' => $persen, 'jumlah_done'=> $jumlah_done, 'count'=>$count]);
    }


    public function programmenko(Request $request) 
    	{
        if(auth()->user()->role=='Deputi 1'){
        $data_program = DB::table('program_kerja')->where('eselon1', 'Deputi 1')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();

        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        } else if(auth()->user()->role=='Deputi 2'){
        $data_program = DB::table('program_kerja')->where('eselon1', 'Deputi 2')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
    
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        } else if(auth()->user()->role=='Deputi 3'){
        $data_program = DB::table('program_kerja')->where('eselon1', 'Deputi 3')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
        
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        } else if(auth()->user()->role=='Deputi 4'){
        $data_program = DB::table('program_kerja')->where('eselon1', 'Deputi 4')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
        
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else if(auth()->user()->role=='Deputi 5'){
        $data_program = DB::table('program_kerja')->where('eselon1', 'Deputi 5')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
            
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else if(auth()->user()->role=='Deputi 6'){
        $data_program = DB::table('program_kerja')->where('eselon1', 'Deputi 6')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
                
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else if(auth()->user()->role=='menkomarves'){
        $data_program = DB::table('program_kerja')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
                
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        } 
        else if(auth()->user()->role=='pemimpin'){
        $data_program = DB::table('program_kerja')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
                    
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }else{
        $data_program = DB::table('program_kerja')->where('eselon1', 'Deputi 1')->get();
        //$data_program = \App\Models\Program::all();
        $count = ProgramKerja::count();
                
        $tabel1 = DB::table('program_kerja')->whereIn('status', ['done'])->get();
        $jumlah_done = count($tabel1);
        }

        //jadi untuk persennya:
        $persen = ($jumlah_done/$count)*100;
        return view('pimpinan.program-isu',['data_program' => $data_program,'persen' => $persen, 'jumlah_done'=> $jumlah_done, 'count'=>$count]);
    }
    // public function create(Request $request)
    // {
    //     \App\Models\ProgramKerja::create([
    //         'eselon1' => auth()->user()->role,
    //         'eselon2' => auth()->user()->asdep,
    //         'nama_proker' => $request->nama_proker,
    //         'status'=> 'Active',
    //         'substansi' => $request->substansi,
    //         'pic_proker' => $request->pic_proker,
    //         'kolaborator' => $request->kolaborator,
    //         'tgl_mulai' => $request->tgl_mulai,
    //         'tgl_akhir' => $request->tgl_akhir,
    //         'kategori' => $request->kategori,
    //     ]);
    //     return redirect('/program')->with('sukses','Data berhasil diinput');
    // }

    public function create(Request $request)
    { 

        $input = implode(", ", $_POST["kategori"]);
        \App\Models\ProgramKerja::create([
            'eselon1' => auth()->user()->role,
            'eselon2' => auth()->user()->asdep,
            'nama_proker' => $request->nama_proker,
            'status'=> 'Active',
            'substansi' => $request->substansi,
            'pic_proker' => $request->pic_proker,
            'kolaborator' => $request->kolaborator,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir,
            'kategori' => $input,
        ]);

        return redirect('/program')->with('sukses','Data berhasil diinput');
    }
    public function edit($id)
    {
        $program = \App\Models\ProgramKerja::find($id);
        return view('admin/editisu', ['program' =>$program]);
    }
    public function update(Request $request,$id)
    {
        $program = \App\Models\ProgramKerja::find($id);
        $program->update($request->all());
        return redirect('/program')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $program = \App\Models\ProgramKerja::find($id);
        $program->delete();
        return redirect('/program')->with('sukses','Data berhasil dihapus');
    }
    
}
