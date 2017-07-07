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



Route::get('/', 'PagesController@index');
Route::get('blade', 'PagesController@blade');

Route::get('users/create',['uses'=>'UsersController@create']);
Route::post('users',['uses'=> 'UsersController@store']);





/*Route::get('users',function(){
    $users =[
        '0' => ['first_name'=>'Oguzhan',
        'last_name'=>'Simsek',
            'location'=>'Istanbul'],
        '1' => ['first_name'=>'Mehmet ali',
        'last_name'=>'yapistır',
        'location'=>'Ankara']
    ];
    return $users;

});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'authenticated'],function(){
    Route::get('settings', 'PagesController@settings');
    Route::get('profile','PagesController@profile');
    Route::get('users','UsersController@index');
});