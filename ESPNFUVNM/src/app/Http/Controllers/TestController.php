<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        if (Session::get("role") == 1) {
            $praxy = DB::table('Prax')->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')->where('Predmety_idPredmety', '=', 1)->get();
            return view('stuPracList', ['praxy'=>$praxy]);
        }
        else die("acces denied");
    }

    public function stuPracProgList(){
        if (Session::get("role") == 1) {
            $praxy = DB::table('Prax')->select('*', 'Predmety.Nazov as X', 'Studijny_program.Nazov as Y')->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')->join('Predmety', 'Predmety.idPredmety', '=', 'Prax.Predmety_idPredmety')->join('Studijny_program', 'Studijny_program.idStudijny_program', '=', 'Predmety.Studijny_program_idStudijny_program')->where('Student_idPouzivatel', null )->orderBy('Y')->orderBy('X')->orderBy('idPrax')->get();
            return view('stuPracProgList', ['praxy'=>$praxy]);
        }
        else die("acces denied");
    }

    public function stuPracProgListUpd($id){
        if (Session::get("role") == 1) {
            DB::table('Prax')->where('idPrax', $id)->update([
                'Student_idPouzivatel' => Auth::user()->id
            ]);
            return redirect('stuPracProgList');
        }
        else die("acces denied");
    }

    public function stuCompAdd(){
        if (Session::get("role") == 1) {
            $firmy = DB::table('Firma')->join('Mesto', 'Mesto.idMesto', '=', 'Firma.Mesto_idMesto')->orderBy('idFirma')->get();
            return view('stuCompAdd', ['firmy'=>$firmy]);
        }
        else die("acces denied");
    }

    public function stuCompSave(Request $req){
        if (Session::get("role") == 1) {
            DB::table('Firma')->insert([
                'Názov_firmy' => $req->Nazov_firmy,
                'Skratka' => $req->Skratka,
                'Adresa' => $req->Adresa,
                'Mesto_idMesto' => $req->Nazov,
            ]);
            return redirect('stuCompAdd');
        }
        else die("acces denied");
    }

    public function stuCompUpd($id){
        if (Session::get("role") == 1) {
            $firma = DB::table('Firma')->join('Mesto', 'Mesto.idMesto', '=', 'Firma.Mesto_idMesto')->where('idFirma', $id)->get();
            return view('stuCompUpd', ['firma'=>$firma]);
        }
        else die("acces denied");
    }

    public function stuCompUpd2(Request $req){
        if (Session::get("role") == 1) {
            DB::table('Firma')->where('idFirma', $req->idFirma)->update([
                'Názov_firmy' => $req->Nazov_firmy,
                'Skratka' => $req->Skratka,
                'Adresa' => $req->Adresa,
                'Mesto_idMesto' => $req->Nazov,
            ]);
            return redirect('stuCompAdd');
        }
        else die("acces denied");
    }

    public function stuCompDel($id){
        if (Session::get("role") == 1) {
            DB::table('Firma')->where('idFirma', $id)->delete();
            return redirect('stuCompAdd');
        }
        else die("acces denied");
    }

    public function stuPersAdd(){
        if (Session::get("role") == 1) {
            $osoby = DB::table('Pouzivatel')->where('Rola_pouzivatela', '3')->orderBy('idPouzivatel')->get();
            return view('stuPersAdd', ['osoby'=>$osoby]);
        }
        else die("acces denied");
    }

    public function stuPersSave(Request $req){
        if (Session::get("role") == 1) {
            DB::table('Pouzivatel')->insert([
                'Meno' => $req->Meno,
                'Priezvisko' => $req->Priezvisko,
                'Cislo' => $req->Cislo,
                'Mail' => $req->Mail,
                'Rola_pouzivatela' => "3",
            ]);
            return redirect('stuPersAdd');
        }
        else die("acces denied");
    }

    public function stuPersUpd($id){
        if (Session::get("role") == 1) {
            $osoba = DB::table('Pouzivatel')->where('idPouzivatel', $id)->get();
            return view('stuPersUpd', ['osoba'=>$osoba]);
        }
        else die("acces denied");
    }

    public function stuPersUpd2(Request $req){
        if (Session::get("role") == 1) {
            DB::table('Pouzivatel')->where('idPouzivatel', $req->idPouzivatel)->update([
                'Meno' => $req->Meno,
                'Priezvisko' => $req->Priezvisko,
                'Cislo' => $req->Cislo,
                'Mail' => $req->Mail,
                'Rola_pouzivatela' => "3",
            ]);
            return redirect('stuPersAdd');
        }
        else die("acces denied");
    }

    public function stuPersDel($id){
        if (Session::get("role") == 1) {
            DB::table('Pouzivatel')->where('idPouzivatel', $id)->delete();
            return redirect('stuPersAdd');
        }
        else die("acces denied");
    }

    public function stuContrTypeList(){
        if (Session::get("role") == 1) {
            $zmluvy = DB::table('Zmluva')->get();
            return view('stuContrTypeList', ['zmluvy'=>$zmluvy]);
        }
        else die("acces denied");
    }

    public function stuContrTypeUpd(){
        if (Session::get("role") == 1) {
            return view('stuContrTypeUpd');
        }
        else die("acces denied");
    }

    public function stuContrList(){
        if (Session::get("role") == 1) {
            $praxy = DB::table('Prax')->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')->where('Student_idPouzivatel', Auth::user()->id )->orderBy('idPrax')->get();
            return view('stuContrList', ['praxy'=>$praxy]);
        }
        else die("acces denied");
    }

    public function stuContrAdd(){
        if (Session::get("role") == 1) {
            return view('stuContrAdd');
        }
        else die("acces denied");
    }

    public function stuContrUpd($id){
        if (Session::get("role") == 1) {
            $prax = DB::table('Prax')->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')->where('idPrax', $id)->get();
            return view('stuContrUpd', ['prax'=>$prax]);
        }
        else die("acces denied");
    }

    public function stuContrDel($id){
        if (Session::get("role") == 1) {
            DB::table('Prax')->where('idPrax', $id)->delete();
            return redirect('stuContrList');
        }
        else die("acces denied");
    }

    public function stuContReportList(){
        if (Session::get("role") == 1) {
            $praxy = DB::table('Prax')->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')->where('Student_idPouzivatel', Auth::user()->id )->orderBy('idPrax')->get();
            return view('stuContReportList', ['praxy'=>$praxy]);
        }
        else die("acces denied");
    }

    public function stuContReportAdd(){
        if (Session::get("role") == 1) {
            return view('stuContReportAdd');
        }
        else die("acces denied");
    }

    public function stuContReportSave (Request $req){
        if (Session::get("role") == 1) {
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
        else die("acces denied");
    }

    public function stuContReportUpd($id){
        if (Session::get("role") == 1) {
            $prax = DB::table('Prax')->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')->where('idPrax', $id)->get();
            return view('stuContReportUpd', ['prax'=>$prax]);
        }
        else die("acces denied");
    }

    public function stuContReportUpd2 (Request $req){
        if (Session::get("role") == 1) {
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
        else die("acces denied");
    }

    public function stuContReportDel($id){
        if (Session::get("role") == 1) {
            DB::table('Prax')->where('idPrax', $id)->delete();
            return redirect('stuContReportList');
        }
        else die("acces denied");
    }

    public function stuPracReportRead(){
        if (Session::get("role") == 1) {
            $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Student_idPouzivatel', Auth::user()->id)->where('Dokumenty_idDokumenty', '1')->orderBy('idPrax')->get();
            return view('stuPracReportRead', ['praxy'=>$praxy]);
        }
        else die("acces denied");
    }

    public function stuFeedRead(){
        if (Session::get("role") == 1) {
            $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Student_idPouzivatel', Auth::user()->id)->where('Dokumenty_idDokumenty', '2')->orderBy('idPrax')->get();
            return view('stuFeedRead', ['praxy'=>$praxy]);
        }
        else die("acces denied");
    }

    public function stuFeedAdd(){
        if (Session::get("role") == 1) {
            return view('stuFeedAdd');
        }
        else die("acces denied");
    }

    public function stuFeedSave (Request $req){
        if (Session::get("role") == 1) {
            DB::table('Prax_has_Dokumenty')->insert([
                'Prax_idPrax' => $req->Prax,
                'Dokumenty_idDokumenty' => "2",
                'Datum_pridania' => date("Y-m-d"),
                'Nazov' => $req->Spatna_vazba
            ]);
            return redirect('stuFeedRead');
        }
        else die("acces denied");
    }

    public function stuFeedUpd($id){
        if (Session::get("role") == 1) {
            $prax = DB::table('Prax_has_Dokumenty')->join('Prax', 'Prax.idPrax', '=', 'Prax_has_Dokumenty.Prax_idPrax')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', "2")->get();
            return view('stuFeedUpd', ['prax'=>$prax]);
        }
        else die("acces denied");
    }

    public function stuFeedUpd2 (Request $req){
        if (Session::get("role") == 1) {
            DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $req->PraxidPrax)->where('Dokumenty_idDokumenty', "2")->update([
                'Datum_pridania' => date("Y-m-d"),
                'Nazov' => $req->Spatna_vazba
            ]);
            return redirect('stuFeedRead');
        }
        else die("acces denied");
    }

    public function stuFeedDel($id){
        if (Session::get("role") == 1) {
            DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', 2)->delete();
            return redirect('stuFeedRead');
        }
        else die("acces denied");
    }

    public function stuPracCertRead(){
        if (Session::get("role") == 1) {
            $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Student_idPouzivatel', Auth::user()->id)->where('Dokumenty_idDokumenty', '3')->orderBy('idPrax')->get();
            return view('stuPracCertRead', ['praxy'=>$praxy]);
        }
        else die("acces denied");
    }

    /* head of workplace functions */
    public function headCompList(){
        if (Session::get("role") == 4) {
            $companies = DB::table('Firma')
                ->join('Mesto', 'Mesto_idMesto', '=', 'idMesto')
                ->get();
            return view('headCompList', ['companies'=>$companies]);
        }
        else die("acces denied");
    }

    public function headCompSave(Request $request) {
        if (Session::get("role") == 4) {
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
        else die("acces denied");
    }


    public function headCompAdd(){
        if (Session::get("role") == 4) {
            return view('headCompAdd');
        }
        else die("acces denied");
    }

    public function headStudList(){
        if (Session::get("role") == 4) {
            $students = DB::table('Pouzivatel')
                ->join('prax', 'Student_idPouzivatel', '=', 'idPouzivatel')
                ->join('predmety', 'Predmety_idPredmety', '=', 'idPredmety')
                ->get();
            return view('headStudList', ['students'=>$students]);
        }
        else die("acces denied");
    }

    public function headPracList(){
        if (Session::get("role") == 4) {
            $practise = DB::table('Prax')
                ->join('Firma', 'Firma_idFirma', '=', 'idFirma')
                ->join('Pouzivatel', 'Student_idPouzivatel', '=', 'idPouzivatel')
                ->get();
            return view('headPracList', ['practise'=>$practise]);
        }
        else die("acces denied");
    }

    public function headPracFinishList(){
        if (Session::get("role") == 4) {
            $practise = DB::table('Prax')
                ->join('Firma', 'Firma_idFirma', '=', 'idFirma')
                ->join('Pouzivatel', 'Student_idPouzivatel', '=', 'idPouzivatel')->where('Aktuálny_stav', 'done')->get();
            return view('headPracFinishList', ['practise'=>$practise]);
        }
        else die("acces denied");
    }

    public function headReportList(){
        if (Session::get("role") == 4) {
            $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Dokumenty_idDokumenty', '4')->orderBy('idPrax')->get();
            return view('headReportList', ['praxy'=>$praxy]);
        }
        else die("acces denied");
    }

    public function headReportAdd(){
        if (Session::get("role") == 4) {
            return view('headReportAdd');
        }
        else die("acces denied");
    }

    public function headReportSave(Request $request){
        if (Session::get("role") == 4) {
            DB::table('Prax_has_Dokumenty')->insert([
                'Prax_idPrax' => $request->Prax,
                'Dokumenty_idDokumenty' => "4",
                'Datum_pridania' => date("Y-m-d"),
                'Nazov' => $request->Report
            ]);
            return redirect('headReportList');
        }
        else die("acces denied");
    }

    public function headReportUpd($id){
        if (Session::get("role") == 4) {
            $prax = DB::table('Prax_has_Dokumenty')->join('Prax', 'Prax.idPrax', '=', 'Prax_has_Dokumenty.Prax_idPrax')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', "4")->get();
            return view('headReportUpd', ['prax'=>$prax]);
        }
        else die("acces denied");
    }

    public function headReportUpd2 (Request $req){
        if (Session::get("role") == 4) {
            DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $req->PraxidPrax)->where('Dokumenty_idDokumenty', "4")->update([
                'Datum_pridania' => date("Y-m-d"),
                'Nazov' => $req->Report
            ]);
            return redirect('headReportList');
        }
        else die("acces denied");
    }

    public function headReportDel($id){
        if (Session::get("role") == 4) {
            DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', 4)->delete();
            return redirect('headReportList');
        }
        else die("acces denied");
    }

    public function headFeedRead(){
        if (Session::get("role") == 4) {
            $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Dokumenty_idDokumenty', '2')->orderBy('idPrax')->get();
            return view('headFeedRead', ['praxy'=>$praxy]);
        }
        else die("acces denied");
    }

    public function headCertList(){
        if (Session::get("role") == 4) {
            $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Dokumenty_idDokumenty', '3')->orderBy('idPrax')->get();
            return view('headCertList', ['praxy'=>$praxy]);
        }
        else die("acces denied");
    }

    public function headRespList(){
        if (Session::get("role") == 4) {
            $praxy = DB::table('Prax')
                ->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')
                ->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')
                ->join('Pouzivatel', 'Kontaktna_osoba_idPouzivatel', '=', 'idPouzivatel')
                ->orderBy('idPrax')->get();
            return view('headRespList', ['practise'=>$praxy]);
        }
        else die("acces denied");
    }

    public function headRespUpd($id){
        if (Session::get("role") == 4) {
            $praxy = DB::table('Prax')
                ->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')
                ->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')
                ->join('Pouzivatel', 'Kontaktna_osoba_idPouzivatel', '=', 'idPouzivatel')
                ->where('idPrax', $id)->get();
            return view('headRespUpd', ['practise'=>$praxy]);
        }
        else die("acces denied");
    }

    public function headRespUpd2(Request $request){
        if (Session::get("role") == 4) {
            DB::table('Prax')->where('idPrax', $request->idPrax)->update([
                'Kontaktna_osoba_idPouzivatel' => $request->Kontaktna_Osoba
            ]);
            return redirect('headRespList');
        }
        else die("acces denied");
    }

    public function headRespAdd(){
        if (Session::get("role") == 4) {
            $osoby = DB::table('Pouzivatel')->where('Rola_pouzivatela', '3')->orderBy('idPouzivatel')->get();
            return view('headRespAdd', ['osoby'=>$osoby]);
        }
        else die("acces denied");
    }

    public function headRespAddSave(Request $request) {
        if (Session::get("role") == 4) {
            return view('headRespList');
        }
        else die("acces denied");
    }

    /* responsible person functions */
    public function respCompList(){
        if (Session::get("role") == 2) {
            $firmy = DB::table('Firma')
                ->join('Mesto', 'Firma.Mesto_idMesto', '=', 'Mesto.idMesto')
                ->select('Firma.*', 'Mesto.*')
                ->orderBy('idFirma')
                ->get();
            return view('respCompList', ['firmy'=>$firmy]);
        }
        else die("acces denied");
    }

    public function respCompSave(Request $req){
        if (Session::get("role") == 2) {
            DB::table('Firma')->insert([
                'Názov_firmy' => $req->nazov,
                'Skratka' => $req->skratka,
                'Adresa' => $req->adresa,
                'Mesto_idMesto' => $req->Nazov,
            ]);
            return redirect('respCompList');
        }
        else die("acces denied");
    }

    public function respCompAdd(){
        if (Session::get("role") == 2) {
            return view('respCompAdd');
        }
        else die("acces denied");
    }

    public function respCompUpd($id){
        if (Session::get("role") == 2) {
            $firm = DB::table('Firma')
                ->join('Mesto', 'Firma.Mesto_idMesto', '=', 'Mesto.idMesto')
                ->where('idFirma', $id)
                ->get();
            return view('respCompUpd', ['firm'=>$firm]);
        }
        else die("acces denied");
    }

    public function respCompUpd2 (Request $req){
        if (Session::get("role") == 2) {
            DB::table('Firma')->where('idFirma', $req->idFirma)->update([
                'Názov_firmy' => $req->Firma,
                'Skratka' => $req->Skratka,
                'Adresa' => $req->Adresa,
                'Mesto_idMesto' => $req->Mesto,
            ]);
            return redirect('respCompList');
        }
        else die("acces denied");
    }

    public function respCompDel($idFirma){
        if (Session::get("role") == 2) {
            DB::delete('delete from Firma where idFirma = ?',[$idFirma]);
            return redirect('respCompList');
        }
        else die("acces denied");
    }

    public function respPracRead(){
        if (Session::get("role") == 2) {
            $praxy = DB::table('Prax')
                ->join('Firma', 'Prax.Firma_idFirma', '=', 'Firma.idFirma')
                ->join('Mesto', 'Firma.Mesto_idMesto', '=', 'Mesto.idMesto')
                ->select('Firma.*', 'Mesto.*', 'Prax.*')
                ->orderBy('idPrax')
                ->get();
            return view('respPracRead', ['prax'=>$praxy]);
        }
        else die("acces denied");
    }

    public function respCompDelete($idFirma){
        if (Session::get("role") == 2) {
            DB::delete('delete from Firma where idFirma = ?',[$idFirma]);
            return redirect('respCompList');
        }
        else die("acces denied");
    }

    public function respPracUpd($id){
        if (Session::get("role") == 2) {
            $prax = DB::table('Prax')
                ->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')
                ->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')
                ->where('idPrax', $id)
                ->get();
            return view('respPracUpd', ['prax'=>$prax]);
        }
        else die("acces denied");
    }

    public function respPracUpd2 (Request $req){
        if (Session::get("role") == 2) {
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
            return redirect('respPracRead');
        }
        else die("acces denied");
    }

    public function respPracAdd(){
        if (Session::get("role") == 2) {
            return view('respPracAdd');
        }
        else die("acces denied");
    }

    public function respPracSave (Request $req){
        if (Session::get("role") == 2) {
            DB::table('Prax')->insert([
                'Pozicia' => $req->pozicia,
                'Firma_idFirma' => $req->firma,
                'Kontaktna_osoba_idPouzivatel' => $req->Kontaktna_Osoba,
                'Predmety_idPredmety' => $req->Predmety,
                'Pracovnik_FPVaI_idPouzivatel' => $req->Pracovnik_FPVaI,
                'Zmluva_idZmluva' => $req->Typ_Zmluvy
            ]);
            return redirect('respPracRead');
        }
        else die("acces denied");
    }

    public function respReportRead(){
        if (Session::get("role") == 2) {
            $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Dokumenty_idDokumenty', '4')->orderBy('idPrax')->get();
            return view('respReportRead', ['praxy'=>$praxy]);
        }
        else die("acces denied");
    }

    public function respReportAdd(){
        if (Session::get("role") == 2) {
            return view('respReportAdd');
        }
        else die("acces denied");
    }

    public function respReportSave(Request $req){
        if (Session::get("role") == 2) {
            DB::table('Prax_has_Dokumenty')->insert([
                'Prax_idPrax' => $req->Prax,
                'Dokumenty_idDokumenty' => "4",
                'Datum_pridania' => date("Y-m-d"),
                'Nazov' => $req->Report
            ]);
            return redirect('respReportRead');
        }
        else die("acces denied");
    }

    public function respReportUpd($id){
        if (Session::get("role") == 2) {
            $prax = DB::table('Prax_has_Dokumenty')->join('Prax', 'Prax.idPrax', '=', 'Prax_has_Dokumenty.Prax_idPrax')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', "4")->get();
            return view('respReportUpd', ['prax'=>$prax]);
        }
        else die("acces denied");
    }

    public function respReportUpd2 (Request $req){
        if (Session::get("role") == 2) {
            DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $req->PraxidPrax)->where('Dokumenty_idDokumenty', "4")->update([
                'Datum_pridania' => date("Y-m-d"),
                'Nazov' => $req->Report
            ]);
            return redirect('respReportRead');
        }
        else die("acces denied");
    }

    public function respReportDel($id){
        if (Session::get("role") == 2) {
            DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', 4)->delete();
            return redirect('respReportDel');
        }
        else die("acces denied");
    }

    public function respStuRatingList(){
        if (Session::get("role") == 2) {
            $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Dokumenty_idDokumenty', '3')->orderBy('idPrax')->get();
            return view('respStuRatingList', ['praxy'=>$praxy]);
        }
        else die("acces denied");
    }

    public function respStuRatingAdd(){
        if (Session::get("role") == 2) {
            return view('respStuRatingAdd');
        }
        else die("acces denied");
    }

    public function respStuRatingSave(Request $req){
        if (Session::get("role") == 2) {
            DB::table('Prax_has_Dokumenty')->insert([
                'Prax_idPrax' => $req->Prax,
                'Dokumenty_idDokumenty' => "3",
                'Datum_pridania' => date("Y-m-d"),
                'Nazov' => $req->Report
            ]);
            return redirect('respStuRatingList');
        }
        else die("acces denied");
    }

    public function respStuRatingUpd($id){
        if (Session::get("role") == 2) {
            $prax = DB::table('Prax_has_Dokumenty')->join('Prax', 'Prax.idPrax', '=', 'Prax_has_Dokumenty.Prax_idPrax')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', "3")->get();
            return view('respStuRatingUpd', ['prax'=>$prax]);
        }
        else die("acces denied");
    }

    public function respStuRatingUpd2 (Request $req){
        if (Session::get("role") == 2) {
            DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $req->PraxidPrax)->where('Dokumenty_idDokumenty', "3")->update([
                'Datum_pridania' => date("Y-m-d"),
                'Nazov' => $req->Report
            ]);
            return redirect('respStuRatingList');
        }
        else die("acces denied");
    }

    public function respStuRatingDel($id){
        if (Session::get("role") == 2) {
            DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', 3)->delete();
            return redirect('respStuRatingList');
        }
        else die("acces denied");
    }

    public function respPracArchRead(){
        if (Session::get("role") == 2) {
            $praxy = DB::table('Prax')
                ->join('Firma', 'Prax.Firma_idFirma', '=', 'Firma.idFirma')
                ->join('Mesto', 'Firma.Mesto_idMesto', '=', 'Mesto.idMesto')
                ->select('Firma.*', 'Mesto.*', 'Prax.*')
                ->where('Prax.Aktuálny_stav', '=', 'done')
                ->orderBy('idPrax')
                ->get();
            return view('respPracArchRead', ['prax'=>$praxy]);
        }
        else die("acces denied");
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


    /* admin functions */
    public function admStuLIst(){
        if (Session::get("role") == 5) {
        $studenti = DB::table('Pouzivatel')
            ->leftJoin('Firma', 'Pouzivatel.Firma_idFirma', '=', 'Firma.idFirma')
            ->join('Rola', 'Pouzivatel.Rola_pouzivatela', '=', 'Rola.idRola')
            //->where('Rola_pouzivatela', '=', 1)
            ->get();
        return view('admStuLIst', ['studenti'=>$studenti]);
        }
        else die("acces denied");
    }
    public function admStuEdit($id){
        if (Session::get("role") == 5) {
        $osoba = DB::table('Pouzivatel')->where('idPouzivatel', $id)->get();
        return view('admStuEdit', ['osoba'=>$osoba]);
        }
        else die("acces denied");
    }

    public function admStuEdit2(Request $req){
        if (Session::get("role") == 5) {
            if ($req->Firma == "0") {
                DB::table('Pouzivatel')->where('idPouzivatel', $req->idPouzivatel)->update([
                    'Meno' => $req->Meno,
                    'Priezvisko' => $req->Priezvisko,
                    'Cislo' => $req->Cislo,
                    'Mail' => $req->Mail,
                    'Rola_pouzivatela' => $req->Rola,
                    'Firma_idFirma' => null
                ]);
            } else {
                DB::table('Pouzivatel')->where('idPouzivatel', $req->idPouzivatel)->update([
                    'Meno' => $req->Meno,
                    'Priezvisko' => $req->Priezvisko,
                    'Cislo' => $req->Cislo,
                    'Mail' => $req->Mail,
                    'Rola_pouzivatela' => $req->Rola,
                    'Firma_idFirma' => "$req->Firma"
                ]);
            }

        return redirect('admStuLIst');
        }
        else die("acces denied");
    }

    public function admStuAdd(){
        if (Session::get("role") == 5) {
        return view('admStuAdd');
        }
        else die("acces denied");
    }

    public function admStuSave(Request $req){
        if (Session::get("role") == 5) {
        DB::table('Pouzivatel')->insert([
            'Meno' => $req->Meno,
            'Priezvisko' => $req->Priezvisko,
            'Cislo' => $req->Cislo,
            'Mail' => $req->Mail,
            'Rola_pouzivatela' => "$req->Rola",
            'Firma_idFirma' => "$req->Firma"
        ]);
        return redirect('admStuLIst');
        }
        else die("acces denied");
    }

    public function admStuDel($id){
        if (Session::get("role") == 5) {
        DB::table('Pouzivatel')->where('idPouzivatel', $id)->delete();
        DB::table('users')->where('id', $id)->delete();
        return redirect('admStuLIst');
        }
        else die("acces denied");
    }

    public function admCompList(){
        if (Session::get("role") == 5) {
        $firmy = DB::table('Firma')
            ->join('Mesto', 'Firma.Mesto_idMesto', '=', 'Mesto.idMesto')
            ->select('Firma.*', 'Mesto.*')
            ->get();
        return view('admCompList', ['firmy'=>$firmy]);
        }
        else die("acces denied");
    }

    public function admCompNameUpd($id){
        if (Session::get("role") == 5) {
        $firmy = DB::table('Firma')->where('idFirma', $id)->get();
        return view('admCompNameUpd', ['firma'=>$firmy]);
        }
        else die("acces denied");
    }

    public function admCompNameUpd2(Request $req){
        if (Session::get("role") == 5) {
        DB::table('Firma')->where('idFirma', $req->idFirma)->update([
            'Názov_firmy' => $req->Nazov_firmy
        ]);
        return redirect('admCompList');
        }
        else die("acces denied");
    }

    public function admRepList(){
        if (Session::get("role") == 5) {
        $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Dokumenty_idDokumenty', '4')->orderBy('idPrax')->get();
        return view('admRepList', ['praxy'=>$praxy]);
        }
        else die("acces denied");
    }
    public function admRepAdd(){
        if (Session::get("role") == 5) {
        return view('admRepAdd');
        }
        else die("acces denied");
    }

    public function admRepSave(Request $req){
        if (Session::get("role") == 5) {
        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => $req->Prax,
            'Dokumenty_idDokumenty' => "4",
            'Datum_pridania' => date("Y-m-d"),
            'Nazov' => $req->Report
        ]);
        return redirect('admRepList');
        }
        else die("acces denied");
    }

    public function admRepUdp($id){
        if (Session::get("role") == 5) {
        $prax = DB::table('Prax_has_Dokumenty')->join('Prax', 'Prax.idPrax', '=', 'Prax_has_Dokumenty.Prax_idPrax')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', "4")->get();
        return view('admRepUdp', ['prax'=>$prax]);
        }
        else die("acces denied");
    }

    public function admRepUdp2 (Request $req){
        if (Session::get("role") == 5) {
        DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $req->PraxidPrax)->where('Dokumenty_idDokumenty', "4")->update([
            'Datum_pridania' => date("Y-m-d"),
            'Nazov' => $req->Report
        ]);
        return redirect('admRepList');
        }
        else die("acces denied");
    }

    public function admRepDel($id){
        if (Session::get("role") == 5) {
        DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', 4)->delete();
        return redirect('admRepList');
        }
        else die("acces denied");
    }

    public function admGraphList(){
        return view('admGraphList');
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

    /* Zástupca firmy a organizácie */
    public function cmpRegDetail(){
        if (Session::get("role") == 3) {
            if (Session::get("firma") == "null")
            {
                //dd(22);
                return view('cmpRegDetail', ['firma'=>"null"]);
            }
            else $firmy = DB::table('Firma')->where('idFirma', Session::get("firma"))->get();
            return view('cmpRegDetail', ['firma'=>$firmy]);
        }
        else die("acces denied");
    }
    public function cmpAdd(Request $req){
        if (Session::get("role") == 3) {
        DB::table('Firma')->insert([
            'Názov_firmy' => $req->Nazov_firmy,
            'Skratka' => $req->Skratka,
            'Adresa' => $req->Adresa,
            'Mesto_idMesto' => $req->Nazov,
        ]);
        $nova = DB::table('Firma')->select('idFirma')->orderByDesc('idFirma')->limit(1)->get();
        foreach ($nova as $n) {
            Session::put('firma', $n->idFirma);
            DB::table('Pouzivatel')->where('idPouzivatel', Auth::id())->update([
                'Firma_idFirma' => "$n->idFirma"
            ]);
        }
        return redirect('cmpRegDetail');
        }
        else die("acces denied");
    }

    public function cmpUpd(Request $req){
        if (Session::get("role") == 3) {
            DB::table('Firma')->where('idFirma', $req->idFirma)->update([
                'Názov_firmy' => $req->Nazov_firmy,
                'Skratka' => $req->Skratka,
                'Adresa' => $req->Adresa,
                'Mesto_idMesto' => $req->Nazov,
            ]);
            return redirect('cmpRegDetail');
        }
        else die("acces denied");
    }

    public function cmpStudRead(){
        if (Session::get("role") == 3) {
        $praxy = DB::table('Prax')
            ->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')
            ->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')
            ->where('Dokumenty_idDokumenty', '3')
            ->where('Firma_idFirma', Session::get("firma"))
            ->orderBy('idPrax')->get();
        return view('cmpStudRead', ['praxy'=>$praxy]);
        }
        else die("acces denied");
    }

    public function cmpStuAdd(){
        if (Session::get("role") == 3) {
        return view('cmpStuAdd');
        }
        else die("acces denied");
    }

    public function cmpStuSave (Request $req){
        if (Session::get("role") == 3) {
        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => $req->Prax,
            'Dokumenty_idDokumenty' => "3",
            'Datum_pridania' => date("Y-m-d"),
            'Nazov' => $req->Spatna_vazba
        ]);
        return redirect('cmpStudRead');
        }
        else die("acces denied");
    }

    public function cmpStuUpd($id){
        if (Session::get("role") == 3) {
        $prax = DB::table('Prax_has_Dokumenty')->join('Prax', 'Prax.idPrax', '=', 'Prax_has_Dokumenty.Prax_idPrax')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', "3")->get();
        return view('cmpStuUpd', ['prax'=>$prax]);
        }
        else die("acces denied");
    }

    public function cmpStuUpd2 (Request $req){
        if (Session::get("role") == 3) {
        DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $req->PraxidPrax)->where('Dokumenty_idDokumenty', "3")->update([
            'Datum_pridania' => date("Y-m-d"),
            'Nazov' => $req->Spatna_vazba
        ]);
        return redirect('cmpStudRead');
        }
        else die("acces denied");
    }

    public function cmpStuDel($id){
        if (Session::get("role") == 3) {
        DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', 3)->delete();
        return redirect('cmpStudRead');
        }
        else die("acces denied");
    }

    public function cmpReporList(){
        if (Session::get("role") == 3) {
        $praxy = DB::table('Prax')
            ->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')
            ->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')
            ->where('Dokumenty_idDokumenty', '1')
            ->where('Firma_idFirma', Session::get("firma"))
            ->orderBy('idPrax')->get();
        return view('cmpReporList', ['praxy'=>$praxy]);
        }
        else die("acces denied");
    }

    public function cmpReportAdd(){
        if (Session::get("role") == 3) {
        return view('cmpReportAdd');
        }
        else die("acces denied");
    }

    public function cmpReportSave (Request $req){
        if (Session::get("role") == 3) {
        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => $req->Prax,
            'Dokumenty_idDokumenty' => "1",
            'Datum_pridania' => date("Y-m-d"),
            'Nazov' => $req->Vykaz
        ]);
        return redirect('cmpReporList');
        }
        else die("acces denied");
    }

    public function cmpReportUpd($id){
        if (Session::get("role") == 3) {
        $prax = DB::table('Prax_has_Dokumenty')->join('Prax', 'Prax.idPrax', '=', 'Prax_has_Dokumenty.Prax_idPrax')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', "1")->get();
        return view('cmpReportUpd', ['prax'=>$prax]);
        }
        else die("acces denied");
    }

    public function cmpReportUpd2 (Request $req){
        if (Session::get("role") == 3) {
        DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $req->PraxidPrax)->where('Dokumenty_idDokumenty', "1")->update([
            'Datum_pridania' => date("Y-m-d"),
            'Nazov' => $req->Vykaz
        ]);
        return redirect('cmpReporList');
        }
        else die("acces denied");
    }

    public function cmpReportDel($id){
        if (Session::get("role") == 3) {
        DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', 1)->delete();
        return redirect('cmpReporList');
        }
        else die("acces denied");
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
}
