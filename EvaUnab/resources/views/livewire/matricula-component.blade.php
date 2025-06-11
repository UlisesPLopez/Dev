<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Sistema de Matrículas</h4>
        </div>
        
        <div class="card-body">
            <!-- Botones para ir a la lista de estudiantes -->
            <div class="mb-3">
                <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary me-2">
                    <i class="fas fa-users me-2"></i> Ver Estudiantes
                </a>
                <a href="{{ route('materias.index') }}" class="btn btn-warning">
                    <i class="fas fa-book me-2"></i> Ver Materias
                </a>
            </div>
            
            <!-- Formulario de matrícula -->
            <form wire:submit.prevent="matricular">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="carnet" class="form-label">Carnet del Estudiante</label>
                        <input type="text" class="form-control" id="carnet" wire:model="carnet">
                        @error('carnet') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="codigo_materia" class="form-label">Código de Materia</label>
                        <input type="text" class="form-control" id="codigo_materia" wire:model="codigo_materia">
                        @error('codigo_materia') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i> Matricular
                        </button>
                        
                        <button type="button" class="btn btn-info ms-2" wire:click="buscarMatriculas">
                            <i class="fas fa-search me-2"></i> Buscar Matrículas
                        </button>
                    </div>
                </div>
            </form>
            
            <!-- Mensajes de resultado -->
            @if($mensaje)
                <div class="alert {{ $error ? 'alert-danger' : 'alert-success' }} mt-3">
                    {{ $mensaje }}
                </div>
            @endif
        </div>
        
        <!-- Lista de matrículas -->
        @if(count($matriculas) > 0)
            <div class="card-footer">
                <h5 class="mb-3">Materias matriculadas</h5>
                
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Materia</th>
                                <th>Código</th>
                                <th>Fecha</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($matriculas as $mat)
                                <tr>
                                    <td>{{ $mat->materia }}</td>
                                    <td>{{ $mat->codigo }}</td>
                                    <td>{{ \Carbon\Carbon::parse($mat->fecha)->format('d/m/Y') }}</td>
                                    <td>
                                        <button wire:click="eliminarMatricula({{ $mat->id }})" 
                                                class="btn btn-sm btn-danger"
                                                onclick="return confirm('¿Eliminar esta matrícula?')">
                                            <i class="fas fa-trash"></i> Eliminar
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @elseif($carnet)
            <div class="card-footer">
                <div class="alert alert-warning">
                    No se encontraron matrículas para este estudiante.
                </div>
            </div>
        @endif
    </div>
</div>

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .card {
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
@endpush
