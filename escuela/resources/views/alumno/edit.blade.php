<!--
@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2>Editar Usuario</h2>

    <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Nombre </label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>
        <div class="mb-3">
            <label>Edad</label>
            <input type="number" name="age" class="form-control" value="{{ old('age', $user->age) }}">
        </div>
        <div class="mb-3">
            <label>Teléfono</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $user->phone) }}">
        </div>
        <div class="mb-3">
            <label>Avatar</label>
            <input type="file" name="avatar" class="form-control">
            @if($user->avatar)
                <p class="mt-2">Actual: <img src="{{ asset('storage/' . $user->avatar) }}" width="60"></p>
            @endif
        </div>
        <button class="btn btn-success">Actualizar</button>
        <a href="{{ route('user.search') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
-->