<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StaffController;
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

 
Route::get('/', [LandingController::class, '__invoke']);
Route::get('/about', [AboutController::class, '__invoke']);
Route::get('/management', [ManagementController::class,'__invoke']);
Route::get('/departments', [DepartmentController::class,'__invoke']);
Route::get('/events', [EventController::class,'__invoke']);
Route::get('/staff', [StaffController::class,'__invoke']);
Route::get('/gallery', [GalleryController::class,'__invoke']);
Route::get('/contact', [ContactController::class,'__invoke']);
Route::get('/reports', [ReportController::class,'__invoke']);
Route::get('/downloads', [DownloadController::class, '__invoke']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/personnel/create', [PersonnelController::class, 'create'])->name('personnel.create');
Route::post('/personnel', [PersonnelController::class, 'store'])->name('personnel.store');
Route::delete('/personnel/{personnel}', [PersonnelController::class, 'destroy'])->name('personnel.destroy');

Route::get('/events/create', [EventController::class, 'create'])->name('event.create');
Route::post('/events', [EventController::class, 'store'])->name('event.store');

require __DIR__.'/auth.php';
