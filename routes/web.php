<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\allPage;

Route::get('/', [allPage::class, 'homePage']);
Route::get('/resume', [allPage::class, 'resumePage']);
Route::get('/projects', [allPage::class, 'projectPage']);
Route::get('/contact', [allPage::class, 'contactPage']);
