<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Kegiatan;
use App\Models\Rakor;

class RakorController extends Controller
{
    public function index($id_keg) 
    {
        $kegiatan = Kegiatan::where('id_kegiatan','like', $id_keg)->get();
        return view('eselon1/tambah-rakor', compact('kegiatan'));
    }

    public function create(Request $request){
        Rakor::create([
            'id_kegiatan' => $request->id_kegiatan,
            'topik' => $request->topik,
            'pic' => $request->pic,
            'lokasi' => $request->lokasi,
            'tgl_pelaksanaan' => $request->tgl_pelaksanaan,
            'waktu' => $request->waktu,
            'kegiatan' => $request->kegiatan,
            'catatan' => $request->catatan,
            'status'=> 'Menunggu',
        ]);
        return redirect('/notifikasi-eselon');
    }

    public function upload($id_rakor) 
    {
        $rakor = Rakor::where('id_rakor','like', $id_rakor)->get();
        return view('eselon1/upload-file', compact('rakor'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'filename' => 'required',
                'filename.*' => 'required'
        ]);
  
        if($request->hasfile('filename'))
         {
            $file = $request->file('filename');
            $id_rakor = $request->id_rakor;

            foreach($request->file('filename') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path('files'), $name);  

                File::create([
                    'id_rakor' => $id_rakor,
                    'filename' => $name,
                    'path' => '/files/'.$name
                  ]);
            }
         }
        return back()->with('success', 'File paparan telah berhasil diunggah');
    }

    public function edit($id_rakor) 
    {
        $rakor = Rakor::where('id_rakor','like', $id_rakor)->get();
        $file = File::where('id_rakor','like', $id_rakor)->get();
        return view('eselon1/edit-rakor', compact('rakor','file'));
    }

    public function delete($id)
    {
        File::where('id',$id)->delete();
	    return back();
    }

    public function download($id)
    {
        $file = File::where('id',$id)->get();

        foreach($file as $f)
        {
        $file_name = $f->filename;
	    $file_path = public_path($f->path);
        }               
        return response()->download($file_path, $file_name);
    }

    public function notif() 
    {
        $rakor = Rakor::orderBy('id_rakor')->get();
        return view('eselon1/notif', compact('rakor'));
    }

    public function detail($id_rakor) 
    {
        $rakor = Rakor::where('id_rakor','like', $id_rakor)->get();
        $file = File::where('id_rakor','like', $id_rakor)->get();
        return view('eselon1/detail-rakor', compact('rakor','file'));
    }

}
