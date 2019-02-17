<?php
use App\User;
use Carbon\Carbon;
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


Auth::routes();

// Route::post('/my_logout',function () {
// 	$user=User::find(\Auth::user()->id); 
// 	//dd($user);   
//     $user->last_visit = Carbon::now();//->toDateTimeString();
//     $user->save();
// //Auth::revoke();
// return redirect('/');

// });
Route::post('/register', 'Auth\RegisterController@create');
Route::get('/home', 'HomeController@index')->name('home');
