<!-- resources/views/login.blade.php -->
@extends('layouts.app')

@section('title', 'Sportono | Login')

@section('content') <!-- Aquí se carga el contenido del login -->
    <div class="container-login">
        <div class="card-login">
            <div class="bg-image">
                <img class="logo" src="{{ asset('img/bg-sportono.jpg') }}" alt="Logo taller Sieten Motor">
            </div>
            <div class="form-login p-4">
                <div class="login-header">
                    <img src="{{ asset('img/logo.webp') }}" alt="Logo sportono">
                </div>

                <div class="login-title">Bienvenido a Sportono 👋</div>
                <div class="login-subtitle">Por favor, inicia sesión en tu cuenta</div>
                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="form-label pt-4">CORREO</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                            wire:model="email" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-start invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">CONTRASEÑA</label>
                        <input type="password" wire:model="password" name="password" value="{{ old('password') }}"
                            class="form-control @error('password') is-invalid @enderror" id="password"
                            placeholder="Contraseña">
                        @error('password')
                            <div class="text-start invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 form-check remember-me">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember">
                        <label class="form-check-label" for="remember">Recuérdame</label>
                    </div>

                    @if ($errors->has('credencial'))
                    <div class="text-start mb-3 text-danger">
                        Correo o contraseña incorractas
                    </div>
                    @endif

                    <button type="submit" class="btn btn-primary w-100 py-3" id="loginBtn">
                        Iniciar sesión
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection
