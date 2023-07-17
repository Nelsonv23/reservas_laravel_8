<?php

use App\Http\Controllers\CondominioController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventoController;
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

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('web', function () {
		return view('pages.web');
	})->name('web');

	Route::get('mapa', function () {
		return view('pages.mapa');
	})->name('mapa');

	Route::get('notificaciones', function () {
		return view('pages.notificaciones');
	})->name('notificaciones');

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
	Route::get('/reservas', [ReservaController::class, 'store'])->name('reservas.store');
	Route::get('/reservas/edit/{id}', [ReservaController::class, 'edit'])->name('reservas.edit');
	Route::put('/reservas/update/{id}', [ReservaController::class, 'update'])->name('reservas.update');

	//Rutas Condominios
	Route::resource('condominios', 'App\Http\Controllers\CondominioController', ['except' => ['show']]);
	Route::get('/condominios/index', [CondominioController::class, 'index'])->name('condominio.index');
	Route::get('/condominios/create', [CondominioController::class, 'create'])->name('condominios.create');
	Route::get('/condominios', [CondominioController::class, 'store'])->name('condominios.store');
	Route::get('/condominios/edit/{id}', [CondominioController::class, 'edit'])->name('condominios.edit');
	Route::put('/condominios/update/{id}', [CondominioController::class, 'update'])->name('condominio.update');

	//Rutas Users
	Route::resource('users', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('/users/index', [UserController::class, 'index'])->name('users.index');
	Route::get('/users', [UserController::class, 'create'])->name('users.create');
	Route::get('/users', [UserController::class, 'store'])->name('users.store');
	Route::get('/users', [UserController::class, 'index'])->name('users.index');
	Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
	Route::put('/users/{user}', [UserController::class, 'update'])->name('user.update');

	//Rutas Evento/Agenda
	Route::get('/evento', [EventoController::class, 'index'])->name('evento.index');
	Route::post('/evento', [EventoController::class, 'store'])->name('evento.store');
});
