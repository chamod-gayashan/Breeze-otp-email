<?php

use App\Http\Controllers\DailtDataController;
use App\Http\Controllers\MotorRatingDashboard\MotorRatingDashboardController;
use App\Http\Controllers\Mrt\MRTController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\RatesController;
use App\Http\Controllers\TwoFactorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});



Route::get('/myquotes', [QuotationController::class, 'index'])->middleware(['auth', 'verified'])->name('myquotes');


Route::get('/new', function () {
    return view('broker.new');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth','twofactor'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/home', [QuotationController::class, 'home'])->name('uuu');
});

Route::middleware('auth')->group(function () {
    Route::get('verify/resend', [TwoFactorController::class, 'resend'])->name('verify.resend');
    Route::resource('verify', TwoFactorController::class)->only(['index', 'store']);
});


require __DIR__.'/auth.php';
