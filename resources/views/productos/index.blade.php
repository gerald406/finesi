<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto Finesi</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    @php
        $db = 'success';
    @endphp
    <div class="container mx-auto py-12">
        <x-alerta type="{{ $db }}">
            <x-slot name="titulo">Títuto de Prueba</x-slot>
            Uso de componentes en laravel 12
        </x-alerta>
    </div>|

</html>
