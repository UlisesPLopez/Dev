@extends('components.layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Lista de Materias</h2>

        <a href="{{ route('materias.create') }}" class="btn btn-success mb-3">Agregar Materia</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($materias as $materia)
                    <tr>
                        <td>{{ $materia->codigo }}</td>
                        <td>{{ $materia->nombre }}</td>
                        <td>
                            <form action="{{ route('materias.destroy', $materia->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta materia?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
