<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtisteController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('home', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

 Route::get('/', function () {
      return view('home');
 })->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('home1', [MainController::class, 'home1'])->name('home1');

/* Route liées à ADMIN */
Route::get('admin_dashboard', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard')->middleware(['auth']);
Route::get('admin_gestion_users', [AdminController::class, 'admin_gestion_users'])->name('admin_gestion_users')->middleware(['auth']);
Route::get('admin_gestion_artistes', [AdminController::class, 'admin_gestion_artistes'])->name('admin_gestion_artistes')->middleware(['auth']);
/* END */

Route::get('artiste_dashboard', [ArtisteController::class, 'artiste_dashboard'])->name('artiste_dashboard')->middleware(['auth']);
