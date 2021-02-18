<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\ProgramController;
use App\http\Controllers\ContactController;
use App\http\Controllers\CategoryController;

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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category') -> group(function() {
    Route::get('/marbel-edu-games', [CategoryController::class, 'eduGames']);
    Route::get('/marbel-and-friends-kids-games', [CategoryController::class, 'kidsGames']);
    Route::get('/riri-story-books', [CategoryController::class, 'books']);
    Route::get('/kolak-kids-songs', [CategoryController::class, 'songs']);
});
Route::get('/news', function() {
    echo 'Halaman News, Klik <a target="_blank" rel="noopener noreferrer" href="https://www.educastudio.com/news">disini</a>';
});

Route::get('/news/{title}', function($title) {
    echo 'Judul artikel : ' . $title . '. Klik <a target="_blank" rel="noopener noreferrer" href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19">disini</a>';
});

Route::prefix('program') -> group(function() {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magangs', [ProgramController::class, 'magangs']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
});

Route::get('/about-us', function() {
    echo 'Tentang Kami, Klik <a target="_blank" rel="noopener noreferrer" href="https://www.educastudio.com/about-us">disini</a>';    
});

Route::resource('/contact-us', ContactController::class, ['only' => ['index']]);