{{-- resources/views/components/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Livewire App' }}</title>
    @livewireStyles {{-- Esto carga los estilos de Livewire --}}
    @stack('styles') {{-- Aquí puedes agregar estilos adicionales --}}
</head>
<body>
    @yield('content') {{-- Aquí se mostrará el contenido de las vistas que extienden este layout --}}

    @livewireScripts {{-- Esto carga los scripts de Livewire --}}
</body>
</html>
