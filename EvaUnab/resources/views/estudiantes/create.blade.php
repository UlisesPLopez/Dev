@extends('components.layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Agregar Estudiante</h2>

        <form action="{{ route('estudiantes.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="carnet" class="form-label">Carnet</label>
                <input type="text" class="form-control" name="carnet" id="carnet" required>
            </div>

            <div class="mb-3">
                <label for="nombre_completo" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" name="nombre_completo" id="nombre_completo" required>
            </div>

            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
