<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ProgramKerja;
use App\Models\RencanaAksi;
use App\Models\Kegiatan;

class RenaksiController extends Controller
{
    public function indexdetail($id)
    {   
        $program = ProgramKerja::where('id_proker','like', $id)->get();
        $kegiatan = DB::table('kegiatan')->get();
        $rencana_aksi = DB::table('rencana_aksi')->get();

        //untuk perhitungan progres bar isu
        $count = Kegiatan::count();
        $tabel1 = DB::table('kegiatan')->whereIn('status', ['Done'])->get();
        $jumlah_done = count($tabel1);

        if($jumlah_done > 0 ){
        //jadi untuk persennya:
        $persen = ($jumlah_done/$count)*100;
        }else {
            $persen = 0;
        }

        $join = DB::table('rencana_aksi')
        ->leftjoin('turen', 'turen.id_renaksiinduk', '=', 'rencana_aksi.id_renaksi')->where('rencana_aksi.id_proker','like', $id)  
        ->get();

        return view('/eselon1/detail-program-isu',compact('program', 'kegiatan', 'rencana_aksi', 'count', 'jumlah_done', 'persen', 'join'));
    }

    public function index($id) 
    {
        $program = ProgramKerja::where('id_proker','like', $id)->get();
        return view('eselon1/tambah-renaksi',['program'=>$program]);       
    }

    public function create(Request $request)
    { 
        $request->validate([
            'id_proker' => 'required',
            'nama_renaksi' => 'required',
            'pic' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required',
        ]);

        RencanaAksi::create([
            'id_proker' => $request->id_proker,
            'nama_renaksi' => $request->nama_renaksi,
            'pic' => $request->pic,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir,
        ]);
        return redirect('/detail-program-isu/'.$request->id_proker);
    }

    public function edit($id)
    {
        $renaksi = RencanaAksi::where('id_renaksi','like', $id)->get();
        return view('/eselon1/edit-renaksi', compact('renaksi'));
    }
    
    public function update(Request $request)
    {

        RencanaAksi::where('id_renaksi',$request->id)->update([
            'id_proker' => $request->id_proker,
            'nama_renaksi' => $request->nama_renaksi,
            'pic' => $request->pic,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
            'tindak_lanjut' => $request->tindak_lanjut,
        ]);
        return redirect('/detail-program-isu/'.$request->id_proker);
    }
}