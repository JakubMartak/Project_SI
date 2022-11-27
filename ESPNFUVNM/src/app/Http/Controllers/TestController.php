<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $praxy = DB::table('Prax')->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')->where('Predmety_idPredmety', '=', 1)->get();
        return view('stuPracList', ['praxy'=>$praxy]);
    }

    public function stuPracProgList(){
        $praxy = DB::table('Prax')->select('*', 'Predmety.Nazov as X', 'Studijny_program.Nazov as Y')->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')->join('Predmety', 'Predmety.idPredmety', '=', 'Prax.Predmety_idPredmety')->join('Studijny_program', 'Studijny_program.idStudijny_program', '=', 'Predmety.Studijny_program_idStudijny_program')->orderBy('Y')->orderBy('X')->orderBy('idPrax')->get();
        return view('stuPracProgList', ['praxy'=>$praxy]);
    }

    public function stuCompAdd(){
        $firmy = DB::table('Firma')->join('Mesto', 'Mesto.idMesto', '=', 'Firma.Mesto_idMesto')->orderBy('idFirma')->get();
        return view('stuCompAdd', ['firmy'=>$firmy]);
    }

    public function stuCompSave(Request $req){
        DB::table('Firma')->insert([
            'Názov_firmy' => $req->Nazov_firmy,
            'Skratka' => $req->Skratka,
            'Adresa' => $req->Adresa,
            'Mesto_idMesto' => $req->Nazov,
        ]);
        return redirect('stuCompAdd');
    }

    public function stuCompUpd($id){
        $firma = DB::table('Firma')->join('Mesto', 'Mesto.idMesto', '=', 'Firma.Mesto_idMesto')->where('idFirma', $id)->get();
        return view('stuCompUpd', ['firma'=>$firma]);
    }

    public function stuCompUpd2(Request $req){
        DB::table('Firma')->where('idFirma', $req->idFirma)->update([
            'Názov_firmy' => $req->Nazov_firmy,
            'Skratka' => $req->Skratka,
            'Adresa' => $req->Adresa,
            'Mesto_idMesto' => $req->Nazov,
        ]);
        return redirect('stuCompAdd');
    }

    public function stuCompDel($id){
        DB::table('Firma')->where('idFirma', $id)->delete();
        return redirect('stuCompAdd');
    }

    public function stuPersAdd(){
        $osoby = DB::table('Pouzivatel')->where('Rola_pouzivatela', '3')->orderBy('idPouzivatel')->get();
        return view('stuPersAdd', ['osoby'=>$osoby]);
    }

    public function stuPersSave(Request $req){
        DB::table('Pouzivatel')->insert([
            'Meno' => $req->Meno,
            'Priezvisko' => $req->Priezvisko,
            'Cislo' => $req->Cislo,
            'Mail' => $req->Mail,
            'Rola_pouzivatela' => "3",
        ]);
        return redirect('stuPersAdd');
    }

    public function stuPersUpd($id){
        $osoba = DB::table('Pouzivatel')->where('idPouzivatel', $id)->get();
        return view('stuPersUpd', ['osoba'=>$osoba]);
    }

    public function stuPersUpd2(Request $req){
        DB::table('Pouzivatel')->where('idPouzivatel', $req->idPouzivatel)->update([
            'Meno' => $req->Meno,
            'Priezvisko' => $req->Priezvisko,
            'Cislo' => $req->Cislo,
            'Mail' => $req->Mail,
            'Rola_pouzivatela' => "3",
        ]);
        return redirect('stuPersAdd');
    }

    public function stuPersDel($id){
        DB::table('Firma')->where('idPouzivatel', $id)->delete();
        return redirect('stuPersAdd');
    }

    public function stuContrTypeList(){
        $zmluvy = DB::table('Zmluva')->get();
        return view('stuContrTypeList', ['zmluvy'=>$zmluvy]);
    }

    public function stuContrTypeUpd(){
        return view('stuContrTypeUpd');
    }

    public function stuContrList(){
        $praxy = DB::table('Prax')->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')->where('Student_idPouzivatel', Auth::user()->id )->orderBy('idPrax')->get();
        return view('stuContrList', ['praxy'=>$praxy]);
    }

    public function stuContrAdd(){
        return view('stuContrAdd');
    }

    public function stuContrUpd($id){
        $prax = DB::table('Prax')->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')->where('idPrax', $id)->get();
        return view('stuContrUpd', ['prax'=>$prax]);
    }

    public function stuContrDel($id){
        DB::table('Prax')->where('idPrax', $id)->delete();
        return redirect('stuContrList');
    }

    public function stuContReportList(){
        $praxy = DB::table('Prax')->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')->where('Student_idPouzivatel', Auth::user()->id )->orderBy('idPrax')->get();
        return view('stuContReportList', ['praxy'=>$praxy]);
    }

    public function stuContReportAdd(){
        return view('stuContReportAdd');
    }

    public function stuContReportSave (Request $req){
        DB::table('Prax')->insert([
            'Pozicia' => $req->Pozicia,
            'Student_idPouzivatel' => Auth::user()->id,
            'Datum_start' => $req->Datum_Zaciatku,
            'Datum_end' => $req->Datum_Konca,
            'Firma_idFirma' => $req->Nazov_firmy,
            'Kontaktna_osoba_idPouzivatel' => $req->Kontaktna_Osoba,
            'Aktuálny_stav' => $req->Aktualny_stav,
            'Predmety_idPredmety' => $req->Predmety,
            'Pracovnik_FPVaI_idPouzivatel' => $req->Pracovnik_FPVaI,
            'Zmluva_idZmluva' => $req->Typ_Zmluvy
        ]);
        return redirect('stuContReportList');
    }

    public function stuContReportUpd($id){
        $prax = DB::table('Prax')->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')->where('idPrax', $id)->get();
        return view('stuContReportUpd', ['prax'=>$prax]);
    }

    public function stuContReportUpd2 (Request $req){
        DB::table('Prax')->where('idPrax', $req->idPrax)->update([
            'Pozicia' => $req->Pozicia,
            'Student_idPouzivatel' => Auth::user()->id,
            'Datum_start' => $req->Datum_Zaciatku,
            'Datum_end' => $req->Datum_Konca,
            'Firma_idFirma' => $req->Nazov_firmy,
            'Kontaktna_osoba_idPouzivatel' => $req->Kontaktna_Osoba,
            'Aktuálny_stav' => $req->Aktualny_stav,
            'Predmety_idPredmety' => $req->Predmety,
            'Pracovnik_FPVaI_idPouzivatel' => $req->Pracovnik_FPVaI,
            'Zmluva_idZmluva' => $req->Typ_Zmluvy
        ]);
        return redirect('stuContReportList');
    }

    public function stuContReportDel($id){
        DB::table('Prax')->where('idPrax', $id)->delete();
        return redirect('stuContReportList');
    }

    public function stuPracReportRead(){
        $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Student_idPouzivatel', Auth::user()->id)->where('Dokumenty_idDokumenty', '1')->orderBy('idPrax')->get();
        return view('stuPracReportRead', ['praxy'=>$praxy]);
        //return view('stuPracReportRead');
    }

    public function stuFeedRead(){
        $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Student_idPouzivatel', Auth::user()->id)->where('Dokumenty_idDokumenty', '2')->orderBy('idPrax')->get();
        return view('stuFeedRead', ['praxy'=>$praxy]);
        //return view('stuFeedRead');
    }

    public function stuFeedAdd(){
        return view('stuFeedAdd');
    }

    public function stuFeedSave (Request $req){
        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => $req->Prax,
            'Dokumenty_idDokumenty' => "2",
            'Datum_pridania' => date("Y-m-d"),
            'Nazov' => $req->Spatna_vazba
        ]);
        return redirect('stuFeedRead');
    }

    public function stuFeedUpd($id){
        $prax = DB::table('Prax_has_Dokumenty')->join('Prax', 'Prax.idPrax', '=', 'Prax_has_Dokumenty.Prax_idPrax')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', "2")->get();
        return view('stuFeedUpd', ['prax'=>$prax]);
    }

    public function stuFeedUpd2 (Request $req){
        DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $req->PraxidPrax)->where('Dokumenty_idDokumenty', "2")->update([
            'Datum_pridania' => date("Y-m-d"),
            'Nazov' => $req->Spatna_vazba
        ]);
        return redirect('stuFeedRead');
    }

    public function stuFeedDel($id){
        DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', 2)->delete();
        return redirect('stuFeedRead');
    }

    public function stuPracCertRead(){
        $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Student_idPouzivatel', Auth::user()->id)->where('Dokumenty_idDokumenty', '3')->orderBy('idPrax')->get();
        return view('stuPracCertRead', ['praxy'=>$praxy]);
        //return view('stuPracCertRead');
    }

    /* head of workplace functions */
    public function headCompList(){
        $companies = DB::table('Firma')
            ->join('Mesto', 'Mesto_idMesto', '=', 'idMesto')
            ->get();
        return view('headCompList', ['companies'=>$companies]);
    }

    public function headCompSave(Request $request) {
        //dd(22);
        $nazov = $request->input('nazov_firmy');
        $skratka = $request->input('skratka');
        $adresa = $request->input('adresa');
        $mesto = $request->input('mesto');

        DB::table('Firma')->insert([
            'Názov_firmy' => $nazov,
            'Skratka' => $skratka,
            'Adresa' => $adresa,
            'Mesto_idMesto' => $mesto,
        ]);

        return redirect()->route("headCompList");
    }


    public function headCompAdd(){
        return view('headCompAdd');
    }

    public function headStudList(){
        $students = DB::table('Pouzivatel')
            ->join('prax', 'Firma_idFirma', '=', 'Firma_idFirma')
            ->join('predmety', 'Predmety_idPredmety', '=', 'idPredmety')
            ->get();

        return view('headStudList', ['students'=>$students]);

    }

    public function headPracList(){
        $practise = DB::table('Prax')
            ->join('Pouzivatel', 'Student_idPouzivatel', '=', 'idPouzivatel')
            ->join('Firma', 'Firma_idFirma', '=', 'idFirma')
            ->get();

        return view('headPracList', ['practise'=>$practise]);
    }

    public function headPracFinishList(){
        $practise = DB::table('Prax')
            ->join('Pouzivatel', 'Student_idPouzivatel', '=', 'idPouzivatel')->where('Aktuálny_stav', 'done')
            ->join('Firma', 'Firma_idFirma', '=', 'idFirma')

            ->get();

        return view('headPracFinishList', ['practise'=>$practise]);
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
        $heads = DB::table('Prax')
            ->join('Firma', 'Firma_idFirma', '=', 'Prax.Zmluva_idZmluva')->join('Názov_firmy', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')
            ->where('Student_idPouzivatel', Auth::user()->id )
            ->orderBy('idPrax')->get();

        return view('headRespList', ['practise'=>$practise]);
    }

    public function headRespUpd(){
        return view('headRespUpd');
    }

    public function headRespAdd(){
        return view('headRespAdd');
    }

    public function headRespAddSave(Request $request) {
//        dd(22);
        return view('headRespList');
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
