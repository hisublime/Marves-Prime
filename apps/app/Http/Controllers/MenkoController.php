<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\ProgramKerja;
use Illuminate\Support\Facades\DB;

class MenkoController extends Controller
{
    public function index(Request $request)
    {
        // $dashboard = \App\Models\Dashboard::getTable('dashboard');
        $deputi = ProgramKerja::select('eselon1')->groupBy('eselon1')->get();

        //ambil proker berdasarkan status Active pada Masing-masing Deputi
        $deputi1Act = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi2Act = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 2')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi3Act = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 3')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi4Act = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 4')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');                 

        $deputi5Act = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi6Act = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $sekreAct = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Done pada Masing-masing Deputi
        $deputi1Done = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi2Done = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 2')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi3Done = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 3')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi4Done = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 4')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');                 

        $deputi5Done = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi6Done = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');
        
        $sekreDone = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');                

        //ambil proker berdasarkan status Pending pada Masing-masing Deputi
        $deputi1Pend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi2Pend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 2')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi3Pend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 3')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi4Pend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 4')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');                 

        $deputi5Pend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi6Pend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $sekrePend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Suspended pada Masing-masing Deputi
        $deputi1Sus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi2Sus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 2')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi3Sus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 3')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi4Sus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 4')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');                 

        $deputi5Sus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi6Sus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');
        
        $sekreSus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Overdue pada Masing-masing Deputi
        $deputi1Over = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi2Over = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 2')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi3Over = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 3')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi4Over = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 4')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');                 

        $deputi5Over = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $deputi6Over = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $sekreOver = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');
        
        //Total Program
        $DeputiTotal = DB::table('program_kerja')
                        ->count();

        //Total Active
        $DeputiAct = DB::table('program_kerja')
                        ->where('status', 'Active')
                        ->count();
        
        //Total Done
        $DeputiDone = DB::table('program_kerja')
                        ->where('status', 'Done')
                        ->count();
        
        //Total Pending
        $DeputiPend = DB::table('program_kerja')
                        ->where('status', 'Pending')
                        ->count();

        //Total Suspended
        $DeputiSus = DB::table('program_kerja')
                        ->where('status', 'Suspended')
                        ->count();

        //Total Overdue
        $DeputiOver = DB::table('program_kerja')
                        ->where('status', 'Overdue')
                        ->count();

        // dd($DeputiAct);

        //Menyiapkan data untuk chart
        $categories = [];

        foreach($deputi as $asd){
            $categories[] = $asd->eselon1;
        }

        // dd(json_encode($categories));

        return view('menko/index', ['categories' => $categories], compact('deputi1Act', 'deputi2Act', 'deputi3Act', 'deputi4Act', 'deputi5Act', 'deputi6Act', 'sekreAct', 'deputi1Done', 'deputi2Done', 'deputi3Done', 'deputi4Done', 'deputi5Done', 'deputi6Done', 'sekreDone',
        'deputi1Pend', 'deputi2Pend', 'deputi3Pend', 'deputi4Pend', 'deputi5Pend', 'deputi6Pend', 'sekrePend', 'deputi1Sus', 'deputi2Sus', 'deputi3Sus', 'deputi4Sus', 'deputi5Sus', 'deputi6Sus', 'sekreSus', 'deputi1Over', 'deputi2Over', 'deputi3Over', 'deputi4Over', 'deputi5Over', 'deputi6Over', 'sekreOver',
        'DeputiTotal', 'DeputiAct', 'DeputiDone', 'DeputiPend', 'DeputiSus', 'DeputiOver'));
    }

    public function programisu(Request $request) 
    {
        $data_program = DB::table('program_kerja')->where('eselon1', 'Deputi 1')->get();
        //$data_program = \App\Models\Program::all();
        $sekretariatTotal = DB::table('program_kerja')
                            ->where('eselon1', 'Sekretariat')
                            ->count();
        
        $inspektoratTotal = DB::table('program_kerja')
                            ->where('eselon2', 'Inspektorat')
                            ->count();

        $Deputi1Total = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 1')
                        ->count();

        $Deputi2Total = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 2')
                        ->count();

        $Deputi3Total = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 3')
                        ->count();

        $Deputi4Total = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 4')
                        ->count();

        $Deputi5Total = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 5')
                        ->count();

        $Deputi6Total = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 6')
                        ->count();

        $Deputi1Act = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 1')
                        ->where('status', 'Active')
                        ->count();

        $Deputi2Act = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 2')
                        ->where('status', 'Active')
                        ->count();

        $Deputi3Act = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 3')
                        ->where('status', 'Active')
                        ->count();

        $Deputi4Act = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 4')
                        ->where('status', 'Active')
                        ->count();

        $Deputi5Act = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Active')
                        ->count();

        $Deputi6Act = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 6')
                        ->where('status', 'Active')
                        ->count();
        
        $SekretariatAct = DB::table('program_kerja')
                            ->where('eselon1', 'Sekretariat')
                            ->where('status', 'Active')
                            ->count();

        $InspektoratAct = DB::table('program_kerja')
                            ->where('eselon2', 'Inspektorat')
                            ->where('status', 'Active')
                            ->count();

        $sekretariatDone = ProgramKerja::select(\DB::raw('count(*)'))
                        ->where('eselon1', 'sekretariat')
                        ->where('status', 'Done')
                        ->count();

        $inspektoratDone = ProgramKerja::select(\DB::raw('count(*)'))
                        ->where('eselon2', 'inspektorat')
                        ->where('status', 'Done')
                        ->count();
             
        $deputi1Done = ProgramKerja::select(\DB::raw('count(*)'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('status', 'Done')
                        ->count();

        $deputi2Done = ProgramKerja::select(\DB::raw('count(*)'))
                        ->where('eselon1', 'Deputi 2')
                        ->where('status', 'Done')
                        ->count();

        $deputi3Done = ProgramKerja::select(\DB::raw('count(*)'))
                        ->where('eselon1', 'Deputi 3')
                        ->where('status', 'Done')
                        ->count();

        $deputi4Done = ProgramKerja::select(\DB::raw('count(*)'))
                        ->where('eselon1', 'Deputi 4')
                        ->where('status', 'Done')
                        ->count();                

        $deputi5Done = ProgramKerja::select(\DB::raw('count(*)'))
                        ->where('eselon1', 'Deputi 5')
                        ->where('status', 'Done')
                        ->count();

        $deputi6Done = ProgramKerja::select(\DB::raw('count(*)'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('status', 'Done')
                        ->count();

        //jadi untuk persennya:
        $persen1 = ($sekretariatDone/$sekretariatTotal)*100;
        $persen2 = ($inspektoratDone/$inspektoratTotal)*100;
        $persen3 = ($deputi1Done/$Deputi1Total)*100;
        $persen4 = ($deputi2Done/$Deputi2Total)*100;
        $persen5 = ($deputi3Done/$Deputi3Total)*100;
        $persen6 = ($deputi4Done/$Deputi4Total)*100;
        $persen7 = ($deputi5Done/$Deputi5Total)*100;
        $persen8 = ($deputi6Done/$Deputi6Total)*100;
       
        return view('menko.program-kerja',['data_program' => $data_program, 'persen1' => $persen1, 'persen2' => $persen2, 'persen3' => $persen3, 'persen4' => $persen4, 'persen5' => $persen5, 'persen6' => $persen6, 'persen7' => $persen7, 'persen8' => $persen8,
        'deputi1Done' => $deputi1Done, 'deputi2Done' => $deputi2Done, 'deputi3Done' => $deputi3Done, 'deputi4Done' => $deputi4Done, 'deputi5Done' => $deputi5Done, 'deputi6Done' => $deputi6Done, 'inspektoratDone' => $inspektoratDone, 'sekretariatDone' => $sekretariatDone,
        'Deputi1Total' => $Deputi1Total, 'Deputi2Total' => $Deputi2Total, 'Deputi3Total' => $Deputi3Total, 'Deputi4Total' => $Deputi4Total, 'Deputi5Total' => $Deputi5Total, 'Deputi6Total' => $Deputi6Total, 'inspektoratTotal' => $inspektoratTotal, 'sekretariatTotal' => $sekretariatTotal,
        'Deputi1Act' => $Deputi1Act, 'Deputi2Act' => $Deputi2Act, 'Deputi3Act' => $Deputi3Act, 'Deputi4Act' => $Deputi4Act, 'Deputi5Act' => $Deputi5Act, 'Deputi6Act' => $Deputi6Act, 'SekretariatAct' => $SekretariatAct, 'InspektoratAct' => $InspektoratAct]);
    }
    
    public function deputi1program(){
        $data_program=DB::table('program_kerja')->where('eselon1', 'Deputi 1')->get();
        $deputi1Done = ProgramKerja::select(\DB::raw('count(*)'))
        ->where('eselon1', 'Deputi 1')
        ->where('status', 'Done')
        ->count();

        $Deputi1Total = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 1')
                        ->count();

        $persen = ($deputi1Done/$Deputi1Total)*100;
        return view ('menko.program-isu',['data_program'=>$data_program, 'deputi1Done' => $deputi1Done, 'persen' => $persen, 'Deputi1Total' => $Deputi1Total]);
    }

    public function deputi2program(){
        $data_program=DB::table('program_kerja')->where('eselon1', 'Deputi 2')->get();
        $deputi2Done = ProgramKerja::select(\DB::raw('count(*)'))
        ->where('eselon1', 'Deputi 2')
        ->where('status', 'Done')
        ->count();

        $Deputi2Total = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 2')
                        ->count();

        $persen = ($deputi2Done/$Deputi2Total)*100;
        return view ('menko.program-isu',['data_program'=>$data_program, 'deputi2Done' => $deputi2Done, 'persen' => $persen, 'Deputi2Total' => $Deputi2Total]);
    }

    public function deputi3program(){
        $data_program=DB::table('program_kerja')->where('eselon1', 'Deputi 3')->get();
        $deputi3Done = ProgramKerja::select(\DB::raw('count(*)'))
        ->where('eselon1', 'Deputi 3')
        ->where('status', 'Done')
        ->count();

        $Deputi3Total = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 3')
                        ->count();

        $persen = ($deputi3Done/$Deputi3Total)*100;
        return view ('menko.program-isu',['data_program'=>$data_program, 'deputi3Done' => $deputi3Done, 'persen' => $persen, 'Deputi3Total' => $Deputi3Total]);
    }

    public function deputi4program(){
        $data_program=DB::table('program_kerja')->where('eselon1', 'Deputi 4')->get();
        $deputi4Done = ProgramKerja::select(\DB::raw('count(*)'))
        ->where('eselon1', 'Deputi 4')
        ->where('status', 'Done')
        ->count();

        $Deputi4Total = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 4')
                        ->count();

        $persen = ($deputi4Done/$Deputi4Total)*100;
        return view ('menko.program-isu',['data_program'=>$data_program, 'deputi4Done' => $deputi4Done, 'persen' => $persen, 'Deputi4Total' => $Deputi4Total]);
    }

    public function deputi5program(){
        $data_program=DB::table('program_kerja')->where('eselon1', 'Deputi 5')->get();
        $deputi5Done = ProgramKerja::select(\DB::raw('count(*)'))
        ->where('eselon1', 'Deputi 5')
        ->where('status', 'Done')
        ->count();

        $Deputi5Total = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 5')
                        ->count();

        $persen = ($deputi5Done/$Deputi5Total)*100;
        return view ('menko.program-isu',['data_program'=>$data_program, 'deputi5Done' => $deputi5Done, 'persen' => $persen, 'Deputi5Total' => $Deputi5Total]);
    }

    public function deputi6program(){
        $data_program=DB::table('program_kerja')->where('eselon1', 'Deputi 6')->get();
        $deputi6Done = ProgramKerja::select(\DB::raw('count(*)'))
        ->where('eselon1', 'Deputi 6')
        ->where('status', 'Done')
        ->count();

        $Deputi6Total = DB::table('program_kerja')
                        ->where('eselon1', 'Deputi 6')
                        ->count();

        $persen = ($deputi6Done/$Deputi6Total)*100;
        return view ('menko.program-isu',['data_program'=>$data_program, 'deputi6Done' => $deputi6Done, 'persen' => $persen, 'Deputi6Total' => $Deputi6Total]);
    }

	public function sekretariatprogram(){
        $data_program=DB::table('program_kerja')->where('eselon1', 'sekretariat')->get();
        $sekretariatDone = ProgramKerja::select(\DB::raw('count(*)'))
                        ->where('eselon1', 'sekretariat')
                        ->where('status', 'Done')
                        ->count();

        $sekretariatTotal = DB::table('program_kerja')
                        ->where('eselon1', 'sekretariat')
                        ->count();

        $persen = ($sekretariatDone/$sekretariatTotal)*100;
        return view ('menko.program-isu',['data_program'=>$data_program, 'sekretariatDone' => $sekretariatDone, 'persen' => $persen, 'sekretariatTotal' => $sekretariatTotal]);
    }
}