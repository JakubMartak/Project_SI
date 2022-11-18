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
Route::get('/test3', [TestController3::class, 'test3']);
Route::get('/myinfopage', [TestController::class, 'myinfopage']);
Route::get('/infopage', [TestController::class, 'infopage']);
Route::get('/listpage', [TestController::class, 'listpage']);
Route::get('/createprax', [TestController::class, 'createpraxpage']);

/* student routes */
Route::get('/stuPracList', [TestController::class, 'stuPracList']);

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

/* responsible preson functions */
Route::get('/respCompList', [TestController::class, 'respCompList']);
Route::get('/respCompAdd', [TestController::class, 'respCompAdd']);
Route::get('/respCompUpd', [TestController::class, 'respCompUpd']);

/* admin routes */
Route::get('/admStuLIst', [TestController::class, 'admStuLIst']);
Route::get('/admStuAdd', [TestController::class, 'admStuAdd']);
Route::get('/admStuEdit', [TestController::class, 'admStuEdit']);


require __DIR__.'/auth.php';




