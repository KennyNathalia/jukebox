<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\QueueController;

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

Route::get('/', [SongController::class, 'index']);

Route::get('/home', [SongController::class, 'index']);

Route::get('home/genre}', [SongController::class, 'update'])->name('home.genre');

Route::get('/home/soul', [SongController::class, 'update']);

Route::get('/song/detail/{id}', [SongController::class, 'songDetail']);

Route::get('/queue', [App\Http\Controllers\QueueController::class, 'queue'])->name('queue');

Route::get('/queue/add/{id}', [App\Http\Controllers\QueueController::class, 'addSong'])->name('addSong');

Route::get('/queue/delete/{id}', [App\Http\Controllers\QueueController::class, 'removeSong'])->name('removeSong');

Route::get('/queue/clear', [App\Http\Controllers\QueueController::class, 'clearQueue'])->name('clearQueue');

Route::get('/playlist', [App\Http\Controllers\PlaylistController::class, 'index']);

Route::group(['middleware' => ['auth']], function() {
    Route::post('/playlist/create', [App\Http\Controllers\PlaylistController::class, 'create'])->name("playlistCreate");
    Route::post('/playlist/new', [App\Http\Controllers\PlaylistController::class, 'newName']);
    Route::get('/playlist/addsong/to/playlist/{id}/{songId}', [App\Http\Controllers\PlaylistController::class, 'addSongToPlaylist']);
    Route::get('/playlist/save', [App\Http\Controllers\PlaylistController::class, 'save']);
    Route::get('playlist/detail/{id}', [App\Http\Controllers\PlaylistController::class, 'detail'])->name('playlistDetail');
    Route::get('/playlist/delete/{id}', [App\Http\Controllers\PlaylistController::class, 'delete']);
    Route::get('/playlist/editName/{id}', [App\Http\Controllers\PlaylistController::class, 'playlistName']);
    Route::get('/playlist/remove/{id}/{songId}', [App\Http\Controllers\PlaylistController::class, 'removeSong']);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('/');

Auth::routes();