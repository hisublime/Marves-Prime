<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\ProgramKerja;
use Illuminate\Support\Facades\DB;

class DashSekretariatController extends Controller
{
    public function index(Request $request)
    {
        // $dashboard = \App\Models\Dashboard::getTable('dashboard');
        $asdep = ProgramKerja::select('eselon2')->whereIn('eselon1', ['Sekretariat'])->groupBy('eselon2')->get();


        //ambil proker berdasarkan status Active pada Sekretaris Kemenko
        $inspekAct = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Inspektorat')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birkomAct = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Komunikasi')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birumAct = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Umum')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birperAct = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Perencanaan')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birhukAct = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Hukum')
                        ->where('status', 'Active')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Done pada Sekretariat
        $inspekDone = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Inspektorat')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birkomDone = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Komunikasi')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birumDone = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Umum')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birperDone = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Perencanaan')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birhukDone = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Hukum')
                        ->where('status', 'Done')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');


        //ambil proker berdasarkan status Pending pada Sekretariat
        $inspekPend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Inspektorat')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birkomPend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Komunikasi')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birumPend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Umum')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birperPend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Perencanaan')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birhukPend = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Hukum')
                        ->where('status', 'Pending')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Suspended pada Sekretariat
        $inspekSus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Inspektorat')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birkomSus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Komunikasi')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birumSus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Umum')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birperSus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Perencanaan')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birhukSus = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Hukum')
                        ->where('status', 'Suspended')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //ambil proker berdasarkan status Overdue pada Sekretariat
        $inspekOver = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Inspektorat')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birkomOver = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Komunikasi')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birumOver = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Umum')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birperOver = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Perencanaan')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        $birhukOver = ProgramKerja::select(\DB::raw('count(*) as status_total'))
                        ->where('eselon1', 'Sekretariat')
                        ->where('eselon2', 'Biro Hukum')
                        ->where('status', 'Overdue')
                        ->groupBy(\DB::raw('status'))
                        ->pluck('status_total');

        //Total Program
        $SekretariatTotal = DB::table('program_kerja')
                        ->where('eselon1', 'Sekretariat')
                        ->count();

        //Total Active
        $SekretariatAct = DB::table('program_kerja')
                        ->where('eselon1', 'Sekretariat')
                        ->where('status', 'Active')
                        ->count();
        
        //Total Done
        $SekretariatDone = DB::table('program_kerja')
                        ->where('eselon1', 'Sekretariat')
                        ->where('status', 'Done')
                        ->count();
        
        //Total Pending
        $SekretariatPend = DB::table('program_kerja')
                        ->where('eselon1', 'Sekretariat')
                        ->where('status', 'Pending')
                        ->count();

        //Total Suspended
        $SekretariatSus = DB::table('program_kerja')
                        ->where('eselon1', 'Sekretariat')
                        ->where('status', 'Suspended')
                        ->count();

        //Total Overdue
        $SekretariatOver = DB::table('program_kerja')
                        ->where('eselon1', 'Sekretariat')
                        ->where('status', 'Overdue')
                        ->count();

        // dd($DeputiAct1);

        //Menyiapkan data untuk chart
        $categories = [];

        foreach($asdep as $asd){
            $categories[] = $asd->eselon2;
        }

        // dd(json_encode($categories));

        return view('menko.sekretariat', ['categories' => $categories], compact('inspekAct', 'birkomAct', 'birumAct', 'birperAct', 'birhukAct', 'inspekDone', 'birkomDone', 'birumDone', 'birperDone', 'birhukDone',
        'inspekPend', 'birkomPend', 'birumPend', 'birperPend', 'birhukPend', 'inspekSus', 'birkomSus', 'birumSus', 'birperSus', 'birhukSus', 'inspekOver', 'birkomOver', 'birumOver', 'birperOver', 'birhukOver',
        'SekretariatTotal', 'SekretariatAct', 'SekretariatDone', 'SekretariatPend', 'SekretariatSus', 'SekretariatOver'));
    }
}
