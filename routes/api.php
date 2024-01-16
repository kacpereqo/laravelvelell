<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

$prefix = "/remzak/310711";

Route::get($prefix . '/people', [PeopleController::class, 'index']);
Route::put($prefix . '/people/{id}', [PeopleController::class, 'update']);
Route::get($prefix . '/people/{id}', [PeopleController::class, 'show']);
Route::post($prefix . '/people', [PeopleController::class, 'create']);
Route::delete($prefix . '/people/{id}', [PeopleController::class, 'destroy']);

