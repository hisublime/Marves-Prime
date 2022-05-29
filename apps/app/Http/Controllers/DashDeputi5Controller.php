<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\ProgramKerja;
use Illuminate\Support\Facades\DB;

class DashDeputi5Controller extends Controller
{
    public function index(Request $request)
    {
        // $dashboard = \App\Models\Dashboard::getTable('dashboard');
        $asdep = ProgramKerja::select('eselon2')->whereIn('eselon1', ['Deputi 5'])->groupBy('eselon2')->get();

        //ambil proker berdasarkan status Active pada Deputi 5
        $asdep1Act = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Act = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Act = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Act = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Act = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');
        
        $SekdepAct = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Done pada Deputi 5
        $asdep1Done = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Done = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Done = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Done = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Done = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');


        $SekdepDone = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');


        //ambil proker berdasarkan status Pending pada Deputi 5
        $asdep1Pend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Pend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Pend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Pend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Pend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $SekdepPend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Suspended pada Deputi 5
        $asdep1Sus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Sus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Sus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Sus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Sus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $SekdepSus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Overdue pada Deputi 5
        $asdep1Over = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Over = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Over = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Over = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Over = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $SekdepOver = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');


        //Total Program
        $Deputi5Total = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 5')
                        ->count();

        //Total Active
        $Deputi5Act = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Active')
                        ->count();
        
        //Total Done
        $Deputi5Done = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Done')
                        ->count();
        
        //Total Pending
        $Deputi5Pend = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Pending')
                        ->count();

        //Total Suspended
        $Deputi5Sus = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Suspended')
                        ->count();

        //Total Overdue
        $Deputi5Over = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Overdue')
                        ->count();

        // dd($DeputiAct1);

        //Menyiapkan data untuk chart
        $categories = [];

        foreach($asdep as $asd){
            $categories[] = $asd->eselon2;
        }

        // dd(json_encode($categories));

        return view('dashboard/deputi5', ['categories' => $categories], compact('asdep1Act', 'asdep2Act', 'asdep3Act', 'asdep4Act', 'asdep5Act', 'SekdepAct', 'asdep1Done', 'asdep2Done', 'asdep3Done', 'asdep4Done', 'asdep5Done', 'SekdepDone',
        'asdep1Pend', 'asdep2Pend', 'asdep3Pend', 'asdep4Pend', 'asdep5Pend', 'SekdepPend', 'asdep1Sus', 'asdep2Sus', 'asdep3Sus', 'asdep4Sus', 'asdep5Sus', 'SekdepSus', 'asdep1Over', 'asdep2Over', 'asdep3Over', 'asdep4Over', 'asdep5Over', 'SekdepOver',
        'Deputi5Total', 'Deputi5Act', 'Deputi5Done', 'Deputi5Pend', 'Deputi5Sus', 'Deputi5Over'));
    }

    public function dep5(Request $request)
    {
        // $dashboard = \App\Models\Dashboard::getTable('dashboard');
        $asdep = ProgramKerja::select('eselon2')->whereIn('eselon1', ['Deputi 5'])->groupBy('eselon2')->get();

        //ambil proker berdasarkan status Active pada Deputi 5
        $asdep1Act = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Act = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Act = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Act = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Act = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');
        
        $SekdepAct = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Done pada Deputi 5
        $asdep1Done = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Done = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Done = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Done = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Done = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');


        $SekdepDone = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');


        //ambil proker berdasarkan status Pending pada Deputi 5
        $asdep1Pend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Pend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Pend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Pend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Pend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $SekdepPend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Suspended pada Deputi 5
        $asdep1Sus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Sus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Sus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Sus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Sus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $SekdepSus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Overdue pada Deputi 5
        $asdep1Over = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Over = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Over = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Over = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Over = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $SekdepOver = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');


        //Total Program
        $Deputi5Total = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 5')
                        ->count();

        //Total Active
        $Deputi5Act = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Active')
                        ->count();
        
        //Total Done
        $Deputi5Done = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Done')
                        ->count();
        
        //Total Pending
        $Deputi5Pend = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Pending')
                        ->count();

        //Total Suspended
        $Deputi5Sus = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Suspended')
                        ->count();

        //Total Overdue
        $Deputi5Over = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Overdue')
                        ->count();

        // dd($DeputiAct1);

        //Menyiapkan data untuk chart
        $categories = [];

        foreach($asdep as $asd){
            $categories[] = $asd->eselon2;
        }

        // dd(json_encode($categories));

        return view('menko/deputi5', ['categories' => $categories], compact('asdep1Act', 'asdep2Act', 'asdep3Act', 'asdep4Act', 'asdep5Act', 'SekdepAct', 'asdep1Done', 'asdep2Done', 'asdep3Done', 'asdep4Done', 'asdep5Done', 'SekdepDone',
        'asdep1Pend', 'asdep2Pend', 'asdep3Pend', 'asdep4Pend', 'asdep5Pend', 'SekdepPend', 'asdep1Sus', 'asdep2Sus', 'asdep3Sus', 'asdep4Sus', 'asdep5Sus', 'SekdepSus', 'asdep1Over', 'asdep2Over', 'asdep3Over', 'asdep4Over', 'asdep5Over', 'SekdepOver',
        'Deputi5Total', 'Deputi5Act', 'Deputi5Done', 'Deputi5Pend', 'Deputi5Sus', 'Deputi5Over'));
    }
}