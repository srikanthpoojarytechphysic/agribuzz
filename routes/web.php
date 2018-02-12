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
    return view('welcome');
});

//------------------ADMIN-ROUTES-------------------------//

Route::get('/admin',[
  'uses' => 'adminController@index',
  'as'   => 'admin.home'
]);

//-----------------END-OF-ADMIN-ROUTES------------------//

//-------------------AD-ROUTES--------------------------//

Route::get('/admin/post/ads',[
  'uses' => 'adController@index',
  'as'   => 'post.ads'
]);

Route::POST('/admin/post/ads',[
  'uses' => 'adController@create',
  'as'   => 'create.ads'
]);

Route::get('/admin/ads/manage',[
  'uses' => 'adController@update',
  'as'   => 'manage.ads'
]);


//--------------------END-OF-AD-ROUTES------------------//

//--------------------CRUD-ROUTES-----------------------//

Route::post('/admin/{model}',[
  'uses' => 'crudController@create',
  'as'   => 'create'
]);

//-------------------END-OF-CRUD-ROUTES-----------------//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
