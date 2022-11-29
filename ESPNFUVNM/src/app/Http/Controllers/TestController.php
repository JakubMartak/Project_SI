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
        DB::table('Pouzivatel')->where('idPouzivatel', $id)->delete();
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
    }

    public function stuFeedRead(){
        $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Student_idPouzivatel', Auth::user()->id)->where('Dokumenty_idDokumenty', '2')->orderBy('idPrax')->get();
        return view('stuFeedRead', ['praxy'=>$praxy]);
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
        $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Dokumenty_idDokumenty', '4')->orderBy('idPrax')->get();
        return view('headReportList', ['praxy'=>$praxy]);
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

        return view('headRespList', ['practise'=>$heads]);
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

    /* responsible person functions */
    public function respCompList(){
        $firmy = DB::table('Firma')
            ->join('Mesto', 'Firma.Mesto_idMesto', '=', 'Mesto.idMesto')
            ->select('Firma.*', 'Mesto.*')
            ->orderBy('idFirma')
            ->get();
        return view('respCompList', ['firmy'=>$firmy]);
    }

    public function respCompAdd(){
        return view('respCompAdd');
    }

    public function respCompUpd($id){
        $firm = DB::table('Firma')
            ->join('Mesto', 'Firma.Mesto_idMesto', '=', 'Mesto.idMesto')
            ->where('idFirma', $id)
            ->get();
        return view('respCompUpd', ['firm'=>$firm]);
    }

    public function respCompUpd2 (Request $req){
        DB::table('Firma')->where('idFirma', $req->idFirma)->update([
            'Názov_firmy' => $req->Firma,
            'Skratka' => $req->Skratka,
            'Adresa' => $req->Adresa,
            'Mesto_idMesto' => $req->Mesto,

        ]);
        return redirect('respCompList');
    }

    public function respCompDel(){
        return view('respCompDel');
    }

    public function respPracRead(){
        $praxy = DB::table('Prax')
            ->join('Firma', 'Prax.Firma_idFirma', '=', 'Firma.idFirma')
            ->join('Mesto', 'Firma.Mesto_idMesto', '=', 'Mesto.idMesto')
            ->select('Firma.*', 'Mesto.*', 'Prax.*')
            ->orderBy('idPrax')
            ->get();
        return view('respPracRead', ['prax'=>$praxy]);
    }

    public function respCompDelete($idFirma){
        DB::delete('delete from Firma where idFirma = ?',[$idFirma]);
        return redirect('respCompList');
    }

    public function respCompSave(Request $req){
        DB::table('Firma')->insert([
            'Názov_firmy' => $req->nazov,
            'Skratka' => $req->skratka,
            'Adresa' => $req->adresa,
            'Mesto_idMesto' => $req->Nazov,
        ]);
        return redirect('respCompList');
    }

    /*public function respPracUpd(){
        return view('respPracUpd');
    }*/

    public function respPracUpd($id){
        $prax = DB::table('Prax')
            ->join('Zmluva', 'Zmluva.idZmluva', '=', 'Prax.Zmluva_idZmluva')
            ->join('Firma', 'Firma.idFirma', '=', 'Prax.Firma_idFirma')
            ->where('idPrax', $id)
            ->get();
        return view('respPracUpd', ['prax'=>$prax]);
    }

    public function respPracUpd2 (Request $req){
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

    public function respPracAdd(){
        return view('respPracAdd');
    }

    public function respPracSave (Request $req){
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
        $praxy = DB::table('Prax')
            ->join('Firma', 'Prax.Firma_idFirma', '=', 'Firma.idFirma')
            ->join('Mesto', 'Firma.Mesto_idMesto', '=', 'Mesto.idMesto')
            ->select('Firma.*', 'Mesto.*', 'Prax.*')
            ->where('Prax.Aktuálny_stav', '=', 'done')
            ->orderBy('idPrax')
            ->get();
        return view('respPracArchRead', ['prax'=>$praxy]);
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
        $studenti = DB::table('Pouzivatel')->where('Rola_pouzivatela', '=', 1)->get();
        return view('admStuLIst', ['studenti'=>$studenti]);
    }
    public function admStuEdit($id){
        $osoba = DB::table('Pouzivatel')->where('idPouzivatel', $id)->get();
        return view('admStuEdit', ['osoba'=>$osoba]);
    }

    public function admStuEdit2(Request $req){
        DB::table('Pouzivatel')->where('idPouzivatel', $req->idPouzivatel)->update([
            'Meno' => $req->Meno,
            'Priezvisko' => $req->Priezvisko,
            'Cislo' => $req->Cislo,
            'Mail' => $req->Mail,
            'Rola_pouzivatela' => "1",
        ]);
        return redirect('admStuLIst');
    }

    public function admStuAdd(){
        return view('admStuAdd');
    }

    public function admStuSave(Request $req){
        DB::table('Pouzivatel')->insert([
            'Meno' => $req->Meno,
            'Priezvisko' => $req->Priezvisko,
            'Cislo' => $req->Cislo,
            'Mail' => $req->Mail,
            'Rola_pouzivatela' => "1",
        ]);
        return redirect('admStuLIst');
    }

    public function admStuDel($id){
        DB::table('Pouzivatel')->where('idPouzivatel', $id)->delete();
        return redirect('admStuLIst');
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
        $firmy = DB::table('Firma')
            ->join('Mesto', 'Firma.Mesto_idMesto', '=', 'Mesto.idMesto')
            ->select('Firma.*', 'Mesto.*')
            ->get();
        return view('admCompList', ['firmy'=>$firmy]);
    }
    public function admCompNameUpd($id){
        $firmy = DB::table('Firma')->where('idFirma', $id)->get();
        return view('admCompNameUpd', ['firma'=>$firmy]);
    }

    public function admCompNameUpd2(Request $req){
        DB::table('Firma')->where('idFirma', $req->idFirma)->update([
            'Názov_firmy' => $req->Nazov_firmy
        ]);
        return redirect('admCompList');
    }

    public function admRepList(){
        $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Dokumenty_idDokumenty', '4')->orderBy('idPrax')->get();
        return view('admRepList', ['praxy'=>$praxy]);
    }
    public function admRepAdd(){
        return view('admRepAdd');
    }

    public function admRepSave(Request $req){
        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => $req->Prax,
            'Dokumenty_idDokumenty' => "4",
            'Datum_pridania' => date("Y-m-d"),
            'Nazov' => $req->Report
        ]);
        return redirect('admRepList');
    }

    public function admRepUdp($id){
        $prax = DB::table('Prax_has_Dokumenty')->join('Prax', 'Prax.idPrax', '=', 'Prax_has_Dokumenty.Prax_idPrax')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', "4")->get();
        return view('admRepUdp', ['prax'=>$prax]);
    }

    public function admRepUdp2 (Request $req){
        DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $req->PraxidPrax)->where('Dokumenty_idDokumenty', "4")->update([
            'Datum_pridania' => date("Y-m-d"),
            'Nazov' => $req->Report
        ]);
        return redirect('admRepList');
    }

    public function admRepDel($id){
        DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', 4)->delete();
        return redirect('admRepList');
    }

    public function admGraphList(){
        return view('admGraphList');
    }

    /* Zástupca firmy a organizácie */
    public function cmpRegDetail(){
        return view('cmpRegDetail');
    }
    public function cmpAdd(Request $req){
        DB::table('Firma')->insert([
            'Názov_firmy' => $req->Nazov_firmy,
            'Skratka' => $req->Skratka,
            'Adresa' => $req->Adresa,
            'Mesto_idMesto' => $req->Nazov,
        ]);
        return redirect('cmpRegDetail');
    }
    public function cmpStudRead(){
        $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Dokumenty_idDokumenty', '3')->orderBy('idPrax')->get();
        return view('cmpStudRead', ['praxy'=>$praxy]);
    }
    public function cmpStuAdd(){
        return view('cmpStuAdd');
    }

    public function cmpStuSave (Request $req){
        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => $req->Prax,
            'Dokumenty_idDokumenty' => "3",
            'Datum_pridania' => date("Y-m-d"),
            'Nazov' => $req->Spatna_vazba
        ]);
        return redirect('cmpStudRead');
    }

    public function cmpStuUpd($id){
        $prax = DB::table('Prax_has_Dokumenty')->join('Prax', 'Prax.idPrax', '=', 'Prax_has_Dokumenty.Prax_idPrax')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', "3")->get();
        return view('cmpStuUpd', ['prax'=>$prax]);
    }

    public function cmpStuUpd2 (Request $req){
        DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $req->PraxidPrax)->where('Dokumenty_idDokumenty', "3")->update([
            'Datum_pridania' => date("Y-m-d"),
            'Nazov' => $req->Spatna_vazba
        ]);
        return redirect('cmpStudRead');
    }

    public function cmpStuDel($id){
        DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', 3)->delete();
        return redirect('cmpStudRead');
    }

    public function cmpReporList(){
        $praxy = DB::table('Prax')->join('Prax_has_Dokumenty', 'Prax_has_Dokumenty.Prax_idPrax', '=', 'Prax.idPrax')->join('Dokumenty', 'Dokumenty.idDokumenty', '=', 'Prax_has_Dokumenty.Dokumenty_idDokumenty')->where('Dokumenty_idDokumenty', '1')->orderBy('idPrax')->get();
        return view('cmpReporList', ['praxy'=>$praxy]);
    }

    public function cmpReportAdd(){
        return view('cmpReportAdd');
    }

    public function cmpReportSave (Request $req){
        DB::table('Prax_has_Dokumenty')->insert([
            'Prax_idPrax' => $req->Prax,
            'Dokumenty_idDokumenty' => "1",
            'Datum_pridania' => date("Y-m-d"),
            'Nazov' => $req->Vykaz
        ]);
        return redirect('cmpReporList');
    }

    public function cmpReportUpd($id){
        $prax = DB::table('Prax_has_Dokumenty')->join('Prax', 'Prax.idPrax', '=', 'Prax_has_Dokumenty.Prax_idPrax')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', "1")->get();
        return view('cmpReportUpd', ['prax'=>$prax]);
    }

    public function cmpReportUpd2 (Request $req){
        DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $req->PraxidPrax)->where('Dokumenty_idDokumenty', "1")->update([
            'Datum_pridania' => date("Y-m-d"),
            'Nazov' => $req->Vykaz
        ]);
        return redirect('cmpReporList');
    }

    public function cmpReportDel($id){
        DB::table('Prax_has_Dokumenty')->where('Prax_idPrax', $id)->where('Dokumenty_idDokumenty', 1)->delete();
        return redirect('cmpReporList');
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
