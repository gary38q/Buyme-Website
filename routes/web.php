<?php

use App\Http\Controllers\AsessmentController;
use App\Http\Controllers\AsessmentUserDataController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UndianController;
use App\Http\Controllers\PointMemberController;
use Illuminate\Support\Facades\Route;

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
    return redirect('/Home');
});

Route::get('/Home', [ProductController::class, 'getallhome']);

Route::get('/Products', [ProductController::class, 'getallproduct']);

Route::get('/Contact', function () {
    return view('contactus');
});

Route::get('/Detail-Product/{id}', [ProductController::class, 'getproduct']);

Route::get('/undian', [UndianController::class, 'showform']);

Route::post('/Insert-Undian', [UndianController::class, 'add_undian']);

Route::get('/generate-random', [UndianController::class, 'generate_random']);

Route::get('/get-kota-data/{id}', [UndianController::class, 'getkota_byid']);

Route::get('/claim-hadiah', [PointMemberController::class, 'index']);

Route::get('/data-member/{id}', [PointMemberController::class, 'get_point_member']);

Route::get('/create-data-member', [PointMemberController::class, 'create_point_member']);

Route::post('/insert-data-member', [PointMemberController::class, 'insert_point_member']);

Route::get('/update-data-member_api', [PointMemberController::class, 'update_member_point_api']);

//Start Assessment
//input data user
Route::get('/asessment', [AsessmentController::class, 'index'])->name('assessment-data');

//Insert Data User
Route::post('/insert-asessment-user-data', [AsessmentUserDataController::class, 'store']);

//test User Assessment
Route::get('/asessment-test', [AsessmentUserDataController::class, 'index'])->name('test-assessment');

//Insert Test User Result
Route::post('/insert-asessment-result', [AsessmentController::class, 'store']);

Route::get('/asessment-result', [AsessmentController::class, 'index_result'])->name('test-result');
//End Assessment