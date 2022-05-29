<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\RencanaAksi;

class KegiatanController extends Controller
{

    public function index($id)
    {
        $renaksi = RencanaAksi::where('id_renaksi','like', $id)->get();
        return view('eselon1/tambah-kegiatan',['renaksi'=>$renaksi]);
    }

    public function create(Request $request)
    { 
        Kegiatan::create([
            'id_proker' => $request->id_proker,
            'id_renaksi' => $request->id_renaksi,
            'nama_kegiatan' => $request->nama_kegiatan,
            'lokasi' => $request->lokasi,
            'pic' => $request->pic,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/detail-program-isu/'.$request->id_proker);
    }

    public function edit($id)
    {
        $kegiatan = Kegiatan::where('id_kegiatan','like', $id)->get();
        return view('/eselon1.edit-kegiatan', compact('kegiatan'));
    }
    
    public function delete($id)
    {
        Kegiatan::where('id_kegiatan',$id)->delete();
	    return back();
    }

    public function update(Request $request)
    {
        Kegiatan::where('id_kegiatan',$request->id)->update([
            'id_proker' => $request->id_proker,
            'id_renaksi' => $request->id_renaksi,
            'nama_kegiatan' => $request->nama_kegiatan,
            'lokasi' => $request->lokasi,
            'pic' => $request->pic,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir,
            'keterangan' => $request->keterangan,
            'tgl_mulairealisasi' => $request->tgl_mulairealisasi,
            'tgl_akhirrealisasi' => $request->tgl_akhirrealisasi,
            'status' => $request->status,
            'alasan' => $request->alasan,
        ]);
        return redirect('/detail-program-isu/'.$request->id_proker);
    }

    public function detail($id)
    {
        $kegiatan = Kegiatan::where('id_kegiatan','like', $id)->get();
        return view('eselon1/detail-kegiatan',['kegiatan'=>$kegiatan]);
    }
}

