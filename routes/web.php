<?php
 
use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\CampusController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Auth::routes();
   
//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
   
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
   
//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
   
//Admin Routes List
Route::middleware(['auth', 'user-access:manager'])->group(function () {
   
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');

    //Schedules routes
    Route::get('/manager/home/schedules/index', [ScheduleController::class, 'index'])->name('schedules.index');
    Route::get('/manager/home/schedules/create', [ScheduleController::class, 'create'])->name('schedules.create');
    Route::post('/manager/home/schedules/store', [ScheduleController::class, 'store'])->name('schedules.store');
    Route::get('/manager/home/schedules/show', [ScheduleController::class, 'show'])->name('schedules.show');
    Route::get('/manager/home/schedules/edit', [ScheduleController::class, 'edit'])->name('schedules.edit');
    Route::delete('/manager/home/schedules/destroy', [ScheduleController::class, 'destroy'])->name('schedules.destroy');

    //Campuses routes
    Route::get('/manager/home/campuses/index', [CampusController::class, 'index'])->name('campuses.index');
    Route::get('/manager/home/campuses/create', [CampusController::class, 'create'])->name('campuses.create');
    Route::post('/manager/home/campuses/store', [CampusController::class, 'store'])->name('campuses.store');
    Route::get('/manager/home/campuses/show', [CampusController::class, 'show'])->name('campuses.show');
    Route::get('/manager/home/campuses/edit', [CampusController::class, 'edit'])->name('campuses.edit');
    Route::delete('/manager/home/campuses/destroy', [CampusController::class, 'destroy'])->name('campuses.destroy');
});