<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\ProgramKerja;
use Illuminate\Support\Facades\DB;

class DashInspektoratController extends Controller
{
    public function index(Request $request)
    {
        //ambil proker berdasarkan status Active pada Inspektorat
        $inspekAct = DB::table('program_kerja')
                        ->where('eselon2', 'Inspektorat')
                        ->where('status', 'Active')
                        ->count();
        
        //ambil proker berdasarkan status Done pada Inspektorat
        $inspekDone = DB::table('program_kerja')
                        ->where('eselon2', 'Inspektorat')
                        ->where('status', 'Done')
                        ->count();

        //ambil proker berdasarkan status Pending pada Inspektorat
        $inspekPend = DB::table('program_kerja')
                        ->where('eselon2', 'Inspektorat')
                        ->where('status', 'Pending')
                        ->count();

        //ambil proker berdasarkan status Suspended pada Inspektorat
        $inspekSus = DB::table('program_kerja')
                        ->where('eselon2', 'Inspektorat')
                        ->where('status', 'Suspended')
                        ->count();

        //ambil proker berdasarkan status Overdue pada Inspektorat
        $inspekOver = DB::table('program_kerja')
                        ->where('eselon2', 'Inspektorat')
                        ->where('status', 'Overdue')
                        ->count();

        //Total Program
        $InspektoratTotal = DB::table('program_kerja')
                        ->where('eselon2', 'Inspektorat')
                        ->count();
        
        // dd($DeputiAct1);

        return view('menko.inspektorat', compact('inspekAct', 'inspekDone', 'inspekPend', 'inspekSus', 'inspekOver', 'InspektoratTotal'));
    }
}
