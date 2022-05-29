<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ProgramKerja;

class ProgramIsuController extends Controller
{

    public function index() 
    {
        return view('/eselon1/tambah-isu');
    }

    public function create(Request $request)
    { 

        $input = implode(", ", $_POST["kategori"]);
        ProgramKerja::create([
            'nama' => $request->nama,
            'substansi' => $request->substansi,
            'pic' => $request->pic,
            'kolaborator' => $request->kolaborator,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir,
            'kategori' => $input,
        ]);

        return redirect('/showArahanMenteri');
    }

    public function indexdetail($id)
    {   
        $program = ProgramKerja::where('id_proker','like', $id)->get();
        return view('/eselon1/detail-program-isu',['program'=>$program]);
    }

    public function edit($id)
    {
        $program = ProgramKerja::where('id_proker','like', $id)->get();
        return view('/eselon1.edit-isu', compact('program'));
    }
    
    public function update(Request $request)
    {

        $input = implode(", ", $_POST["kategori"]);
        ProgramKerja::where('id_proker',$request->id)->update([
            'id_proker' => $request->id_proker,
            'nama_proker' => $request->nama_proker,
            'substansi' => $request->substansi,
            'pic_proker' => $request->pic_proker,
            'kolaborator' => $request->kolaborator,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir,
            'kategori' => $input,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
            'tindak_lanjut' => $request->tindak_lanjut,
        ]);
        return redirect('/detail-program-isu/'.$request->id_proker);
    }
}

