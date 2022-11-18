<?php

namespace App\Http\Controllers;

class TestController extends Controller
{

    public function home(){
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function profilepage(){
        return view('profilepage');
    }

    public function profileeditpage(){
        return view('profileeditpage');
    }

    public function myinfopage(){
        return view('myinfopage');
    }

    public function infopage(){
        return view('infopage');
    }

    public function listpage(){
        return view('listpage');
    }

    /* student functions */
    public function stuPracList(){
        return view('stuPracList');
    }

    public function stuPracProgList(){
        return view('stuPracProgList');
    }

    public function stuCompAdd(){
        return view('stuCompAdd');
    }

    public function stuCompUpd(){
        return view('stuCompUpd');
    }

    public function stuCompDel(){
        return view('stuCompDel');
    }

    public function stuPersAdd(){
        return view('stuPersAdd');
    }

    public function stuPersUpd(){
        return view('stuPersUpd');
    }

    public function stuPersDel(){
        return view('stuPersDel');
    }

    public function stuContrTypeList(){
        return view('stuContrTypeList');
    }

    public function stuContrTypeUpd(){
        return view('stuContrTypeUpd');
    }

    public function stuContrList(){
        return view('stuContrList');
    }

    public function stuContrAdd(){
        return view('stuContrAdd');
    }

    public function stuContrUpd(){
        return view('stuContrUpd');
    }

    public function stuContrDel(){
        return view('stuContrDel');
    }

    public function stuContReportList(){
        return view('stuContReportList');
    }

    public function stuContReportAdd(){
        return view('stuContReportAdd');
    }

    public function stuContReportUpd(){
        return view('stuContReportUpd');
    }

    public function stuContractRepDel(){
        return view('stuContractRepDel');
    }

    public function stuPracReportRead(){
        return view('stuPracReportRead');
    }

    public function stuFeedRead(){
        return view('stuFeedRead');
    }

    public function stuFeedAdd(){
        return view('stuFeedAdd');
    }

    public function stuFeedUpd(){
        return view('stuFeedUpd');
    }

    public function stuFeedDel(){
        return view('stuFeedDel');
    }

    public function stuPracCertRead(){
        return view('stuPracCertRead');
    }

    /* head of workplace functions */
    public function headCompList(){
        return view('headCompList');
    }

    public function headCompAdd(){
        return view('headCompAdd');
    }

    public function headStudList(){
        return view('headStudList');
    }

    public function headPracList(){
        return view('headPracList');
    }

    public function headPracFinishList(){
        return view('headPracFinishList');
    }

    public function headReportList(){
        return view('headReportList');
    }

    public function headReportAdd(){
        return view('headReportAdd');
    }

    public function headReportUpd(){
        return view('headReportUpd');
    }

    public function headFeedRead(){
        return view('headFeedRead');
    }

    public function headCertList(){
        return view('headCertList');
    }

    public function headRespList(){
        return view('headRespList');
    }

    public function headRespUpd(){
        return view('headRespUpd');
    }

    public function headRespAdd(){
        return view('headRespAdd');
    }

    /* responsible preson functions */
    public function respCompList(){
        return view('respCompList');
    }

    public function respCompAdd(){
        return view('respCompAdd');
    }

    public function respCompUpd(){
        return view('respCompUpd');
    }

    /* admin functions */
    public function admStuLIst(){
        return view('admStuLIst');
    }
    public function admStuEdit(){
        return view('admStuEdit');
    }
    public function admStuAdd(){
        return view('admStuAdd');
    }

    /*public function test4(){
        $praxy = DB::table('Prax')->get();
        foreach ($praxy as $prax) {
            //echo $prax->pozicia;
        }
    }

    public function insertHead(){
        $prac = DB::table('Prax')->insert([
            'Priezvisko' => '$Priezvisko2',
            'Pozicia' => 'Pozicia2'
        ]);
        }
    }*/
}
