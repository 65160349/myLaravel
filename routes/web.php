<?php
use App\Http\Controllers\C_titles;
use Illuminate\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('titles', C_titles::class);

Route::get('/home', [myController::class , 'index']);

Route::get('/', function () {
    // return view('welcome');
    return 'hi';
});

Route::get('/my-route', function () {
    //echo "<h1> My Route Page</h1>";
    //return view('')
    //return viem('myroute');
    $data = ['val_a' => 'Hello World!'];
    $data['val_b'] = "Lalaval";
    return view('myfolder.mypage',$data);
});

Route::post('/my-route',function(Request $req){
    $data['myinput'] = $req -> input('myinput');
    return view ('myroute',$data);
});

Route::get('/my-display', function () {
    return view('myfolder.mypage2');
});

Route::post('/my-display',function(Request $req) {
    $data['myinputnumber'] = $req -> input('myinputnumber');
    return view('myroute2', $data);
});
