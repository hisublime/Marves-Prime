<?php

namespace App\Http\Controllers;
use Auth;
use Validator;
use Hash;
use Session;
use DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Aktivitas;

class AuthController extends Controller
{
    public function login()
    {     
        return view('auths.login');
    }
    public function postlogin(Request $request)
    { 
        if(Auth::attempt($request->only('email', 'password'))){
            $user = DB::table('users')->where('email', $request->email)->first();
            session(['authenticated' => true]);
            session(['id' => $user->id]);
            session(['name' => $user->name]);
            session(['email' => $user->email]);
            if ($user->role == "administration") {
                session(['user_role' => "administration"]);
                return redirect('/dashboard/admin');
            }else if ($user->role == "eseloni") {
                session(['user_role' => "eseloni"]);
                return redirect('/dashboard');
            }else if ($user->role == "persidangan") {
                session(['user_role' => "persidangan"]);
                return redirect('/persidangan');
            }else if ($user->role == "menkomarves") {
                session(['user_role' => "menkomarves"]);
                return redirect('/menko/home');
            }else if ($user->role == "Deputi 1") {
                session(['user_role' => "Deputi 1"]);
                return redirect('/dashboard');
            }else if ($user->role == "pemimpin") {
                session(['user_role' => "pemimpin"]);
                return redirect('/program-kerja');
            }else {
                return redirect('/');
            }
            Aktivitas::create([
                'username'=> auth()->user()->name,
                'aktivitas' => 'Login Marves',
            ]);   
        }
        return redirect('/');    
    }

    // public function postlogin(Request $request)
    // { 
    //     if(Auth::attempt($request->only('email', 'password'))){ 
    //         $user = DB::table('users') -> where ('email', $request -> email) -> first();
    //         $notifikasi = DB::table('notifikasi') -> where ('receiver_id',$user->id)->get();
    //         session(['authenticated' => true]);
    //         session(['id' => $user->id]);
    //         session(['name' => $user->name]);
    //         session(['email' => $user->email]);
    //         if ($user->role == "owner") {
    //             session(['user_role' => "owner"]);
    //             return redirect('/dashboard');
    //         }else if ($user->role == "admin") {
    //             session(['user_role' => "admin"]);
    //             return redirect('/dashboard');
    //         }else if ($user->role == "pelukis") {
    //             session(['user_role' => "pelukis"]);
    //             return redirect('/dashboard');
    //         }else {
    //             return redirect('login');
    //         }
    //         // dd($notifikasi);
    //         return view('dashboard.index', compact('notifikasi'));
    //     }
    //     return redirect('/login');
    // }

    public function logout()
    {
     
        Aktivitas::create([
            'username'=> auth()->user()->name,
            'aktivitas' => 'Logout Marves',
        ]);   
        Auth::logout();
        return redirect('/');
    }
    public function showFormRegister()
    {
        return view('auths.register');
    }
 
    public function register(Request $request)
    {
        $rules = [
            'name'                  => 'required|min:3|max:35',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|confirmed'
        ];
 
        $messages = [
            'name.required'         => 'Nama Lengkap wajib diisi',
            'name.min'              => 'Nama lengkap minimal 3 karakter',
            'name.max'              => 'Nama lengkap maksimal 35 karakter',
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'email.unique'          => 'Email sudah terdaftar',
            'password.required'     => 'Password wajib diisi',
            'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
           }  
               
        //Insert ke table users
        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->role = $request->role;
        $user->asdep = $request->asdep;
        $user->status = 'Active';
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();

        
        $pengguna = new \App\Models\Pengguna;
        $request->request->add(['user_id' => $user->id]);
        $pengguna->nama_user = $request->name;
        $pengguna->jabatan = $request->role;
        $user->asdep = $request->asdep;
        $pengguna->id_pegawai = '123456723';
        $pengguna->username = $request->name;
        $pengguna->status = 'Aktif';
        $pengguna->avatar = 'Prime_Logo.png';
        $pengguna->save();
        
       
        return redirect('/');
    }

}
