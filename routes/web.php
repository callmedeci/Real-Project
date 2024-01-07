<?php

use App\Http\Controllers\AboutContrller;
use App\Http\Controllers\ArticlesContrller;
use App\Http\Controllers\GuessGameController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PlayWithJsIndexController;
use App\Http\Controllers\ProjectContrller;
use App\Http\Controllers\RollDiceController;
use App\Http\Controllers\ShowCardsController;
use App\Http\Controllers\SpeakingContrller;
use Illuminate\Support\Facades\Route;
use Filament\Http\Controllers\LoginController;
use Filament\Http\Controllers\LogoutController;
use Filament\Http\Controllers\PasswordResetLinkController;
use Filament\Http\Controllers\PasswordUpdateController;
use Filament\Http\Controllers\ProfileInformationController;
use Filament\Http\Controllers\RegisterController;
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

Route::get('/home', [IndexController::class, 'indexView'])
    ->name('home')
    ->middleware('adminCheck');

Route::get('/about', [AboutContrller::class, 'aboutView'])
    ->name('about')
    ->middleware('adminCheck');

Route::get('/articles', [ArticlesContrller::class, 'articlesView'])
    ->name('articles')
    ->middleware('adminCheck');

Route::get('/project', [ProjectContrller::class, 'projectsView'])
    ->name('projects')
    ->middleware('adminCheck');

Route::get('/index-js', [PlayWithJsIndexController::class, 'playWithJSIndexView'])
    ->name('index-js')
    ->middleware('adminCheck');

Route::get('/index-js/guessGame', [GuessGameController::class, 'guessGameView'])
    ->name('guessGame')
    ->middleware('adminCheck');

Route::get('/index-js/roll-dice-game', [RollDiceController::class, 'rollDiceView'])
    ->name('roll-dice-game')
    ->middleware('adminCheck');

Route::get('/index-js/showCards', [ShowCardsController::class, 'showCardsView'])
    ->name('showCards')
    ->middleware('adminCheck');



