<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class TestController3 extends Controller
{
    public function test3(){
        $users = DB::table('users')->get();

        foreach ($users as $user) {
            echo $user->name;
        }

    }
}
