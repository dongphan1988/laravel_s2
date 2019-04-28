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

Route::get('/form', function (){
  return view('login');
});
Route::post('/form', function (\Illuminate\Http\Request $request){
    $user = $request->nameUser;
    $password = $request->password;
    if($user == "admin" && $password == "admin"){
        return view('welcome_admin');
    }else{
        return view('login_error');
    }
})->name('login');