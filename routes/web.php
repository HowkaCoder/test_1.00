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

Route::get('/setting', function () {
    return view('welcome');
});
Route::get('/user/{id}/{name}' , function($id , $name){
    return 'ID: '.$id."<br> Name: ".$name;
});
Route::get('/' , 'MainController@home')->name('home');

Route::get('/about' , 'MainController@about')->name('about');

Route::get('/dsb' , 'MainController@dsb')->name('dsb');

Route::get('/form' , 'MainController@form')->name('form');

Route::get('/api/{id}' , function($id){
    // $db = DB::table('contect_models')->find($id);
    $db = App\ContectModel::find($id);
    dd($db);
    return view('api' , compact('db'));
} );

Route::post('/form/check' ,'MainController@form_check')->name('contact-form');

Route::post('/admin/check' , 'MainController@admin_check')->name('admin-form');

Route::resource('subject', 'SubjectController');


?>