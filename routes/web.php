<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use App\Livewire\LoginForm;
use App\Models\Candidate;
use Illuminate\Support\Facades\Route;



Route::get('/', [CandidateController::class, 'index'])->name('candidatos')->middleware('auth');
Route::get('/login', function () {
    if (auth()->check()) {
        return redirect()->route('candidatos'); // Redirige a la página principal si ya está autenticado
    }
    return view('auth.login'); // Muestra la página de login si no está autenticado
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/postularse', [CandidateController::class, 'create'])->name('postularse');
Route::post('/postularse', [CandidateController::class, 'store'])->name('postularse');
// Route::resource('candidate', CandidateController::class);