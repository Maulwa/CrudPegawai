<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\kategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */
 
Route::get('/', function () {
    return view('welcome');
});
 
 
// // ROUTE MENGGUNAKAN FUNCTION ANONYMOUSE
// Route::get('/kategori', function () {
//     return "Data kategori";
// });
 
// // ketika ingin memasukkan parameter harus di apit dua kurung kurawal
// Route::get('/artikel/{id}/ipk/{nama}', function ($id, $name) {
//     return "Data artikel yang idnya $id dan namanya adalah $name";
// });
// // ROUTE YANG REDIRECT VIEW
// Route::get('/kategori', function () {
//     return view('kategori');
// });
 
// route dengan controller
Route::get('/teacher', [indexController::class, 'teacher'])->name('table');
Route::get('/teacher/tambah', [indexController::class, 'tambah'])->name('template.Teachers.tambah');
Route::post('/teacher/store', [indexController::class, 'store'])->name('Teachers.store');
Route::get('/teacher/show/{id}', [indexController::class, 'show'])->name('template.Teachers.show');
Route::get('/teacher/edit/{id}', [indexController::class, 'edit'])->name('template.Teachers.edit');
Route::put('/teacher/update/{id}', [indexController::class, 'update'])->name('template.Teachers.update');
Route::get('/teacher/destroy{id}', [indexController::class, 'destroy'])->name('template.Teachers.destroy');

// ============================
// Courses
Route::get('/Course', [CoursesController::class, 'index'])->name('course');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
