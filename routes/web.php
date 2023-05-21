<?php

use App\Http\Controllers\CondominioController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\UserController;
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
	return view('auth.login');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

//Rutas Controlador 
Route::group(['middleware' => 'auth'], function () {

	//Rutas Reservas
	Route::resource('reserva', 'App\Http\Controllers\ReservaController', ['except' => ['show']]);
	Route::get('/reservas/index', [ReservaController::class, 'index'])->name('reserva.index');

	Route::resource('reservas', 'App\Http\Controllers\ReservaController', ['except' => ['show']]);
	Route::get('/reservas/create', [ReservaController::class, 'create'])->name('reservas.create');

	Route::resource('reservas/store', 'App\Http\Controllers\ReservaController', ['except' => ['show']]);
	Route::get('/reservas', [ReservaController::class, 'store'])->name('reservas.store');

	Route::resource('reservas', 'App\Http\Controllers\ReservaController', ['except' => ['show']]);
	Route::get('/reservas/edit/{id}', [ReservaController::class, 'edit'])->name('reservas.edit');

	Route::resource('reservas', 'App\Http\Controllers\ReservaController', ['except' => ['show']]);
	Route::put('/reservas/update/{id}', [ReservaController::class, 'update'])->name('reservas.update');

	//Rutas Condominios
	Route::resource('condominios', 'App\Http\Controllers\CondominioController', ['except' => ['show']]);
	Route::get('/condominios/index', [CondominioController::class, 'index'])->name('condominio.index');

	Route::resource('condominios', 'App\Http\Controllers\CondominioController', ['except' => ['show']]);
	Route::get('/condominios/create', [CondominioController::class, 'create'])->name('condominios.create');

	Route::resource('condominios/store', 'App\Http\Controllers\CondominioController', ['except' => ['show']]);
	Route::get('/condominios', [CondominioController::class, 'store'])->name('condominios.store');

	Route::resource('condominios', 'App\Http\Controllers\CondominioController', ['except' => ['show']]);
	Route::get('/condominios/edit/{id}', [CondominioController::class, 'edit'])->name('condominios.edit');

	Route::resource('condominios', 'App\Http\Controllers\CondominioController', ['except' => ['show']]);
	Route::put('/condominios/update/{id}', [CondominioController::class, 'update'])->name('condominio.update');

	//Rutas Users
	Route::resource('users', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('/users/index', [UserController::class, 'index'])->name('users.index');

	Route::resource('users/create', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('/users', [UserController::class, 'create'])->name('users.create');

	Route::resource('users', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('/users', [UserController::class, 'store'])->name('users.store');

	Route::resource('users/index', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('/users', [UserController::class, 'index'])->name('users.index');

	Route::resource('users', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

	Route::resource('users', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::put('/users/{user}', [UserController::class, 'update'])->name('user.update');
});
