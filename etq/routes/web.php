<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
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
    return view('welcome');
}) ;

Route::get('/broadcast', function () {
    return view('index') ;
})-> name('etq');

Route::get('lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect() -> back();
});

Route::post('email/send', [EmailController::class, 'send']) -> name('email/send');


Route::get('add', function () {
    DB::table('orders')-> insert([
        'amount' => '1',
        'total_cost' => '300',
        'date_created' => '2021-04-22',
        'product_id' => '1'
    ]);
    return view('orders');
});
Route::get('add2', function () {
    DB::table('orders')-> insert([
        'amount' => '1',
        'total_cost' => '109',
        'date_created' => '2021-04-22',
        'product_id' => '2'
    ]);
    return view('orders');
});
Route::get('add3', function () {
    DB::table('orders')-> insert([
        'amount' => '1',
        'total_cost' => '200',
        'date_created' => '2021-04-22',
        'product_id' => '3'
    ]);
    return view('orders');
});
Route::get('add4', function () {
    DB::table('orders')-> insert([
        'amount' => '1',
        'total_cost' => '499',
        'date_created' => '2021-04-22',
        'product_id' => '4'
    ]);
    return view('orders');
});
Route::get('add5', function () {
    DB::table('orders')-> insert([
        'amount' => '1',
        'total_cost' => '119',
        'date_created' => '2021-04-22',
        'product_id' => '5'
    ]);
    return view('orders');
});
Route::get('add6', function () {
    DB::table('orders')-> insert([
        'amount' => '1',
        'total_cost' => '300',
        'date_created' => '2021-04-22',
        'product_id' => '6'
    ]);
    return view('orders');
});
Route::get('add7', function () {
    DB::table('orders')-> insert([
        'amount' => '1',
        'total_cost' => '299',
        'date_created' => '2021-04-22',
        'product_id' => '7'
    ]);
    return view('orders');
});
Route::get('add8', function () {
    DB::table('orders')-> insert([
        'amount' => '1',
        'total_cost' => '300',
        'date_created' => '2021-04-22',
        'product_id' => '8'
    ]);
    return view('orders');
});
