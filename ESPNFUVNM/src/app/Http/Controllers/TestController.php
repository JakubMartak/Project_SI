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

    public function respCompDel(){
        return view('respCompDel');
    }

    public function respPracRead(){
        return view('respPracRead');
    }

    public function respPracUpd(){
        return view('respPracUpd');
    }

    public function respFeedList(){
        return view('respFeedList');
    }

    public function respFeedAdd(){
        return view('respFeedAdd');
    }

    public function respFeedUpd(){
        return view('respFeedUpd');
    }

    public function respFeedDel(){
        return view('respFeedDel');
    }

    public function respReportRead(){
        return view('respReportRead');
    }

    public function respReportAdd(){
        return view('respReportAdd');
    }

    public function respReportUpd(){
        return view('respReportUpd');
    }

    public function respReportDel(){
        return view('respReportDel');
    }

    public function respPracArchRead(){
        return view('respPracArchRead');
    }

    public function respStuRatingList(){
        return view('respStuRatingList');
    }

    public function respStuRatingAdd(){
        return view('respStuRatingAdd');
    }

    public function respStuRatingUpd(){
        return view('respStuRatingUpd');
    }

    public function respStuRatingDel(){
        return view('respStuRatingDel');
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
    public function admWpList(){
        return view('admWpList');
    }
    public function admWpAdd(){
        return view('admWpAdd');
    }
    public function admWpUpd(){
        return view('admWpUpd');
    }

    public function admWkList(){
        return view('admWkList');
    }
    public function admWkAdd(){
        return view('admWkAdd');
    }
    public function admWkUpd(){
        return view('admWkUpd');
    }

    public function admCompList(){
        return view('admCompList');
    }
    public function admCompNameUpd(){
        return view('admCompNameUpd');
    }

    public function admRepList(){
        return view('admRepList');
    }
    public function admRepAdd(){
        return view('admRepAdd');
    }
    public function admRepUdp(){
        return view('admRepUdp');
    }

    public function admGraphList(){
        return view('admGraphList');
    }

    /* Zástupca firmy a organizácie */
    public function cmpRegDetail(){
        return view('cmpRegDetail');
    }
    public function cmpAdd(){
        return view('cmpAdd');
    }
    public function cmpStudRead(){
        return view('cmpStudRead');
    }
    public function cmpStuAdd(){
        return view('cmpStuAdd');
    }
    public function cmpStuUpd(){
        return view('cmpStuUpd');
    }
    public function cmpReporList(){
        return view('cmpReporList');
    }
    public function cmpReportUpd(){
        return view('cmpReportUpd');
    }
    public function cmpFeedList(){
        return view('cmpFeedList');
    }
    public function cmpFeedAdd(){
        return view('cmpFeedAdd');
    }
    public function cmpFeedUpd(){
        return view('cmpFeedUpd');
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


/*    public function index($id=0){

        // Fetch all records
        $userData['data'] = Page::getuserData();

        $userData['edit'] = $id;

        // Fetch edit record
        if($id>0){
            $userData['editData'] = Page::getuserData($id);
        }

        // Pass to view
        return view('index')->with("userData",$userData);
    }

    public function save(Request $request){

        if ($request->input('submit') != null ){

            // Update record
            if($request->input('editid') !=null ){
                $name = $request->input('name');
                $email = $request->input('email');
                $editid = $request->input('editid');

                if($name !='' && $email != ''){
                    $data = array('name'=>$name,"email"=>$email);

                    // Update
                    Page::updateData($editid, $data);

                    Session::flash('message','Update successfully.');

                }

            }else{ // Insert record
                $name = $request->input('name');
                $username = $request->input('username');
                $email = $request->input('email');

                if($name !='' && $username !='' && $email != ''){
                    $data = array('name'=>$name,"username"=>$username,"email"=>$email);

                    // Insert
                    $value = Page::insertData($data);
                    if($value){
                        Session::flash('message','Insert successfully.');
                    }else{
                        Session::flash('message','Username already exists.');
                    }

                }
            }

        }
        return redirect()->action('PagesController@index',['id'=>0]);
    }

    public function deleteUser($id=0){

        if($id != 0){
            // Delete
            Page::deleteData($id);

            Session::flash('message','Delete successfully.');

        }
        return redirect()->action('PagesController@index',['id'=>0]);
    }*/
}
