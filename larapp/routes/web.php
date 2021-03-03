<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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
Route::redirect('/','/en');
Route::group(['prefix' =>'{language}'], function(){
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

Route::get('challenge', function () {
	
	foreach(App\Models\User::all()->take(10) as $user){
		$years = Carbon::createFromDate($user->birthdate)->diff()->format("%y years old");
		$since = Carbon::parse($user->created_at);
		echo $user->fullname . " - " . $years . " - " . $since->diffForHumans()  . "<br>";
	}
});

Route::get('challenge', function () {
	
	foreach(App\Models\User::all()->take(10) as $user){
		$years    = Carbon::createFromDate($user->birthdate)->diff()->format("%y years old");
		$since    = Carbon::parse($user->created_at);
		$result[] = $user->fullname . " - " . $years . " - " . $since->diffForHumans()  . "<br>";
	}
	dd($result);
});

Route::get('example', function () {
	return view('greeting',['name'=>'James']);
});

Route::get('example1', function () {
	return view('admin.profile',['name'=>'Santiago']);
});

Route::get('example2', function () {
	if (View::exists('admini.profile')) {
			$users = App\Models\User::take(5)->get();
			dd($users);
		}
		else{
			$id=99;
			$user = App\Models\User::find($id);
			return view('showuser')->with('user',$user);
		}
});

Route::get('example3', function () {
    $id=40;
    $today = Carbon::now();
    $info =array();
    for ($i=$id; $i < $id+10; $i++) { 
    	$user = App\Models\User::find($i);
    	$date  = Carbon::createFromTimestamp(strtotime($user->created_at));
    	$diff_in_weeks=$date->diffInWeeks($today);
    	$edad = Carbon::createFromDate($user->birthdate)->age;
    	$info[]=$user->fullname.'-'.$edad.'years old - '.'created '.$diff_in_weeks.' weeks ago';
    }
	return view('admin.example3',['information'=>$info[0]]);
});

Route::get('example4', function () {
	$i=rand(0,2);
	return view('admin.example4',['i'=>$i]);	
});

Route::get('example5', function (Request $request) {
    $id=45;
    $user = App\Models\User::find($id);
    return view('showuser')->with('user',$user);
});

Route::get('example6', function (Request $request) {//no funciona
    $id=45;
    $user = App\Models\User::all();
    return view('admin.example6',compact('user'));
});

Route::get('/viewusers', function (Request $request) {
	$users = App\Models\User::all();
    return view('viewusers')->with('users',$users);
});

Route::get('examples', function () {
    return view('admin.examples');
});

Route::get('test', function () {
	App::setLocale('es');
	if (App::isLocale('es')){
    	dd(App::getLocale());
	}
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});