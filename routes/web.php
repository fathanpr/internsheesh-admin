<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PembimbingController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\MagangController;

// Route::get('/', function () {
    //     return view('welcome');
    // });


Auth::routes();

//LOGIN DAN LOGOUT
Route::get('/', [LoginController::class, 'index']);

Route::get('/login',function(){
    return view('auth.login');
})->name('login');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/tentang', function(){
    return view('admin.tentang');
});
//ADMIN WEB
Route::group(['prefix' => 'admin'], function(){
Route::get('/',[AdminController::class,'index'])->middleware('admin')->name('admin.index');
Route::get('/register',[AdminController::class,'register'])->middleware('admin')->name('admin.register');
Route::post('/store',[AdminController::class,'store'])->middleware('admin')->name('admin.store');
Route::get('/akun/magangadm',[AdminController::class,'tampilDataAdmin'])->middleware('admin')->name('magangadm.index');

Route::get('/akun/mahasiswa',[MahasiswaController::class,'index'])->middleware('admin')->name('mahasiswa.index');
Route::get('/akun/mahasiswa/delete/{id}',[MahasiswaController::class,'deleteAkun'])->middleware('admin')->name('mahasiswa.delete');
Route::get('/akun/mahasiswa/edit/{id}',[MahasiswaController::class,'edit'])->middleware('admin')->name('mahasiswa.edit');
Route::put('/akun/mahasiswa/update/{id}',[MahasiswaController::class,'update'])->middleware('admin')->name('mahasiswa.update');
Route::get('/data/mahasiswa',[MahasiswaController::class,'mahasiswaData'])->middleware('admin')->name('mahasiswa.data');
Route::get('/data/mahasiswa/{id}',[MahasiswaController::class,'editData'])->middleware('admin')->name('mahasiswa.editdata');
Route::put('/updatedata/mahasiswa/{id}',[MahasiswaController::class,'updateData'])->middleware('admin')->name('mahasiswa.updatedata');

Route::get('/akun/pembimbing',[PembimbingController::class,'index'])->middleware('admin')->name('pembimbing.index');
Route::get('/akun/pembimbing/delete/{id}',[PembimbingController::class,'deleteAkun'])->middleware('admin')->name('pembimbing.delete');
Route::get('/akun/pembimbing/edit/{id}',[PembimbingController::class,'edit'])->middleware('admin')->name('pembimbing.edit');
Route::put('/akun/pembimbing/update/{id}',[PembimbingController::class,'update'])->middleware('admin')->name('pembimbing.update');
Route::get('/data/pembimbing',[PembimbingController::class,'pembimbingData'])->middleware('admin')->name('pembimbing.data');
Route::get('/data/pembimbing/{id}',[PembimbingController::class,'editData'])->middleware('admin')->name('pembimbing.editdata');
Route::put('/updatedata/pembimbing/{id}',[PembimbingController::class,'updateData'])->middleware('admin')->name('pembimbing.updatedata');

Route::get('/akun/kaprodi',[KaprodiController::class,'index'])->middleware('admin')->name('kaprodi.index');
Route::get('/akun/kaprodi/delete/{id}',[KaprodiController::class,'deleteAkun'])->middleware('admin')->name('kaprodi.delete');
Route::get('/akun/kaprodi/edit/{id}',[KaprodiController::class,'edit'])->middleware('admin')->name('kaprodi.edit');
Route::put('/akun/mahasiswa/update/{id}',[KaprodiController::class,'update'])->middleware('admin')->name('kaprodi.update');
Route::get('/data/kaprodi',[KaprodiController::class,'kaprodiData'])->middleware('admin')->name('kaprodi.data');
Route::get('/data/kaprodi/{id}',[KaprodiController::class,'editData'])->middleware('admin')->name('kaprodi.editdata');
Route::put('/updatedata/kaprodi/{id}',[KaprodiController::class,'updateData'])->middleware('admin')->name('kaprodi.updatedata');

Route::get('/magang',[MagangController::class,'index'])->middleware('admin')->name('magang.index');
Route::get('/magang/create',[MagangController::class,'create'])->middleware('admin')->name('magang.create');
Route::post('/magang/store',[MagangController::class,'store'])->middleware('admin')->name('magang.store');
Route::get('/magang/edit/{id}',[MagangController::class,'edit'])->middleware('admin')->name('magang.edit');
Route::put('/magang/update/{id}',[MagangController::class,'update'])->middleware('admin')->name('magang.update');
Route::get('/magang/delete/{id}',[MagangController::class,'destroy'])->middleware('admin')->name('magang.delete');

})->middleware('admin');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
