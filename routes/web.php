<?php

use Illuminate\Support\Facades\Route;
use App\Models\Team;
use App\Http\Controllers\TeamController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/public/teams', function() {
    return view('public.teams', ['teams' => Team::all()]);
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
