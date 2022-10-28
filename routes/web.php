<?php

use App\Http\Controllers\CasesController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\IndividualController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\VisitController;
use Faker\Provider\Base;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('/auth/login',[
        'title' => 'Login Page'
    ]);
} )->name('login');

Route::post('/auth/login', [LoginController::class, 'authenticate']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/auth/registration', [RegistrationController::class,'index'])->name('registration');
Route::post('/auth/registration', [RegistrationController::class, 'save']);

/* auth group */
Route::middleware(['auth'])->group(function () {

    /* Route Profile */
    Route::get('/admin/features/profile', [DashboardController::class, 'profile']);
    
    /* Route Dashboard */
    Route::get('/admin/features/dashboard', [DashboardController::class, 'index']);

    /* Route Daftar Siswa */
    Route::get('/admin/features/siswa-print/{id}', [SiswaController::class, 'print'])->name('print.siswa');
    Route::get('/admin/features/siswa-edit/{id}', [SiswaController::class, 'edit']);
    Route::get('/admin/features/siswa-detail/{id}', [SiswaController::class, 'show']);
    Route::delete('/admin/features/siswa-destroy/{id}', [SiswaController::class, 'destroy'])->name('destroy.siswa');
    Route::name('siswa.')->group(function () {
        Route::get('/admin/features/siswa',[SiswaController::class, 'index'])->name('index');
        Route::post('create', [SiswaController::class, 'store'])->name('store.siswa');
        Route::post('/update',[SiswaController::class,'updateSiswa'])->name('update.siswa');
    });
    
    /* Route Jurnal Page */
    Route::get('/admin/features/jurnal', [JurnalController::class, 'index'])->name('index');
    Route::get('/admin/features/jurnal-edit/{id}', [JurnalController::class, 'edit']);
    Route::delete('/jurnal-destroy/{id}', [JurnalController::class, 'destroy']);
    Route::prefix('jurnal')->group(function() {
        Route::name('jurnal.')->group(function () {
            Route::post('create', [JurnalController::class, 'store'])->name('store.jurnal');
            Route::post('/update',[JurnalController::class,'updateJurnal'])->name('update.jurnal');
        });
    });

    /* Route Visit Page */
    Route::get('/admin/features/visit', [VisitController::class, 'index'])->name('visit.index');
    Route::get('/admin/features/visit-edit/{id}', [VisitController::class, 'edit']);
    Route::get('/admin/features/visit-detail/{id}', [VisitController::class, 'show']);
    Route::delete('/visit-destroy/{id}', [VisitController::class, 'destroy']);
    Route::prefix('visit')->group(function() {
        Route::name('visit.')->group(function () {
            Route::post('create', [VisitController::class, 'store'])->name('store.visit');
            Route::post('/update', [VisitController::class, 'updateVisit'])->name('update.visit');
        });
    });

    /* Route Individual Page*/
    Route::get('/admin/features/individual', [IndividualController::class, 'index'])->name('individual.index');
    Route::get('/admin/features/individu-edit/{id}', [IndividualController::class, 'edit']);
    Route::get('/admin/features/individu-detail/{id}', [IndividualController::class, 'show']);
    Route::delete('/individual-destroy/{id}', [IndividualController::class, 'destroy']);
    Route::prefix('individual')->group(function () {
        Route::name('individual.')->group(function () {
            Route::post('create', [IndividualController::class, 'store'])->name('store.individual');
            Route::post('/update', [IndividualController::class, 'updateIndividual'])->name('update.individual');
        });
    });

    /* Route Group Page */
    Route::get('/admin/features/group', [GroupController::class, 'index'])->name('group.index');
    Route::prefix('group')->group(function () {
        Route::name('group.')->group(function () {
            Route::post('create', [GroupController::class, 'store'])->name('store.group');
            // Route::post('/update', [IndividualController::class, 'updateIndividual'])->name('update.individual');
        });
    });

    /* Route Cases Page */
    Route::get('/admin/features/cases', [CasesController::class, 'index'])->name('cases.index');
    Route::get('/admin/features/cases-edit/{id}', [CasesController::class, 'edit']);
    Route::delete('/cases-destroy/{id}', [CasesController::class, 'destroy']);
    Route::prefix('cases')->group(function () {
        Route::name('cases.')->group(function () {
            Route::post('create', [CasesController::class, 'store'])->name('store.cases');
            Route::post('/update', [CasesController::class, 'updateCases'])->name('update.cases');
        });
    });
});