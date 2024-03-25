<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitudesController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;


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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware('auth')->group(function () {
    Route::get('/solicitudes/list', [SolicitudesController::class, 'index'])->name('solicitudes.index');
    Route::get('/solicitudes/create', [SolicitudesController::class, 'create'])->name('solicitudes.create');
    Route::get('/solicitudes/edit/{id}', [SolicitudesController::class, 'edit'])->name('solicitudes.edit');
    Route::delete('/solicitudes/delete/{id}', [SolicitudesController::class, 'destroy'])->name('solicitudes.destroy');
    Route::post('/solicitudes/store', [SolicitudesController::class, 'store'])->name('solicitudes.store');
    Route::get('/solicitudes/update/{id}', [SolicitudesController::class, 'update'])->name('solicitudes.update');

});


Route::middleware('auth')->group(function () {
    Route::get('/usuario/list', [UsuarioController::class, 'index'])->name('usuario.index');
    Route::get('/usuario/create', [UsuarioController::class, 'create'])->name('usuario.create');
    Route::get('/usuario/edit/{id}', [UsuarioController::class, 'edit'])->name('usuario.edit');
    Route::delete('/usuario/delete/{id}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
    Route::post('/usuario/store', [UsuarioController::class, 'store'])->name('usuario.store');
    Route::put('/usuario/update/{id}', [UsuarioController::class, 'update'])->name('usuario.update');

    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/rol/list', [RolController::class, 'index'])->name('rol.index');
    Route::get('/rol/create', [RolController::class, 'create'])->name('rol.create');
    Route::get('/rol/edit/{id}', [RolController::class, 'edit'])->name('rol.edit');
    Route::delete('/rol/delete/{id}', [RolController::class, 'destroy'])->name('rol.destroy');
    Route::post('/rol/store', [RolController::class, 'store'])->name('rol.store');
    Route::put('/rol/update/{id}', [RolController::class, 'update'])->name('rol.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/servicios/list', [ServiciosController::class, 'index'])->name('servicios.index');
    Route::get('/servicios/create', [ServiciosController::class, 'create'])->name('servicios.create');
    Route::get('/servicios/edit/{id}', [ServiciosController::class, 'edit'])->name('servicios.edit');
    Route::delete('/servicios/delete/{id}', [ServiciosController::class, 'destroy'])->name('servicios.destroy');
    Route::post('/servicios/store', [ServiciosController::class, 'store'])->name('servicios.store');
});
