@extends('layouts.app')

@section('title', 'Sportono | Postulación')

@section('content')
<div class="container mt-5 mx-auto">
    <div class="card shadow p-4">
        <div class="text-center">
            <img style="width: 80%; max-width: 350px;" class="logo mb-3" src="{{ asset('img/logo.webp') }}" alt="Logo taller Sieten Motor">
            <h2 class="mb-4">Postularse</h2>
        </div>

        <form action="{{ route('postularse') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                {{-- Nombre --}}
                <div class="col-12 col-md-6">
                    <label class="form-label">Nombres</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Apellido --}}
                <div class="col-12 col-md-6">
                    <label class="form-label">Apellidos</label>
                    <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" value="{{ old('lastname') }}">
                    @error('lastname')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Fecha de nacimiento --}}
                <div class="col-12 col-md-4">
                    <label class="form-label">Fecha de Nacimiento</label>
                    <input type="date" name="date_birth" class="form-control @error('date_birth') is-invalid @enderror" value="{{ old('date_birth') }}">
                    @error('date_birth')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Sexo --}}
                <div class="col-12 col-md-4">
                    <label class="form-label">Sexo</label>
                    <select class="form-select @error('sexo') is-invalid @enderror" name="sexo">
                        <option value="">Seleccione</option>
                        <option value="Masculino" {{ old('sexo') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="Femenino" {{ old('sexo') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                        <option value="Otro" {{ old('sexo') == 'Otro' ? 'selected' : '' }}>Otro</option>
                    </select>
                    @error('sexo')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Correo --}}
                <div class="col-12 col-md-4">
                    <label class="form-label">Correo</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Teléfono --}}
                <div class="col-12 col-md-6">
                    <label class="form-label">Teléfono</label>
                    <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Provincia --}}
                <div class="col-12 col-md-6">
                    <label class="form-label">Provincia</label>
                    <input type="text" name="province" class="form-control @error('province') is-invalid @enderror" value="{{ old('province') }}">
                    @error('province')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Ciudad --}}
                <div class="col-6">
                    <label class="form-label">Ciudad</label>
                    <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}">
                    @error('city')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Disponibilidad Horaria --}}
                <div class="col-6">
                    <label class="form-label">Disponibilidad Horaria</label>
                    <div class="row">
                        @foreach ($work_days as $wk)
                            <div class="col-4 col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input @error('work_day') is-invalid @enderror"
                                        type="checkbox" value="{{ $wk->id }}" name="work_day[]"
                                        {{ is_array(old('work_day')) && in_array($wk->id, old('work_day')) ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $wk->name }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @error('work_day')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Tiendas --}}
                <div class="col-12">
                    <label class="form-label">Tiendas donde quiere trabajar</label>
                    <div class="row">
                        @foreach ($stores as $store)
                            <div class="col-4 col-md-3 col-lg-2">
                                <div class="form-check">
                                    <input class="form-check-input @error('store') is-invalid @enderror"
                                        type="checkbox" value="{{ $store->id }}" name="store[]"
                                        {{ is_array(old('store')) && in_array($store->id, old('store')) ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $store->name }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @error('store')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                    @enderror
                </div>

                {{-- CV --}}
                <div class="col-12 col-md-6">
                    <label class="form-label">Adjuntar CV (PDF)</label>
                    <input type="file" name="cv" class="form-control @error('cv') is-invalid @enderror" accept="application/pdf">
                    @error('cv')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Foto --}}
                <div class="col-12 col-md-6">
                    <label class="form-label">Adjuntar Foto (Opcional, JPG/PNG)</label>
                    <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" accept="image/jpeg,image/png">
                    @error('photo')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Comentario --}}
                <div class="col-12">
                    <label class="form-label">Comentario</label>
                    <textarea name="comment" class="form-control @error('comment') is-invalid @enderror" rows="3">{{ old('comment') }}</textarea>
                    @error('comment')
                        <div class="invalid-feedback mt-2">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Botón --}}
                <div class="col-12 text-center mt-3">
                    <button type="submit" class="btn btn-primary">Enviar Postulación</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
