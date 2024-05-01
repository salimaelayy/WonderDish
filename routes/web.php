<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StafController;
use App\Http\Controllers\TablleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
})->name("home");



Route::get('/staf', [StafController::class, "index"])->name("staf");
Route::post('/staf/post', [StafController::class, "store"])->name("staf.store");

Route::get('/menu', [MenuController::class, "menu"])->name('menu');
Route::post('/menu/store', [MenuController::class, "store"])->name('menu.store');
Route::put('/menu/update/{menu}', [MenuController::class, "update"])->name('menu.update');
Route::delete("/product/delete/{menu}", [MenuController::class, "destroy"])->name("menu.destroy");

Route::get('/blog', [MenuController::class, "blog"])->name("blog");
Route::get('/tablle', [TablleController::class, "tablle"])->name("tablle");
Route::get('/carte', [CartController::class, "index"])->name("cart");









Route::get('/calendar', [CalendarController::class, "index"])->name("calendar");
Route::post("/calendar/store", [CalendarController::class, "store"]);
Route::get("/calendar/show", [CalendarController::class, "show"]);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // admin route
    Route::get('/admin', [MenuController::class, "index"])->name("admin")->middleware("role:Admin");
    Route::get('/staf', [StafController::class, "index"])->name("staf")->middleware("role:staf");

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
