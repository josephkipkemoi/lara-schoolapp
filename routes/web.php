<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

// Navigation Controllers
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

// Admin Dashboard Controller
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); 

// These routes to be used by admin when adding/removing personnel/staff employed by school
Route::controller(PersonnelController::class)->group(function(){
  Route::get('/personnel/create', 'create')->name('personnel.create');
  Route::post('/personnel', 'store')->name('personnel.store');
  Route::delete('/personnel/{personnel}', 'destroy')->name('personnel.destroy');
});


// These routes to be used by admin when adding/removing school events
Route::controller(EventController::class)->group(function(){
  Route::get('/events/create', 'create')->name('event.create');
  Route::post('/events', 'store')->name('event.store');
});


// These routes to be used by admin when adding/removing school reports
Route::controller(ReportController::class)->group(function() {
  Route::get('reports/create', 'create')->name('report.create');
  Route::post('reports/report', 'store')->name('report.store');
  Route::post('reports', 'storereport')->name('report.storereport');
  Route::delete('reports/{report}/remove', 'deletereport')->name('report.deletereport');
});


// Download REPORTS PDF
Route::get('/report/show/{report}', function($report) {
  $storage = Storage::download($report);
 
  return $storage;
});

// Download DOWNLOADS PDF
Route::get('/downloads/show/{download}', function($download) {
  $download = Storage::download($download);

  return $download;
});

// These routes to be used when uploading file that will be on the download route
Route::controller(DownloadController::class)->group(function(){
  Route::get('downloads/create', 'create')->name('download.create');
  Route::post('downloads/store', 'store')->name('download.store');
});


// This route will be used by general users who wish to leave the school management a message
Route::post('/conctact/store', [ContactController::class, 'store'])->name('contact.store');

// This route will be used by admin when adding photo albums
Route::controller(AlbumController::class)->group(function(){
  Route::get('/photos/create', 'create')->name('photo.create');
  Route::post('/photos', 'store')->name('album.store');
  Route::get('/albums/{album}', 'show')->name('album.show');
});


// Route showing contact notifications
Route::get('/notifications', [NotificationController::class, 'show'])->name('notification.show');

// These Routes will be used by admin to post/edit about page
Route::controller(AboutController::class)->group(function() {
  Route::post('/about', 'store')->name('about.store');
  Route::get('/about/create', 'create')->name('about.create');
});

// These routes will be used by admin to post/remove board members
Route::controller(BoardController::class)->group(function() {
  Route::post('/board', 'store')->name('management.store');
  Route::get('/board/create', 'create')->name('management.create');
});

require __DIR__.'/auth.php';
