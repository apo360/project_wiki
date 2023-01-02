<?php

use App\Http\Controllers\Teachers\CourseController;
use App\Http\Controllers\DisciplinasController;
use App\Http\Controllers\ProfdiscpController;
use App\Http\Controllers\Teachers\ProfessorController;
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

// /. Group :: Home -- //

// ----------------------------------------------------- //
// Group :: Academico
Route::prefix('apoio_academico')->group(function() {
    Route::get('/', function () {
        return view('apoio_academico.index');
    })->name('apoio_academico');
});

Route::get('/preparatorio', function() {
    return view('apoio_academico.preparatorio');
})->name('preparatorio');

Route::get('/inscricao', function() { return view('apoio_academico.inscricao'); })->name('inscricao');

Route::get('/explicacoes', [ DisciplinasController::class, 'index'])->name('explicacoes');

Route::get('/explicacoes/{disciplina}', [ProfdiscpController::class, 'index']);

Route::get('/explicacoes/{disciplina}/perfil/{id}', [ProfessorController::class, 'PerfilShow']);
// /. Group :: Academico
// ---------------------------------------------------- //

// *********************** Group :: Colaboradores ***************************

Route::get('/trabalhe_connosco', function() { return view('colaboradores.trabalhe_connosco'); })->name('trabalhe_connosco');

Route::get('/parceiros', function() {
    return view('colaboradores.parceiros');
})->name('parceiros');

Route::get('/recrutamento', function() {
    return view('colaboradores.recrutamento');
})->name('view_recrutamento');
// /. Group :: Colaboradores
// ---------------------------------------------------- //

// ---------------------------------------------------- //
// Group Ajuda

Route::get('/fale_connosco', function() {
    return view('ajuda.fale_connosco');
})->name('fale_connosco');

Route::get('/vantagens', function() {
    return view('ajuda.vantagens');
})->name('vantagens');

Route::get('/como_funciona', function() {
    return view('ajuda.como_funciona');
})->name('como_funciona');
// ---------------------------------------------------- //
// Group Ajuda

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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

    Route::get('/professores/listagem', function () { return view('admin.professores.listagem'); })->name('professores.listagem');
});

    Route::get('/admin/disciplinas', function () { return view('admin.disciplinas'); })->name('disciplinas');
    
    Route::post('/admin/disciplinas', [DisciplinasController::class, 'store'])->name('cadastro_disciplina');

Route::group(['middleware' => 'auth'], function() {

    Route::group(['middleware' => 'role:student', 'prefix' => 'student', 'as' => 'student.'], function(){
        Route::resource('lessons', \App\Http\Controllers\Students\LessonControler::class);
    });

    Route::group(['middleware' => 'role:teacher', 'prefix' => 'teacher', 'as' => 'teacher.'], function(){

        Route::resource('courses', \App\Http\Controllers\Teachers\CourseController::class);

    });

    Route::post('/professores/informacao', [ProfessorController::class, 'update'])->name('update_info_professor');
     Route::get('/professores/informacao', [ProfessorController::class, 'index'])->name('UpdateProfessor');

    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function(){
        Route::resource('users', \App\Http\Controllers\Admin\UserControler::class);
    });
});

