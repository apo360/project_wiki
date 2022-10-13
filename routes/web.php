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
    return view('index');
});

// Group :: Home
Route::get('/principal', function () {
    return view('home.principal');
});

Route::get('/quem_somos', function () {
    return view('home.quem_somos');
})->name('quem_somos');
// /. Group :: Home -- //

// ----------------------------------------------------- //
// Group :: Academico
Route::prefix('academico')->group(function() {
    Route::get('', function () {
        return view('academico.academico');
    })->name('academico');

    Route::get('/{paramAcad?}', function($paramAcad = null) {
        return view('academico.'.$paramAcad);
    });
});
// /. Group :: Academico
// ---------------------------------------------------- //

// Group :: Users
Route::get('/user/{user}', [\App\Http\Controllers\UserController::class, 'ShowUser']);

/* Route::prefix('user')->group(function() {
    Route::get('/user/{id?}', function ($id = null) {
        return view('profile.'.$id);
    });
}); */

// /. Group :: Users
// ---------------------------------------------------- //

Route::get('/colaborador', function () {
    return view('colaboradores.colaborador');
});

Route::get('/repositorio', function () {
    return view('repositorio.repositorio');
})->name('repositorio');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

