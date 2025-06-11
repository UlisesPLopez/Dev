<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes y Materias</title>
</head>
<body>
    <h1>Lista de Estudiantes y sus Materias</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre Estudiante</th>
                <th>Materias</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiante as $estudiante)
                <tr>
                    <td>{{ $estudiante->nombre_completo }}</td>
                    <td>
                        <ul>
                            @foreach($estudiante->materias as $materias)
                                <li>{{ $materias->nombre }} ({{ $materias->pivot->fecha }})</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
