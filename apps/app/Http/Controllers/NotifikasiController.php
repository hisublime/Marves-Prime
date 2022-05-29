<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Rakor;
use App\Models\File;
use App\Models\Notifikasi;

class NotifikasiController extends Controller
{
    public function index()
    {
        $reminder = DB::table('program_kerja')->whereRaw('datediff(tgl_akhir, now()) <= 3')->get();
        return view('notifikasi.pengingat', ['reminder' =>$reminder]);
    }

    public function rakor(Request $request){
        $rakor = DB::table('rakor')->orderBy('id_rakor')->get();
        $file = File::where('id_rakor','like', $request)->get();
        return view('notifikasi.rakor', compact('rakor','file'));
    }

    public function draft(Request $request){
        $rakor = DB::table('rakor')->orderBy('id_rakor')->get();
        return view('notifikasi.draft-risalah', ['rakor' => $rakor]);
    }

    public function detail($id){
        $rakor = DB::table('rakor')
        ->join('kegiatan', 'rakor.id_kegiatan', '=', 'kegiatan.id_kegiatan')
        ->join('rencana_aksi', 'kegiatan.id_renaksi', '=', 'rencana_aksi.id_renaksi')
        ->join('program_kerja', 'kegiatan.id_proker', '=', 'program_kerja.id_proker')
        ->where('rakor.id_rakor', $id)
        ->select('program_kerja.nama_proker as isu', 'rencana_aksi.nama_renaksi', 'kegiatan.nama_kegiatan', 'rakor.tgl_pelaksanaan', 'rakor.id_rakor')
        ->first();
        
        $catatan = DB::table('catatan')->where('id_rakor', $id)->orderBy('tgl_pengiriman','DESC')->first();

        return view('notifikasi.detail-draft-risalah', compact('rakor', 'catatan'));

        // $catatan = DB::table('catatan')->where('id', $id)->get();
        // return view('notifikasi.detail-draft-risalah', ['catatan' => $catatan]);
    }

    public function edit($id){
        $rakor = DB::table('rakor')->where('id_rakor', $id)->get();
        return view('notifikasi.edit-notifikasi', ['rakor' => $rakor]);
    }
    public function update(Request $request){
        DB::table('rakor')->where('id_rakor', $request->id)->update([
            'topik' => $request->topik,
            'pic' => $request->pic,
            'lokasi' => $request->lokasi,
            'tgl_pelaksanaan' => $request->tgl_pelaksanaan,
            'waktu' => $request->waktu,
            'kegiatan' => $request->kegiatan,
            'catatan' => $request->catatan,
        ]);
        return redirect('notifikasi');
    }

}
