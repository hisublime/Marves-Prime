<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramKerja;
use Illuminate\Support\Facades\DB;

class DashAdminController extends Controller
{
    public function index(Request $request)
    {
        $asdep = ProgramKerja::select('eselon2')->whereIn('eselon1', ['Deputi 1'])->groupBy('eselon2')->get();

        //Deputi 1

        //ambil proker berdasarkan status Active pada deputi 1
        $asdep1Act1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Act1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Act1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Act1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Act1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');
        
        $SekdepAct1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Done pada deputi 1
        $asdep1Done1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Done1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Done1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Done1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Done1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');


        $SekdepDone1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');


        //ambil proker berdasarkan status Pending pada deputi 1
        $asdep1Pend1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Pend1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Pend1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Pend1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Pend1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $SekdepPend1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Suspended pada deputi 1
        $asdep1Sus1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Sus1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Sus1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Sus1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Sus1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $SekdepSus1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Overdue pada deputi 1
        $asdep1Over1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Over1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Over1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Over1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Over1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $SekdepOver1 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 1')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');
        
        //Deputi 2

        //ambil proker berdasarkan status Active pada Deputi 2
        $asdep1Act2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 2')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Act2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 2')
        ->where('status', 'Active')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep3Act2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 3')
        ->where('status', 'Active')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep4Act2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 4')
        ->where('status', 'Active')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep5Act2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 5')
        ->where('status', 'Active')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $SekdepAct2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Sekdep')
        ->where('status', 'Active')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        //ambil proker berdasarkan status Done pada Deputi 2
        $asdep1Done2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 1')
        ->where('status', 'Done')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep2Done2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 2')
        ->where('status', 'Done')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep3Done2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 3')
        ->where('status', 'Done')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep4Done2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 4')
        ->where('status', 'Done')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep5Done2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 5')
        ->where('status', 'Done')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');


        $SekdepDone2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Sekdep')
        ->where('status', 'Done')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');


        //ambil proker berdasarkan status Pending pada Deputi 2
        $asdep1Pend2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 1')
        ->where('status', 'Pending')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep2Pend2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 2')
        ->where('status', 'Pending')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep3Pend2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 3')
        ->where('status', 'Pending')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep4Pend2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 4')
        ->where('status', 'Pending')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep5Pend2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 5')
        ->where('status', 'Pending')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $SekdepPend2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Sekdep')
        ->where('status', 'Pending')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        //ambil proker berdasarkan status Suspended pada Deputi 2
        $asdep1Sus2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 1')
        ->where('status', 'Suspended')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep2Sus2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 2')
        ->where('status', 'Suspended')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep3Sus2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 3')
        ->where('status', 'Suspended')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep4Sus2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 4')
        ->where('status', 'Suspended')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep5Sus2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 5')
        ->where('status', 'Suspended')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $SekdepSus2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Sekdep')
        ->where('status', 'Suspended')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        //ambil proker berdasarkan status Overdue pada Deputi 2
        $asdep1Over2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 1')
        ->where('status', 'Overdue')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep2Over2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 2')
        ->where('status', 'Overdue')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep3Over2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 3')
        ->where('status', 'Overdue')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep4Over2= ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 4')
        ->where('status', 'Overdue')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $asdep5Over2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Asdep 5')
        ->where('status', 'Overdue')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        $SekdepOver2 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
        ->where('eselon1', 'Deputi 2')
        ->where('eselon2', 'Sekdep')
        ->where('status', 'Overdue')
        ->groupBy(\DB::raw('status'))
        ->pluck('status_total');

        //Deputi 3
    
    //ambil proker berdasarkan status Active pada Deputi 3
        $asdep1Act3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 1')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep2Act3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 2')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep3Act3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 3')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep4Act3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 4')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep5Act3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 5')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $SekdepAct3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Sekdep')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        //ambil proker berdasarkan status Done pada Deputi 3
        $asdep1Done3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 1')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep2Done3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 2')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep3Done3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 3')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep4Done3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 4')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep5Done3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 5')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');


        $SekdepDone3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Sekdep')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');


        //ambil proker berdasarkan status Pending pada Deputi 3
        $asdep1Pend3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 1')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep2Pend3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 2')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep3Pend3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 3')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep4Pend3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 4')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep5Pend3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 5')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $SekdepPend3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Sekdep')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        //ambil proker berdasarkan status Suspended pada Deputi 3
        $asdep1Sus3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 1')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep2Sus3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 2')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep3Sus3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 3')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep4Sus3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 4')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep5Sus3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 5')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $SekdepSus3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Sekdep')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        //ambil proker berdasarkan status Overdue pada Deputi 3
        $asdep1Over3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 1')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep2Over3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 2')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep3Over3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 3')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep4Over3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 4')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep5Over3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Asdep 5')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $SekdepOver3 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 3')
            ->where('eselon2', 'Sekdep')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');
        
        //Deputi 4

        //ambil proker berdasarkan status Active pada Deputi 4
        $asdep1Act4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 1')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep2Act4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 2')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep3Act4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 3')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep4Act4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 4')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep5Act4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 5')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $SekdepAct4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Sekdep')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        //ambil proker berdasarkan status Done pada Deputi 4
        $asdep1Done4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 1')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep2Done4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 2')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep3Done4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 3')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep4Done4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 4')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep5Done4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 5')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');


        $SekdepDone4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Sekdep')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');


        //ambil proker berdasarkan status Pending pada Deputi 4
        $asdep1Pend4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 1')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep2Pend4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 2')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep3Pend4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 3')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep4Pend4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 4')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep5Pend4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 5')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $SekdepPend4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Sekdep')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        //ambil proker berdasarkan status Suspended pada Deputi 4
        $asdep1Sus4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 1')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep2Sus4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 2')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep3Sus4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 3')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep4Sus4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 4')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep5Sus4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 5')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $SekdepSus4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Sekdep')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        //ambil proker berdasarkan status Overdue pada Deputi 4
        $asdep1Over4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 1')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep2Over4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 2')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep3Over4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 3')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep4Over4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 4')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep5Over4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Asdep 5')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $SekdepOver4 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 4')
            ->where('eselon2', 'Sekdep')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');
        
        //Deputi 5

     //ambil proker berdasarkan status Active pada Deputi 5
         $asdep1Act5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 1')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep2Act5= ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 2')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep3Act5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 3')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep4Act5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 4')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep5Act5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 5')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $SekdepAct5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Sekdep')
            ->where('status', 'Active')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        //ambil proker berdasarkan status Done pada Deputi 5
        $asdep1Done5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 1')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep2Done5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 2')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep3Done5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 3')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep4Done5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 4')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep5Done5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 5')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');


        $SekdepDone5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Sekdep')
            ->where('status', 'Done')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');


        //ambil proker berdasarkan status Pending pada Deputi 5
        $asdep1Pend5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 1')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep2Pend5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 2')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep3Pend5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 3')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep4Pend5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 4')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep5Pend5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 5')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $SekdepPend5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Sekdep')
            ->where('status', 'Pending')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        //ambil proker berdasarkan status Suspended pada Deputi 5
        $asdep1Sus5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 1')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep2Sus5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 2')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep3Sus5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 3')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep4Sus5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 4')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep5Sus5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 5')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $SekdepSus5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Sekdep')
            ->where('status', 'Suspended')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        //ambil proker berdasarkan status Overdue pada Deputi 5
        $asdep1Over5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 1')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep2Over5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 2')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep3Over5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 3')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep4Over5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 4')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $asdep5Over5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Asdep 5')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        $SekdepOver5 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
            ->where('eselon1', 'Deputi 5')
            ->where('eselon2', 'Sekdep')
            ->where('status', 'Overdue')
            ->groupBy(\DB::raw('status'))
            ->pluck('status_total');

        //Deputi 6

        //ambil proker berdasarkan status Active pada Deputi 6
        $asdep1Act6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Act6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Act6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Act6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Act6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');
        
        $SekdepAct6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Done pada Deputi 6
        $asdep1Done6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Done6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Done6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Done6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Done6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');


        $SekdepDone6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');


        //ambil proker berdasarkan status Pending pada Deputi 6
        $asdep1Pend6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Pend6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Pend6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Pend6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Pend6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $SekdepPend6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Suspended pada Deputi 6
        $asdep1Sus6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Sus6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Sus6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Sus6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Sus6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $SekdepSus6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Overdue pada Deputi 6
        $asdep1Over6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 1')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep2Over6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 2')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep3Over6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 3')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep4Over6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 4')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $asdep5Over6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Asdep 5')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $SekdepOver6 = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Deputi 6')
                        ->where('eselon2', 'Sekdep')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        
      //Menyiapkan data untuk chart
      $categories = [];

      foreach($asdep as $asd){
          $categories[] = $asd->eselon2;
      }

      // dd(json_encode($categories));  

      return view ('dashboard/admin',['categories' => $categories],
                    compact('asdep1Act1','asdep2Act1','asdep3Act1','asdep4Act1','asdep5Act1','SekdepAct1',
                    'asdep1Done1','asdep2Done1','asdep3Done1', 'asdep4Done1', 'asdep5Done1', 'SekdepDone1', 
                    'asdep1Pend1', 'asdep2Pend1', 'asdep3Pend1', 'asdep4Pend1', 'asdep5Pend1', 'SekdepPend1',
                    'asdep1Sus1', 'asdep2Sus1', 'asdep3Sus1', 'asdep4Sus1', 'asdep5Sus1', 'SekdepSus1',
                    'asdep1Over1', 'asdep2Over1', 'asdep3Over1', 'asdep4Over1', 'asdep5Over1', 'SekdepOver1',

                    'asdep1Act2','asdep2Act2','asdep3Act2','asdep4Act2','asdep5Act2','SekdepAct2',
                    'asdep1Done2','asdep2Done2','asdep3Done2', 'asdep4Done2', 'asdep5Done2', 'SekdepDone2', 
                    'asdep1Pend2', 'asdep2Pend2', 'asdep3Pend2', 'asdep4Pend2', 'asdep5Pend2', 'SekdepPend2',
                    'asdep1Sus2', 'asdep2Sus2', 'asdep3Sus2', 'asdep4Sus2', 'asdep5Sus2', 'SekdepSus2',
                    'asdep1Over2', 'asdep2Over2', 'asdep3Over2', 'asdep4Over2', 'asdep5Over2', 'SekdepOver2',

                    'asdep1Act3','asdep2Act3','asdep3Act3','asdep4Act3','asdep5Act3','SekdepAct3',
                    'asdep1Done3','asdep2Done3','asdep3Done3', 'asdep4Done3', 'asdep5Done3', 'SekdepDone3', 
                    'asdep1Pend3', 'asdep2Pend3', 'asdep3Pend3', 'asdep4Pend3', 'asdep5Pend3', 'SekdepPend3',
                    'asdep1Sus3', 'asdep2Sus3', 'asdep3Sus3', 'asdep4Sus3', 'asdep5Sus3', 'SekdepSus3',
                    'asdep1Over3', 'asdep2Over3', 'asdep3Over3', 'asdep4Over3', 'asdep5Over3', 'SekdepOver3',

                    'asdep1Act4','asdep2Act4','asdep3Act4','asdep4Act4','asdep5Act4','SekdepAct4',
                    'asdep1Done4','asdep2Done4','asdep3Done4', 'asdep4Done4', 'asdep5Done4', 'SekdepDone4', 
                    'asdep1Pend4', 'asdep2Pend4', 'asdep3Pend4', 'asdep4Pend4', 'asdep5Pend4', 'SekdepPend4',
                    'asdep1Sus4', 'asdep2Sus4', 'asdep3Sus4', 'asdep4Sus4', 'asdep5Sus4', 'SekdepSus4',
                    'asdep1Over4', 'asdep2Over4', 'asdep3Over4', 'asdep4Over4', 'asdep5Over4', 'SekdepOver4',

                    'asdep1Act5','asdep2Act5','asdep3Act5','asdep4Act5','asdep5Act5','SekdepAct5',
                    'asdep1Done5','asdep2Done5','asdep3Done5', 'asdep4Done5', 'asdep5Done5', 'SekdepDone5', 
                    'asdep1Pend5', 'asdep2Pend5', 'asdep3Pend5', 'asdep4Pend5', 'asdep5Pend5', 'SekdepPend5',
                    'asdep1Sus5', 'asdep2Sus5', 'asdep3Sus5', 'asdep4Sus5', 'asdep5Sus5', 'SekdepSus5',
                    'asdep1Over5', 'asdep2Over5', 'asdep3Over5', 'asdep4Over5', 'asdep5Over5', 'SekdepOver5',

                    'asdep1Act6','asdep2Act6','asdep3Act6','asdep4Act6','asdep5Act6','SekdepAct6',
                    'asdep1Done6','asdep2Done6','asdep3Done6', 'asdep4Done6', 'asdep5Done6', 'SekdepDone6', 
                    'asdep1Pend6', 'asdep2Pend6', 'asdep3Pend6', 'asdep4Pend6', 'asdep5Pend6', 'SekdepPend6',
                    'asdep1Sus6', 'asdep2Sus6', 'asdep3Sus6', 'asdep4Sus6', 'asdep5Sus6', 'SekdepSus6',
                    'asdep1Over6', 'asdep2Over6', 'asdep3Over6', 'asdep4Over6', 'asdep5Over6', 'SekdepOver6',

    ));
    
    }

}
