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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', function () {
    return view('accueil.index');
});

Route::get('/page', 'accueilController@logic')->name('page1');

Route::get('/create', 'accueilController@create')->name('create');
 
Route::get('/indexe', 'accueilController@index')->name('indexe');

Route::get('/edit', 'accueilController@edit')->name('edit');

Route::get('/request', function (Request $request) {
   //dd est la même chose que var_dump
    dd($request->method());
    
});

Route::post('/update', 'accueilController@update')->name('update');

Route::resource('/users', 'UsersController');

Route::get('/url', function(){
    echo url("posts").'<br/>';
    
    echo secure_url('secure').'<br/>';
    
    echo url()->current().'<br/>';
    
    echo url()->full().'<br/>';
    
    echo url()->previous().'<br/>';
    
    echo route('edit').'<br/>';
    
    echo asset('img/user.png');
    

});

Route::get('/session', function(Request $request) {
    $request->session()->put('name', 'hakim');
    $value =$request->session()->get('name');
    $value;
    $request->session()->flash('status', 'task was succesful!');
    
    //dd($request->session()->get('status'));
    $request->session()->forget('name');
    $request->session()->flush();
    dd($value);
    
});



Route::get('/query', function(){
   
    $users =DB::table('users')->orderby('name', 'asc')->wherenotbetween('id', [1,3])->get();
    
    foreach ($users as $user) {
        echo $user->name .'<br/>';
    }
    //wherein
    //wherenotin
    //wherenull
    //wherenotnull
    //wheredate / wheremonth / whereday / whereyear
    
    $userse = DB::table('users')->pluck('id', 'name', 'email');
    dd($userse);
      
});

Route::resource('/categories', 'CategoriesController');


    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
