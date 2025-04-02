<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use App\Models\Candidate;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('auth.auth');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/postulacion', [CandidateController::class, 'postulacion'])->name('postulacion');
Route::resource('candidate', CandidateController::class);