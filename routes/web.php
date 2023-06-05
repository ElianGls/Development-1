<?php
 
use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ModalityController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\UserController;

 
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

    //Departments routes
    Route::get('/manager/home/departments/index', [DepartmentController::class, 'index'])->name('departments.index');
    Route::get('/manager/home/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
    Route::post('/manager/home/departments/store', [DepartmentController::class, 'store'])->name('departments.store');
    Route::get('/manager/home/departments/show', [DepartmentController::class, 'show'])->name('departments.show');
    Route::get('/manager/home/departments/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
    Route::delete('/manager/home/departments/destroy', [DepartmentController::class, 'destroy'])->name('departments.destroy');

    //Modalities routes
    Route::get('/manager/home/modalities/index', [ModalityController::class, 'index'])->name('modalities.index');
    Route::get('/manager/home/modalities/create', [ModalityController::class, 'create'])->name('modalities.create');
    Route::post('/manager/home/modalities/store', [ModalityController::class, 'store'])->name('modalities.store');
    Route::get('/manager/home/modalities/show', [ModalityController::class, 'show'])->name('modalities.show');
    Route::get('/manager/home/modalities/edit', [ModalityController::class, 'edit'])->name('modalities.edit');
    Route::delete('/manager/home/modalities/destroy', [ModalityController::class, 'destroy'])->name('modalities.destroy');

    //Careers routes
    Route::get('/manager/home/careers/index', [CareerController::class, 'index'])->name('careers.index');
    Route::get('/manager/home/careers/create', [CareerController::class, 'create'])->name('careers.create');
    Route::post('/manager/home/careers/store', [CareerController::class, 'store'])->name('careers.store');
    Route::get('/manager/home/careers/show', [CareerController::class, 'show'])->name('careers.show');
    Route::get('/manager/home/careers/edit', [CareerController::class, 'edit'])->name('careers.edit');
    Route::delete('/manager/home/careers/destroy', [CareerController::class, 'destroy'])->name('careers.destroy');

     //Semesters routes
     Route::get('/manager/home/semesters/index', [SemesterController::class, 'index'])->name('semesters.index');
     Route::get('/manager/home/semesters/create', [SemesterController::class, 'create'])->name('semesters.create');
     Route::post('/manager/home/semesters/store', [SemesterController::class, 'store'])->name('semesters.store');
     Route::get('/manager/home/semesters/show', [SemesterController::class, 'show'])->name('semesters.show');
     Route::get('/manager/home/semesters/edit', [SemesterController::class, 'edit'])->name('semesters.edit');
     Route::delete('/manager/home/semesters/destroy', [SemesterController::class, 'destroy'])->name('semesters.destroy');

     //Users routes
     Route::get('/manager/home/users/index', [UserController::class, 'index'])->name('users.index');
     Route::get('/manager/home/users/create', [UserController::class, 'create'])->name('users.create');
     Route::post('/manager/home/users/store', [UserController::class, 'store'])->name('users.store');
     Route::get('/manager/home/users/show', [UserController::class, 'show'])->name('users.show');
     Route::get('/manager/home/users/edit', [UserController::class, 'edit'])->name('users.edit');
     Route::delete('/manager/home/users/destroy', [UserController::class, 'destroy'])->name('users.destroy');
});