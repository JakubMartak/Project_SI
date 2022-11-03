<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function test(){
        echo 22;
    }

    public function test2(){
        echo 23;
    }

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

    public function createpraxpage(){
        return view('createprax');
    }
}
