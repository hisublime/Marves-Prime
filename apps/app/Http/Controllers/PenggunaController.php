<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\Aktivitas;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_pengguna = \App\Models\Pengguna::where('nama_user','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_pengguna = \App\Models\Pengguna::all();
        }
        return view('pengguna.index',['data_pengguna' => $data_pengguna]);
        
    }
    public function create(Request $request)
    {   
        $this->validate($request,[
            'nama_user' => 'required|min:5|max:35',
            'avatar' => 'mimes:jpg,png'
        ]);

        $user = new \App\Models\User;
        $user->name = $request->nama_user;
        $user->email = $request->nama_user.'@gmail.com';
        $user->role = $request->jabatan;
        $user->asdep = $request->asdep;
        $user->status = 'Active';
        $user->password = Hash::make($request->nama_user);
        $user->save();

        \App\Models\Pengguna::create($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $pengguna->avatar = $request->file('avatar')->getClientOriginalName();
            $pengguna->save();
        }
        Aktivitas::create([
            'username'=> auth()->user()->name,
            'aktivitas' => 'Menambah Data Pengguna',
        ]);   
        return redirect('/pengguna')->with('sukses','Data berhasil diinput');
    
    }


    public function edit($id)
    {
        
        $pengguna = \App\Models\Pengguna::find($id);
        return view('pengguna/edit', ['pengguna' =>$pengguna]);
    }

    public function update(Request $request,$id)
    {
        $pengguna = \App\Models\Pengguna::find($id);
        $pengguna->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $pengguna->avatar = $request->file('avatar')->getClientOriginalName();
            $pengguna->save();
        }
        Aktivitas::create([
            'username'=> auth()->user()->name,
            'aktivitas' => 'Mengubah Data Pengguna',
        ]);   
        
        return redirect('/pengguna')->with('sukses','Data berhasil diupdate');


    }
    public function delete($id)
    {
        $pengguna = \App\Models\Pengguna::find($id);
        $pengguna->delete();
        
        Aktivitas::create([
            'username'=> auth()->user()->name,
            'aktivitas' => 'Menghapus Data Pengguna',
        ]);    
        return redirect('/pengguna')->with('sukses','Data berhasil dihapus');
       
    }
    public function profile($id)
    {
        $pengguna = \App\Models\Pengguna::find($id);
        return view('pengguna.profile', ['pengguna' =>$pengguna]);
    }
}
