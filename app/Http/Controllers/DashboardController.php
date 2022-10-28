<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
use App\Models\Cases;
use Carbon\Carbon;
class DashboardController extends Controller
{
    public function index(){
        $jml_siswa = Siswa::all()->count();
        $jml_cases = Cases::all()->count();
        return view('/admin/features/dashboard',[
            'title' => 'Dashboard'
        ])->with('jml_siswa', $jml_siswa)->with('jml_cases', $jml_cases);
    }

    public function profile(){
        return view('/admin/features.profile',[
            'title' => 'Profile'
        ]);
    }

    public function chartJS(){
        $year = ['2015','2016','2017','2018','2019','2020'];

        $user = [];
        foreach ($year as $key => $value) {
            $user[] = Siswa::where(Siswa::raw("DATE_FORMAT(created_at, '%Y')"),$value)->count();
        }

        return view('/admin/features.profile')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));
    
    }

}