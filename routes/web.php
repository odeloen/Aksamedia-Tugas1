<?php

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
    return redirect(route('post.view'));
});

Route::put('/put', function(Illuminate\Http\Request $request){
    echo "Ini Put<br>";
    echo "Nama : ".$request->input('nama').'<br>';
    echo "Tempat Lahir : ".$request->input('tempat-lahir').'<br>';
    echo "Tanggal Lahir : ".$request->input('tanggal-lahir').'<br>';
    echo "Jenis Kelamin : ".$request->input('jenis-kelamin').'<br>';
    echo "Email : ".$request->input('email').'<br>';
    echo "Alamat : ".$request->input('alamat').'<br>';
})->name('put.show');

Route::post('/post', function(Illuminate\Http\Request $request){
    echo "Ini Post<br>";
    echo "Nama : ".$request->input('nama').'<br>';
    echo "Tempat Lahir : ".$request->input('tempat-lahir').'<br>';
    echo "Tanggal Lahir : ".$request->input('tanggal-lahir').'<br>';
    echo "Jenis Kelamin : ".$request->input('jenis-kelamin').'<br>';
    echo "Email : ".$request->input('email').'<br>';
    echo "Alamat : ".$request->input('alamat').'<br>';
})->name('post.show');

Route::get('/post', function(){
    return view('formpost');
})->name('post.view');

Route::get('/put', function(){
    return view('formput');
})->name('put.view');
