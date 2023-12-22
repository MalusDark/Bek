<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardsController;

Route::get('/Search/{name}', [CardsController::class, 'SearchService']);
Route::get('/', fn () => view('app'));
Route::get('/AllList/',[CardsController::class, 'AllList']);
Route::get('/FilterList/{min}/{max}/{selectedServiceType}/{AutoType}', [CardsController::class, 'FilterList']);
