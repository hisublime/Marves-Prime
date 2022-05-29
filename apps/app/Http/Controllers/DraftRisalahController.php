<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifikasi;

class DraftRisalahController extends Controller
{
    public function catatan(Request $request){
        if ($request -> has('cari')){
            $notifikasi = \App\Models\Notifikasi::where('nama_notifikasi', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
            $notifikasi = \App\Models\Notifikasi::all();
        }
        return view('notifikasi.draft-risalah', ['notifikasi' => $notifikasi]);
    }

}
