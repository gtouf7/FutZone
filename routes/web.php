<?php

use Illuminate\Support\Facades\Route;
use App\Models\Team;
use App\Models\Player;
use App\Http\Controllers\TeamController; 
use App\Http\Controllers\PlayerController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teams/index', function() {
    return view('teams.index', ['teams' => Team::all()]);
});
Route::get('/players/index', function() {
    return view('players.index', ['players' => Player::all()]);
});

//Team
Route::get(
    'teams/trash/{id}',
    [TeamController::class, 'trash']
)->name('teams.trash');

Route::get(
    'teams/trashed/',
    [TeamController::class, 'trashed']
)->name('teams.trashed');

Route::get(
    'teams/restore/{id}',
    [TeamController::class, 'trash']
)->name('teams.restore');

Route::resource('teams', TeamController::class);

//Player
Route::get(
    'players/trash/{id}',
    [PlayerController::class, 'trash']
)->name('players.trash');

Route::get(
    'players/trashed/',
    [PlayerController::class, 'trashed']
)->name('players.trashed');

Route::get(
    'players/restore/{id}',
    [PlayerController::class, 'restore']
)->name('players.restore');

Route::resource('players', PlayerController::class);