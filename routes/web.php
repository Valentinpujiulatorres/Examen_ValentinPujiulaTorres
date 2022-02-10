<?php

use App\Http\Controllers\PublicacionController;
use Illuminate\Support\Facades\Route;
use Laravel\Sail\Console\PublishCommand;

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
Route::resource('publicacion', PublicacionController::class)->middleware(['auth']);

Route::get('/', function () {
    return redirect('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
