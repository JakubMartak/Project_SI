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
//Route::get('/test3', [TestController3::class, 'test3']);
Route::get('/myinfopage', [TestController::class, 'myinfopage']);
Route::get('/infopage', [TestController::class, 'infopage']);
Route::get('/listpage', [TestController::class, 'listpage']);
Route::get('/createprax', [TestController::class, 'createpraxpage']);

/* student routes */
Route::get('/stuPracList', [TestController::class, 'stuPracList']);
Route::get('/stuPracProgList', [TestController::class, 'stuPracProgList']);
Route::get('/stuCompAdd', [TestController::class, 'stuCompAdd']);
Route::get('/stuCompUpd', [TestController::class, 'stuCompUpd']);
Route::get('/stuCompDel', [TestController::class, 'stuCompDel']);
Route::get('/stuPersAdd', [TestController::class, 'stuPersAdd']);
Route::get('/stuPersUpd', [TestController::class, 'stuPersUpd']);
Route::get('/stuPersDel', [TestController::class, 'stuPersDel']);
Route::get('/stuContrList', [TestController::class, 'stuContrList']);
Route::get('/stuContrTypeUpd', [TestController::class, 'stuContrTypeUpd']);
Route::get('/stuContrTypeList', [TestController::class, 'stuContrTypeList']);
Route::get('/stuContrAdd', [TestController::class, 'stuContrAdd']);
Route::get('/stuContrUpd', [TestController::class, 'stuContrUpd']);
Route::get('/stuContrDel', [TestController::class, 'stuContrDel']);
Route::get('/stuContReportList', [TestController::class, 'stuContReportList']);
Route::get('/stuContReportAdd', [TestController::class, 'stuContReportAdd']);
Route::get('/stuContReportUpd', [TestController::class, 'stuContReportUpd']);
Route::get('/stuContractRepDel', [TestController::class, 'stuContractRepDel']);
Route::get('/stuPracReportRead', [TestController::class, 'stuPracReportRead']);
Route::get('/stuFeedRead', [TestController::class, 'stuFeedRead']);
Route::get('/stuFeedAdd', [TestController::class, 'stuFeedAdd']);
Route::get('/stuFeedUpd', [TestController::class, 'stuFeedUpd']);
Route::get('/stuFeedDel', [TestController::class, 'stuFeedDel']);
Route::get('/stuPracCertRead', [TestController::class, 'stuPracCertRead']);

/* head of workplace routes */
Route::get('/headCompList', [TestController::class, 'headCompList']);
Route::get('/headCompAdd', [TestController::class, 'headCompAdd']);
Route::get('/headStudList', [TestController::class, 'headStudList']);
Route::get('/headPracList', [TestController::class, 'headPracList']);
Route::get('/headPracFinishList', [TestController::class, 'headPracFinishList']);
Route::get('/headReportList', [TestController::class, 'headReportList']);
Route::get('/headReportAdd', [TestController::class, 'headReportAdd']);
Route::get('/headReportUpd', [TestController::class, 'headReportUpd']);
Route::get('/headFeedRead', [TestController::class, 'headFeedRead']);
Route::get('/headCertList', [TestController::class, 'headCertList']);
Route::get('/headRespList', [TestController::class, 'headRespList']);
Route::get('/headRespUpd', [TestController::class, 'headRespUpd']);
Route::get('/headRespAdd', [TestController::class, 'headRespAdd']);

/* responsible person functions */
Route::get('/respCompList', [TestController::class, 'respCompList']);
Route::get('/respCompAdd', [TestController::class, 'respCompAdd']);
Route::get('/respCompUpd', [TestController::class, 'respCompUpd']);
Route::get('/respCompDel', [TestController::class, 'respCompDel']);
Route::get('/respPracRead', [TestController::class, 'respPracRead']);
Route::get('/respPracUpd', [TestController::class, 'respPracUpd']);
Route::get('/respFeedList', [TestController::class, 'respFeedList']);
Route::get('/respFeedAdd', [TestController::class, 'respFeedAdd']);
Route::get('/respFeedUpd', [TestController::class, 'respFeedUpd']);
Route::get('/respFeedDel', [TestController::class, 'respFeedDel']);
Route::get('/respReportRead', [TestController::class, 'respReportRead']);
Route::get('/respReportAdd', [TestController::class, 'respReportAdd']);
Route::get('/respReportUpd', [TestController::class, 'respReportUpd']);
Route::get('/respReportDel', [TestController::class, 'respReportDel']);
Route::get('/respPracArchRead', [TestController::class, 'respPracArchRead']);
Route::get('/respStuRatingList', [TestController::class, 'respStuRatingList']);
Route::get('/respStuRatingAdd', [TestController::class, 'respStuRatingAdd']);
Route::get('/respStuRatingUpd', [TestController::class, 'respStuRatingUpd']);
Route::get('/respStuRatingDel', [TestController::class, 'respStuRatingDel']);


/* admin routes */
Route::get('/admStuLIst', [TestController::class, 'admStuLIst']);
Route::get('/admStuAdd', [TestController::class, 'admStuAdd']);
Route::get('/admStuEdit', [TestController::class, 'admStuEdit']);
Route::get('/admWpList', [TestController::class, 'admWpList']);
Route::get('/admWpAdd', [TestController::class, 'admWpAdd']);
Route::get('/admWpUpd', [TestController::class, 'admWpUpd']);
Route::get('/admWkList', [TestController::class, 'admWkList']);
Route::get('/admWkAdd', [TestController::class, 'admWkAdd']);
Route::get('/admWkUpd', [TestController::class, 'admWkUpd']);
Route::get('/admCompList', [TestController::class, 'admCompList']);
Route::get('/admCompNameUpd', [TestController::class, 'admCompNameUpd']);
Route::get('/admRepList', [TestController::class, 'admRepList']);
Route::get('/admRepAdd', [TestController::class, 'admRepAdd']);
Route::get('/admRepUdp', [TestController::class, 'admRepUdp']);

Route::get('/admGraphList', [TestController::class, 'admGraphList']);

/* Zástupca firmy a organizácie */
Route::get('/cmpRegDetail', [TestController::class, 'cmpRegDetail']);
Route::get('/cmpAdd', [TestController::class, 'cmpAdd']);
Route::get('/cmpUpd', [TestController::class, 'cmpUpd']);
Route::get('/cmpStudRead', [TestController::class, 'cmpStudRead']);
Route::get('/cmpStuAdd', [TestController::class, 'cmpStuAdd']);
Route::get('/cmpStuUpd', [TestController::class, 'cmpStuUpd']);
Route::get('/cmpReporList', [TestController::class, 'cmpReporList']);
Route::get('/cmpReportUpd', [TestController::class, 'cmpReportUpd']);
Route::get('/cmpFeedList', [TestController::class, 'cmpFeedList']);
Route::get('/cmpFeedAdd', [TestController::class, 'cmpFeedAdd']);
Route::get('/cmpFeedUpd', [TestController::class, 'cmpFeedUpd']);


require __DIR__.'/auth.php';




