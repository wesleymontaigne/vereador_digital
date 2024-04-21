<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TerminalController;

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

Route::get('/', [BlogController::class, 'indexView'])->name('blog.indexView');

Route::get('/dashboard', function () {
if(Auth::user()->is_admin){ 
return view('DashdashboardAdmin');
}
return view('dashboard');

})->middleware(['auth'])->name('dashboard');

Route::get('/DashdashboardAdmin', function () { return view('DashdashboardAdmin'); })->middleware(['auth','isAdmin'])->name('DashdashboardAdmin');

Route::get('/terminal', [TerminalController::class, 'index'])->name('terminal.index')->middleware(['auth','isAdmin']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('blog', BlogController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'isAdmin']);
Route::get('readblog/{id}',[BlogController::class,'show'])->name('readblog'); 

require __DIR__.'/auth.php';
