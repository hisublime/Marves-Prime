<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Rakor;
use App\Models\Catatan;
use App\Support\Collection;
use Carbon\Carbon;

class PersidanganController extends Controller
{
    public function index(Request $request)
    {
        $rakor = DB::table('rakor')->where('status', 'diterima' )->orderBy('id_rakor') ->get();
        $file = DB::table('files')->where('id_rakor', '=', $request)->get();
        return view('persidangan.daftar-persidangan', ['rakor' => $rakor]);
    }

    public function index_request(Request $request)
    {
        $rakor = DB::table('rakor')->where('status', 'menunggu' )->orderBy('id_rakor')->get();
        $file = DB::table('files')->where('id_rakor', '=', $request)->get();
        return view('persidangan.request-persidangan', ['rakor' => $rakor]);
    }

    public function index_ditolak(Request $request)
    {
        $rakor = DB::table('rakor')->where('status', 'ditolak' )->orderBy('id_rakor')->get();
        $file = DB::table('files')->where('id_rakor', '=', $request)->get();
        return view('persidangan.ditolak-persidangan', ['rakor' => $rakor]);
    }

    public function approve($id)
    {
        DB::table('rakor')->where('id_rakor', $id)->update(['status' => 'diterima']);
        return redirect('persidangan/request-persidangan');
    }

    public function reject($id)
    {
        DB::table('rakor')->where('id_rakor', $id)->update(['status' => 'ditolak']);
        return redirect('persidangan/request-persidangan');
    }

    public function input($id)
    {
        // $catatan = DB::table('rakor')->where('id_rakor', $id)->first();
        // $isu = DB::table('program_kerja')->where('id_proker', $id)->first();
        // $renaksi = DB::table('rencana_aksi')->where('id_renaksi', $id)->first();
        // $turen = DB::table('turen')->where('id_turen', $id)->first();
        // $check = DB::table('catatan')->where('id', $id)->first();
        // if ($check) {
        //     return view('persidangan.tambah-draft-risalah', compact('catatan', 'isu', 'renaksi', 'turen', 'check'));
        // } else {
        //     return view('persidangan.tambah-draft-risalah', compact('catatan', 'isu', 'renaksi', 'turen','check'));
        // }
        $rakor = DB::table('rakor')
        ->join('kegiatan', 'rakor.id_kegiatan', '=', 'kegiatan.id_kegiatan')
        ->join('rencana_aksi', 'kegiatan.id_renaksi', '=', 'rencana_aksi.id_renaksi')
        ->join('program_kerja', 'kegiatan.id_proker', '=', 'program_kerja.id_proker')
        ->where('rakor.id_rakor', $id)
        ->select('program_kerja.nama_proker as isu', 'rencana_aksi.nama_renaksi', 'kegiatan.nama_kegiatan', 'rakor.tgl_pelaksanaan', 'rakor.id_rakor')
        ->first();

        $catatan = DB::table('catatan')->where('id_rakor', $id)->orderBy('tgl_pengiriman','DESC')->first();

        return view('persidangan.tambah-draft-risalah', compact('rakor', 'catatan'));
    }

    public function store(Request $request, $id)
    {
        DB::table('catatan')->insert([
            'id_rakor' => $id,
            'tgl_pengiriman' => Carbon::now(),
            'arahanMenteri' => $request->arahanMenteri,
        ]);
        return redirect('persidangan');

        // $check = DB::table('catatan')->where('id', $id)->first();
        // if ($check) {
        //     DB::table('catatan')->update([
        //         'isu' => $request->isu,
        //         'renaksi' => $request->renaksi,
        //         'turunan_renaksi' => $request->turunan_renaksi,
        //         'tgl_pelaksanaan' => $request->tgl_pelaksanaan,
        //         'kegiatan' => $request->kegiatan,
        //         'arahanMenteri' => $request->arahanMenteri,
        //         ]);

        //     return redirect('persidangan');

        // } else {
        //     DB::table('catatan')->insert([
        //         'id'=>$id,
        //         'isu' => $request->isu,
        //         'renaksi' => $request->renaksi,
        //         'turunan_renaksi' => $request->turunan_renaksi,
        //         'tgl_pelaksanaan' => $request->tgl_pelaksanaan,
        //         'kegiatan' => $request->kegiatan,
        //         'arahanMenteri' => $request->arahanMenteri,
        //         ]);

        //     return redirect('persidangan');
            
        // }
    }


    public function show(Request $request)
    {

        $catatan = DB::table('catatan')->orderBy('id')->get();
        return view('persidangan/draft-risalah', ['catatan' => $catatan]);

    }

    public function search(Request $request)
    {
        //menangkap pencarian data
        if($request -> has('search')){
            $rakor = \App\Models\Rakor::where('topik', 'LIKE', '%' .$request->search. '%')->get();
        } else {
            $rakor = \App\Models\Rakor::all();
        }

        //mengirim data ke view
        return view('persidangan.daftar-persidangan', ['rakor'=>$rakor]);

    }
}