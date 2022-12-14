<?php
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestController3;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [TestController::class, 'home']);
Route::get('/login', [TestController::class, 'login']);
Route::get('/register', [TestController::class, 'register']);
Route::get('/profilepage', [TestController::class, 'profilepage']);
Route::get('/profileeditpage', [TestController::class, 'profileeditpage']);
Route::get('/myinfopage', [TestController::class, 'myinfopage']);
Route::get('/infopage', [TestController::class, 'infopage']);
Route::get('/listpage', [TestController::class, 'listpage']);
Route::get('/createprax', [TestController::class, 'createpraxpage']);

/* student routes */
Route::get('/stuPracList', [TestController::class, 'stuPracList']);
Route::get('/stuPracProgList', [TestController::class, 'stuPracProgList']);
Route::get('/stuPracProgListUpd/{id}', [TestController::class, 'stuPracProgListUpd']);
Route::get('/stuCompAdd', [TestController::class, 'stuCompAdd']);
Route::post('/stuCompSave', [TestController::class, 'stuCompSave']);
Route::get('/stuCompUpd/{id}', [TestController::class, 'stuCompUpd']);
Route::post('/stuCompUpd2', [TestController::class, 'stuCompUpd2']);
Route::get('/stuCompDel/{id}', [TestController::class, 'stuCompDel']);
Route::get('/stuPersAdd', [TestController::class, 'stuPersAdd']);
Route::post('/stuPersSave', [TestController::class, 'stuPersSave']);
Route::get('/stuPersUpd/{id}', [TestController::class, 'stuPersUpd']);
Route::post('/stuPersUpd2', [TestController::class, 'stuPersUpd2']);
Route::get('/stuPersDel/{id}', [TestController::class, 'stuPersDel']);
Route::get('/stuContrList', [TestController::class, 'stuContrList']);
Route::get('/stuContrTypeUpd/{id}', [TestController::class, 'stuContrTypeUpd']);
Route::post('/stuContrTypeUpd2', [TestController::class, 'stuContrTypeUpd2']);
Route::get('/stuContrTypeList', [TestController::class, 'stuContrTypeList']);
Route::get('/stuContrAdd', [TestController::class, 'stuContrAdd']);
Route::get('/stuContrUpd/{id}', [TestController::class, 'stuContrUpd']);
Route::post('/stuContrUpd2', [TestController::class, 'stuContrUpd2']);
Route::get('/stuContrDel/{id}', [TestController::class, 'stuContrDel']);
Route::get('/stuContReportList', [TestController::class, 'stuContReportList']);
Route::get('/stuContReportAdd', [TestController::class, 'stuContReportAdd']);
Route::post('/stuContReportSave', [TestController::class, 'stuContReportSave']);
Route::get('/stuContReportUpd/{id}', [TestController::class, 'stuContReportUpd']);
Route::post('/stuContReportUpd2', [TestController::class, 'stuContReportUpd2']);
Route::get('/stuContReportDel/{id}', [TestController::class, 'stuContReportDel']);
Route::get('/stuPracReportRead', [TestController::class, 'stuPracReportRead']);
Route::get('/stuFeedRead', [TestController::class, 'stuFeedRead']);
Route::get('/stuFeedAdd', [TestController::class, 'stuFeedAdd']);
Route::post('/stuFeedSave', [TestController::class, 'stuFeedSave']);
Route::get('/stuFeedUpd/{id}', [TestController::class, 'stuFeedUpd']);
Route::post('/stuFeedUpd2', [TestController::class, 'stuFeedUpd2']);
Route::get('/stuFeedDel/{id}', [TestController::class, 'stuFeedDel']);
Route::get('/stuPracCertRead', [TestController::class, 'stuPracCertRead']);

/* head of workplace routes */
Route::get('/headCompList', [TestController::class, 'headCompList']);
Route::get('/headCompAdd', [TestController::class, 'headCompAdd']);
Route::post('/headCompSave', [TestController::class, 'headCompSave'])->name("headCompSave");
Route::get('/headStudList', [TestController::class, 'headStudList']);
Route::get('/headPracList', [TestController::class, 'headPracList']);
Route::get('/headPracFinishList', [TestController::class, 'headPracFinishList']);
Route::get('/headReportList', [TestController::class, 'headReportList']);
Route::get('/headReportAdd', [TestController::class, 'headReportAdd']);
Route::post('/headReportSave', [TestController::class, 'headReportSave']);
Route::get('/headReportUpd/{id}', [TestController::class, 'headReportUpd']);
Route::post('/headReportUpd2', [TestController::class, 'headReportUpd2']);
Route::get('/headReportDel/{id}', [TestController::class, 'headReportDel']);
Route::get('/headFeedRead', [TestController::class, 'headFeedRead']);
Route::get('/headCertList', [TestController::class, 'headCertList']);
Route::get('/headRespList', [TestController::class, 'headRespList']);
Route::get('/headRespUpd/{id}', [TestController::class, 'headRespUpd']);
Route::post('/headRespUpd2', [TestController::class, 'headRespUpd2']);
Route::get('/headRespAdd', [TestController::class, 'headRespAdd']);
Route::post('/headRespAddSave', [TestController::class, 'headRespAddSave'])->name("headRespAddSave");

/* responsible person functions */
Route::get('/respCompList', [TestController::class, 'respCompList']);
Route::get('/respCompAdd', [TestController::class, 'respCompAdd']);
Route::get('/respCompUpd', [TestController::class, 'respCompUpd']);
Route::get('/respCompDel/{idFirma}',[TestController::class, 'respCompDelete']);
Route::get('/respPracRead', [TestController::class, 'respPracRead']);
Route::get('/respReportRead', [TestController::class, 'respReportRead']);
Route::get('/respReportAdd', [TestController::class, 'respReportAdd']);
Route::post('/respReportSave', [TestController::class, 'respReportSave']);
Route::get('/respReportUpd/{id}', [TestController::class, 'respReportUpd']);
Route::post('/respReportUpd2', [TestController::class, 'respReportUpd2']);
Route::get('/respReportDel/{id}', [TestController::class, 'respReportDel']);
Route::get('/respPracArchRead', [TestController::class, 'respPracArchRead']);
Route::get('/respStuRatingList', [TestController::class, 'respStuRatingList']);
Route::get('/respStuRatingAdd', [TestController::class, 'respStuRatingAdd']);
Route::post('/respStuRatingSave', [TestController::class, 'respStuRatingSave']);
Route::get('/respStuRatingUpd/{id}', [TestController::class, 'respStuRatingUpd']);
Route::post('/respStuRatingUpd2', [TestController::class, 'respStuRatingUpd2']);
Route::get('/respStuRatingDel', [TestController::class, 'respStuRatingDel']);
Route::get('/respFeedList', [TestController::class, 'respFeedList']);
Route::get('/respFeedAdd', [TestController::class, 'respFeedAdd']);
Route::get('/respFeedUpd', [TestController::class, 'respFeedUpd']);
Route::get('/respFeedDel', [TestController::class, 'respFeedDel']);

Route::POST('/respCompSave', [TestController::class, 'respCompSave']);
Route::get('/respPracUpd/{id}', [TestController::class, 'respPracUpd']);
Route::POST('/respPracUpd2', [TestController::class, 'respPracUpd2']);
Route::get('/respPracAdd', [TestController::class, 'respPracAdd']);
Route::POST('/respPracSave', [TestController::class, 'respPracSave']);
Route::get('/respCompUpd/{id}', [TestController::class, 'respCompUpd']);
Route::POST('/respCompUpd2', [TestController::class, 'respCompUpd2']);




/* admin routes */
Route::get('/admStuLIst', [TestController::class, 'admStuLIst']);
Route::get('/admStuAdd', [TestController::class, 'admStuAdd']);
Route::post('/admStuSave', [TestController::class, 'admStuSave']);
Route::get('/admStuEdit/{id}', [TestController::class, 'admStuEdit']);
Route::post('/admStuEdit2', [TestController::class, 'admStuEdit2']);
Route::get('/admStuDel/{id}', [TestController::class, 'admStuDel']);

Route::get('/admWpList', [TestController::class, 'admWpList']);
Route::get('/admWpAdd', [TestController::class, 'admWpAdd']);
Route::get('/admWpUpd', [TestController::class, 'admWpUpd']);
Route::get('/admWkList', [TestController::class, 'admWkList']);
Route::get('/admWkAdd', [TestController::class, 'admWkAdd']);
Route::get('/admWkUpd', [TestController::class, 'admWkUpd']);
Route::get('/admCompList', [TestController::class, 'admCompList']);
Route::get('/admCompNameUpd/{id}', [TestController::class, 'admCompNameUpd']);
Route::post('/admCompNameUpd2', [TestController::class, 'admCompNameUpd2']);
Route::get('/admRepList', [TestController::class, 'admRepList']);
Route::get('/admRepAdd', [TestController::class, 'admRepAdd']);
Route::post('/admRepSave', [TestController::class, 'admRepSave']);
Route::get('admRepUdp/{id}', [TestController::class, 'admRepUdp']);
Route::post('admRepUdp2', [TestController::class, 'admRepUdp2']);
Route::get('admRepDel/{id}', [TestController::class, 'admRepDel']);
Route::get('/admGraphList', [TestController::class, 'admGraphList']);

/* Z??stupca firmy a organiz??cie */
Route::get('/cmpRegDetail', [TestController::class, 'cmpRegDetail']);
Route::post('/cmpAdd', [TestController::class, 'cmpAdd']);
Route::post('/cmpUpd', [TestController::class, 'cmpUpd']);
Route::get('/cmpStudRead', [TestController::class, 'cmpStudRead']);
Route::get('/cmpStuAdd', [TestController::class, 'cmpStuAdd']);
Route::post('/cmpStuSave', [TestController::class, 'cmpStuSave']);
Route::get('/cmpStuUpd/{id}', [TestController::class, 'cmpStuUpd']);
Route::post('/cmpStuUpd2', [TestController::class, 'cmpStuUpd2']);
Route::get('/cmpStuDel/{id}', [TestController::class, 'cmpStuDel']);
Route::get('/cmpReporList', [TestController::class, 'cmpReporList']);
Route::get('/cmpReportAdd', [TestController::class, 'cmpReportAdd']);
Route::post('/cmpReportSave', [TestController::class, 'cmpReportSave']);

Route::get('/cmpReportUpd/{id}', [TestController::class, 'cmpReportUpd']);
Route::post('/cmpReportUpd2', [TestController::class, 'cmpReportUpd2']);
Route::get('/cmpReportDel/{id}', [TestController::class, 'cmpReportDel']);

Route::get('/cmpFeedList', [TestController::class, 'cmpFeedList']);
Route::get('/cmpFeedAdd', [TestController::class, 'cmpFeedAdd']);
Route::get('/cmpFeedUpd', [TestController::class, 'cmpFeedUpd']);



// Controller-name@method-name
/*Route::get('/', 'PagesController@index'); // localhost:8000/
Route::get('/{id}', 'PagesController@index');
Route::post('/save', 'PagesController@save');
Route::get('/deleteUser/{id}', 'PagesController@deleteUser');*/

require __DIR__.'/auth.php';




