<?php

use App\Http\Controllers\Teachers\CourseController;
use App\Http\Controllers\DisciplinasController;
use App\Http\Controllers\ProfdiscpController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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
Route::get('/', function () { return view('index'); })->name('index');

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

// ----------------------------------------------------- //
// Group :: Academico

Route::get('/preparatorio', function() { return view('apoio_academico.preparatorio');})->name('preparatorio');

Route::get('/inscricao', function() { return view('apoio_academico.inscricao'); })->name('inscricao');

Route::get('/explicacoes', [ DisciplinasController::class, 'index'])->name('explicacoes');

Route::get('/explicacoes/{disciplina}', [ProfdiscpController::class, 'index']);
Route::get('/search', [ProfdiscpController::class, 'search'])->name('search');

Route::get('/perfil/{id}', [ProfessorController::class, 'PerfilShow']);
// /. Group :: Academico  bnb// ---------------------------------------------------- //

// *********************** Group :: Colaboradores ***************************

Route::get('/trabalhe_connosco', function() { return view('colaboradores.trabalhe_connosco'); })->name('trabalhe_connosco');

Route::get('/parceiros', function() { return view('colaboradores.parceiros'); })->name('parceiros');

Route::get('/recrutamento', function() { return view('colaboradores.recrutamento'); })->name('view_recrutamento');
// /. Group :: Colaboradores // ---------------------------------------------------- //

// ---------------------------------------------------- //
// Group Ajuda

Route::get('/fale_connosco', function() { return view('ajuda.fale_connosco'); })->name('fale_connosco');

Route::get('/vantagens', function() { return view('ajuda.vantagens'); })->name('vantagens');

Route::get('/como_funciona', function() { return view('ajuda.como_funciona'); })->name('como_funciona');
// ---------------------------------------------------- //
// Group Ajuda

// Group :: Users
Route::get('/user/{user}', [\App\Http\Controllers\UserController::class, 'ShowUser']);
// /. Group :: Users
// ---------------------------------------------------- //
Route::post('/colaboradores/recrutamento', [\App\Http\Controllers\RecrutamentoController::class, 'store'])->name('recrutamento');

Route::group(['middleware' => 'auth'], function() {
    //Route::post('index', [ProfessorController::class, 'update'])->name('update_info_professor');
    Route::post('/', [ProfdiscpController::class, 'store'])->name('add_disciplinas');
    Route::post('index', [UserController::class, 'update'])->name('UpdateUserInformation');
});


//Route::post('estudante/', 'StudentController@index')->name('student.perfil');

Route::middleware(['auth'])->group(function () {
   /* Route::prefix('teacher')->group(function () {
        Route::get('update-profile', 'TeacherController@updateProfile')->name('teacher.update-profile');
    });*/
    Route::post('/sms', [StudentController::class, 'storeMessage'])->name('student.store-message');
    Route::prefix('student')->group(function () {
        Route::get('profile', [StudentController::class, 'index'])->name('student.profile');
    });

    /*Route::prefix('admin')->group(function () {
        Route::prefix('users')->group(function () {
            Route::get('administrator', 'Admin\UserController@index')->name('admin.users.index');
        });
    });*/
});

Route::get('/teacher/respond-message/{id}', [ProfessorController::class, 'respondMessage'])->name('teacher.respond-message');
Route::post('/teacher/send-response/{id}', [ProfessorController::class, 'sendResponse'])->name('teacher.send-response');

