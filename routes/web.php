<?php

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
    $data=[];
    $data['id']=5;
    $data['name']='oussama';
    return view('welcome',$data);
});
Route::get('/testlink', function () {

    return view('testlink');
});
Route::get('index','Front\FirsrController@getIndex');

Route::get('/test1', function () {
    return 'Ahmed';
})->name('zaz');
// route name
Route::namespace('Front')->group(function(){
  // all route only access controller or methods in folder name front

});
/*Route::prefix('users')->group(function(){
  Route::get('show','UserController@showName');
  Route::delete('delete','UserController@showName');
  Route::get('edit','UserController@showName');
});*/

Route::group(['namespace' => 'Front'],function(){
Route::get('second','SecondController@showString') ->middleware('auth');
Route::get('second1','SecondController@showString1');
Route::get('second2','SecondController@showString2');
});
Route::get('login',function (){
   return 'Must be Login to access this Route';
})->name('login');

Route::resource('news','NewsController');

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
