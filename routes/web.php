<?php

use App\Http\Livewire\Pages\Admin\AddUser;
use App\Http\Livewire\Pages\Admin\ViewUser;
use App\Http\Livewire\Pages\Dashboard;

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\User\RuangGymUser;
use App\Http\Livewire\Pages\Admin\RuangGymAdmin;


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
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', Dashboard::class)->middleware(['auth'])->name('dashboard');
Route::get('/admin/view-user', ViewUser::class)->middleware(['auth'])->name('view-user');
Route::get('/admin/add-user', AddUser::class)->middleware(['auth'])->name('add-user');
Route::get('/admin/pinjam-alat', Dashboard::class)->middleware(['auth'])->name('dashboard');
Route::get('/admin/pinjam-ruang', ViewUser::class)->middleware(['auth'])->name('view-user');
Route::get('/admin/ruanggym', AddUser::class)->middleware(['auth'])->name('RuangGym');
Route::get('/user/pinjam-alat', Dashboard::class)->middleware(['auth'])->name('dashboard');
Route::get('/user/pinjam-ruang', ViewUser::class)->middleware(['auth'])->name('view-user');
Route::get('/user/ruanggym', RuangGym::class)->middleware(['auth'])->name('RuangGym');

require __DIR__ . '/auth.php';