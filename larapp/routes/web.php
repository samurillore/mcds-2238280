<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('hello', function () {
    return "<h1> Welcome to the Himalaya</h1>";
});

Route::get('allusers', function () {
    $users = App\Models\User::take(5)->get();
    //var_dump($users);
    dd($users);
});

Route::get('showuser/{id}', function (Request $request) {
    $id=$request->id;
    $user = App\Models\User::find($id);
    return view('showuser')->with('user',$user);
});

Route::get('reto/{id}', function (Request $request) {
    $id=$request->id;
    $today = Carbon::now();
    $info =array();
    for ($i=$id; $i < $id+10; $i++) { 
    	$user = App\Models\User::find($i);
    	$date  = Carbon::createFromTimestamp(strtotime($user->created_at));
    	$diff_in_weeks=$date->diffInWeeks($today);
    	$edad = Carbon::createFromDate($user->birthdate)->age;
    	$info[]=$user->fullname.'-'.$edad.'years old - '.'created '.$diff_in_weeks.' weeks ago';
    }
    dd($info);
    //$date = Carbon::now()->subYears(2);
	//$creado = Carbon::createFromDate($acreado)->age;
	//Carbon::createFromTimestamp($user->created_at)->week
});