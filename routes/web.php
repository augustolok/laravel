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
//    $sql = 'Select * from users where id= ?';
//    $user = DB::select($sql,[4]);
//    $user = DB::table('users')
//        ->where('id','=',4)
//        ->select('id','name')
//        ->first();
//    dd($user);

//    $user = new \App\User();
//    $user = \App\User::wherein('id', [28,29]);
//    $user ->name     = 'augusto cezar';
//    $user ->email    = 'augustoperez696@live.com';
//    $user ->password = bcrypt('123456');
//    $user->save();
//      $user-> delete();

    return view('welcome');

});
Route::get('hello/{name}', function ($name) {
    return view('hello',['name'=>$name]);
});