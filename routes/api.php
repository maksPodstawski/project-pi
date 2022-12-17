<?php

declare(strict_types=1);

use App\Http\Controllers\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('Podstawski/305396/people', [PeopleController::class, 'index']);
Route::get('Podstawski/305396/people/{person}', [PeopleController::class, 'show']);
Route::post('Podstawski/305396/people', [PeopleController::class, 'create']);
Route::put('Podstawski/305396/people/{person}', [PeopleController::class, 'update']);
Route::delete('Podstawski/305396/people/{person}', [PeopleController::class, 'delete']);
