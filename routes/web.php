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
    return redirect(route('article.list'));
});

// Authentication Routes...
Route::get('login', 'UserController@login')->name('login');
Route::post('login', 'UserController@doLogin');
//Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::get('products','ProductsController@index')->name('product.list');
Route::get('products/add','ProductsController@addProduct')->name('product.add');
Route::post('products/add','ProductsController@handlerAdd')->name('product.addhandler');

Route::get('articles','ArticleController@list')->name('article.list');
Route::get('articles/add','ArticleController@add')->name('article.add');
Route::post('articles/add','ArticleController@handlerAdd')->name('article.addhandler');
Route::get('articles/edit/{id}','ArticleController@edit')->name('article.edit');
Route::post('articles/edit/{id}','ArticleController@handlerEdit')->name('article.handler.edit');
Route::get('articles/delete/{id}','ArticleController@handlerDelete')->name('article.handler.delete');

Route::get('categories','CategoryController@list')->name('category.list');

Route::put('/put', function(Illuminate\Http\Request $request){
    $request->validate([
        'nama' => 'required',
        //'tempat-lahir' => '',
        //'tangga;-lahir' => '',
        //'jenis-kelamin' => '',
        //'email' => '',
        //'alamat' => '',
        //'motto' => '',
    ]);

    echo "Ini Put<br>";
    echo "Nama : ".$request->input('nama').'<br>';
    echo "Tempat Lahir : ".$request->input('tempat-lahir').'<br>';
    echo "Tanggal Lahir : ".$request->input('tanggal-lahir').'<br>';
    echo "Jenis Kelamin : ".$request->input('jenis-kelamin').'<br>';
    echo "Email : ".$request->input('email').'<br>';
    echo "Alamat : ".$request->input('alamat').'<br>';
})->name('put.show');

Route::post('/post', function(Illuminate\Http\Request $request){
    $message = [
        'nama.required' => 'Nama harus diisi. Minimal 4 karakter, maksimal 16 karakter',
        'nama.min' => 'Nama harus diisi. Minimal 4 karakter, maksimal 16 karakter',
        'nama.max' => 'Nama harus diisi. Minimal 4 karakter, maksimal 16 karakter',

        'tempat-lahir.required' => 'Tempat lahir harus diisi. Minimal 4 karakter, maksimal 16 karakter',
        'tempat-lahir.min' => 'Tempat lahir harus diisi. Minimal 4 karakter, maksimal 16 karakter',
        'tempat-lahir.max' => 'Tempat lahir harus diisi. Minimal 4 karakter, maksimal 16 karakter',

        'tanggal-lahir.required' => 'Tanggal lahir harus diisi',
        'jenis-kelamin.required' => 'Jenis kelamin harus diisi',
        'email.required' => 'Email harus diisi',

        'alamat.min' => 'Alamat boleh tidak diisi. Jika diisi harus 4-64 karakter',
        'alamat.max' => 'Alamat boleh tidak diisi. Jika diisi harus 4-64 karakter',

        'motto.max' => 'Motto boleh tidak diisi. Jika diisi harus kurang dari 128 karakter',
    ];

    $request->validate([
        'nama' => 'required|min:4|max:16',
        'tempat-lahir' => 'required|min:4|max:16',
        'tanggal-lahir' => 'required|date',
        'jenis-kelamin' => 'required',
        'email' => 'required|email',
        'alamat' => 'nullable|min:4|max:64',
        'motto' => 'nullable|max:128',
    ], $message);

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

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout',function(){
    Auth::logout();
    return redirect(route('article.list'));
});
