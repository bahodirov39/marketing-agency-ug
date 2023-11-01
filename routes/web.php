<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonalController;
use App\Http\Controllers\XMLController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Session;

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

Route::get('/locale/{lang}', [LocalizationController::class, 'setLang'])->name('lang');
Route::get('/{lang?}', [PagesController::class, 'index'])->name('home');

Route::get('{lang}/services', [ServiceController::class, 'services'])->name('services');
Route::get('{lang}/service/{slug}', [ServiceController::class, 'service_single'])->name('service_single');

Route::get('{lang}/testimonal', [TestimonalController::class, 'index'])->name('index.testimonal');
Route::post('/testimonal/store', [TestimonalController::class, 'store'])->name('add.testimonal');

Route::get('/{lang}/articles/{category?}', [BlogController::class, 'blogs'])->name('blogs');
Route::get('{lang}/article/{slug}', [BlogController::class, 'blog_single'])->name('blog_single');

Route::get('/project/{name?}', [PagesController::class, 'project'])->name('project');

Route::post('/send', [TestimonalController::class, 'toTelegram'])->name('toTelegram');

Route::post('/send/message', [TestimonalController::class, 'sendMessage'])->name('sendMessage');

Auth::routes();

Route::get('/sitemap/index/', [XMLController::class, 'index'])->name('xml');

// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
