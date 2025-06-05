
@extends('layouts.app') 

@section('content')
<div class="container py-5">
    <h1>Buscar Alumno</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('alumno.search.post') }}">
        @csrf
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre:</label>
            <input type="text" name="Nombre" class="form-control" value="" required>
        </div>
        <button class="btn btn-primary">Buscar</button>
    </form>

    @if(isset($alumnos))
        <h2 class="mt-4">Datos del alumno</h2>
        @if($alumnos->isEmpty())
            <p>No se encontraron resultados.</p>
        @else
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Nombre completo</th>
                    <th>¿Quién viene a recogerlo</th>
                    <th>Curso</th>
                    <th>Aula</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->Nombre }}</td>
                        <td>
                        <select name="padres" class="custom-select custom-select-sm" required aria-label="Default select example" multiple>
                                <option value="Padre">{{ $alumno->NombrePadre }}</option>
                                <option value="Madre">{{ $alumno->NombreMadre }}</option>
                            </select>
                        </td>
                        <td>{{ $alumno->Curso }}</td>
                        <td>{{ $alumno->Aula }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    @endif
</div>
@endsection
