<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller\controllerBrifast;
use App\Http\Controllers\Controller\controllerSearch;
use App\Http\Controllers\Controller\controllerSearchHome;
// Route::get('/', [controllerSearch::class,'cari']);
Route::get('/', [controllerSearchHome::class,'Home']);
Route::post('/search', [controllerSearch::class,'cari']);
