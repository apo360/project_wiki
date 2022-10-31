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
Route::prefix('apoio_academico')->group(function() {
    Route::get('/', function () {
        return view('apoio_academico.index');
    })->name('apoio_academico');

    Route::get('/{paramAcad?}', function($paramAcad = null) {
        return view('apoio_academico.'.$paramAcad);
    });
});
// /. Group :: Academico
// ---------------------------------------------------- //

// Group :: Colaboradores
Route::prefix('colaboradores')->group(function() {
    Route::get('/', function () {
        return view('colaboradores.index');
    })->name('colaboradores');

    Route::get('/{paramColab?}', function($paramColab = null) {
        return view('colaboradores.'.$paramColab);
    });
});
// /. Group :: Colaboradores
// ---------------------------------------------------- //

// Group Ajuda
Route::prefix('ajuda')->group(function() {
    Route::get('/', function () {
        return view('ajuda.index');
    })->name('ajuda');

    Route::get('/{paramAjuda?}', function($paramAjuda = null) {
        return view('ajuda.'.$paramAjuda);
    });
});
Route::prefix('admin')->group(function() {
    Route::get('/users', function () {
        return view('admin.users.index');
    })->name('admin.users.index');
    
});



// Group :: Users
Route::get('/user/{user}', [\App\Http\Controllers\UserController::class, 'ShowUser']);
// /. Group :: Users
// ---------------------------------------------------- //

Route::post('/colaboradores/recrutamento', [\App\Http\Controllers\RecrutamentoController::class, 'store'])->name('recrutamento');

Route::post('/admin/users/index', [\App\Http\Controllers\DisciplinasController::class, 'store'])->name('disciplinas');


Route::get('/repositorio', function () {
    return view('repositorio.repositorio');
})->name('repositorio');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['middleware' => 'auth'], function() {

    Route::group(['middleware' => 'role:student', 'prefix' => 'student', 'as' => 'student.'], function(){
        Route::resource('lessons', \App\Http\Controllers\Students\LessonControler::class);
    });

    Route::group(['middleware' => 'role:teacher', 'prefix' => 'teacher', 'as' => 'teacher.'], function(){
        Route::resource('courses', \App\Http\Controllers\Teachers\CourceController::class);
    });

    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function(){
        Route::resource('users', \App\Http\Controllers\Admin\UserControler::class);
        
        Route::get('/', function () {
            return view('admin/disciplinas');
        })->name('disciplinas');

    });
});

