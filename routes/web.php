<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
    return view('login.index', [
        "title" => "Login"
    ]);
});

// Route::get('/barang', function () {
//     return view('barang', [
//         "title" => "barang"
//     ]);
// });
// routes/web.php

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Triandaru Anugrah",
        "tempat" => "Bandung",
        "email" => "triandaru2663@gmail.com",
        "no" => "082233562787"

    ]);
});

// Route::get('/kategori', function () {
//     return view('kategori', [
//         "title" => "Kategori"
//     ]);
// });

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Dashborad"
    ]);
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
