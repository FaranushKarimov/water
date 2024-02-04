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
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Modeli\WaterBasinZoneController;


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/', function () {
    if(Auth::check()) {
        return redirect(route('home'));
    }
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {
    // Protected routes
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('home/history', [HomeController::class, 'history'])->name('home.history');
    Route::get('home/news', [HomeController::class, 'news'])->name('home.news');
    Route::get('home/database-characteristics', [HomeController::class, 'databaseCharacteristics'])->name('home.database.characteristics');
    Route::post('/home', [HomeController::class, 'index'])->name('home.index');
    Route::resource('water-basin-zones', WaterBasinZoneController::class);
    Route::get('/export/excel', [WaterBasinZoneController::class, 'exportExcel'])->name('export.excel');
    Route::get('export-pdf', [WaterBasinZoneController::class, 'downloadPDF'])->name('export-pdf');
    Route::post('/import/excel', [WaterBasinZoneController::class, 'importExcel'])->name('import.excel');
});
