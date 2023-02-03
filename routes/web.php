<?php

use App\Events\TestEvent;
use Illuminate\Support\Facades\Route;

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


Route::controller(\App\Http\Controllers\MainController::class)->group(function () {
    Route::get('/session', 'session')->name('session');
    Route::post('/session', 'putSession')->name('sessionPost');
    Route::get('/', 'start')->name('start');
    Route::post('/startPost', 'startPost')->name('startPost');
    Route::get('/welcome', 'welcome')->name('welcome');
    Route::post('/welcomePost', 'welcomePost')->name('welcomePost');
    Route::get('/firstQuestion', 'firstQuestion')->name('firstQuestion');
    Route::post('/firstQuestionPost', 'firstQuestionPost')->name('firstQuestionPost');
    Route::get('/secondQuestion', 'secondQuestion')->name('secondQuestion');
    Route::post('/secondQuestionPost', 'secondQuestionPost')->name('secondQuestionPost');
});
