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

    public function test4(){
        $praxy = DB::table('Prax')->get();

        foreach ($praxy as $prax) {
            //echo $prax->pozicia;

        }

    }
}
