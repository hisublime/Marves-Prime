<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\RencanaAksi;
use App\Models\Turen;
use App\Models\ProgramKerja;

class TurenController extends Controller
{
    public function index($id)
    {
        $renaksi = RencanaAksi::where('id_renaksi','like', $id)->get();
        return view('eselon1/tambah-turen',['renaksi'=>$renaksi]);
    }

    public function create(Request $request)
    {
       
        Turen::create([
            'id_proker' => $request->id_proker,
            'id_renaksiinduk' => $request->id_renaksiinduk,
            'nama_turen' => $request->nama_turen,
            'pic' => $request->pic,
            'tgl_mulai_turen' => $request->tgl_mulai_turen,
            'tgl_akhir_turen' => $request->tgl_akhir_turen,
        ]);
        return redirect('/detail-program-isu/'.$request->id_proker);
    }

    public function edit($id)
    {
        $turen = Turen::where('id_turen','like', $id)->get();
        return view('/eselon1.edit-turen', compact('turen'));
    }

    public function update(Request $request)
    {
         Turen::where('id_turen',$request->id)->update([
            'id_proker' => $request->id_proker,
            'id_renaksiinduk' => $request->id_renaksi,
            'nama_turen' => $request->nama_turen,
            'pic' => $request->pic,
            'tgl_mulai_turen' => $request->tgl_mulai_turen,
            'tgl_akhir_turen' => $request->tgl_akhir_turen,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
            'tindak_lanjut' => $request->tindak_lanjut,
        ]);
        return redirect('/detail-program-isu/'.$request->id_proker);
    } 
}
