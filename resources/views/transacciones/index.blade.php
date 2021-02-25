<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado de transacciones</h1>

    <table>
        <thead>
            <th>Usuario</th>
            <th>Transaccion</th>
            <th>Fecha</th>
            <th>Id Producto</th>
            <th>Nombre Producto</th>
        </thead>
        <tbody>

            @forelse ($transacciones as $transaccion)
                <tr>
                    <td>{{ $transaccion->user->name }}</td>
                    <td>{{ $transaccion->transaccion }}</td>
                    <td>{{ $transaccion->fecha_transaccion }}</td>
                    <td>{{ $transaccion->producto->codigo }}</td>
                    <td>{{ $transaccion->producto->nombre }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No hay Transacciones</td> 
                </tr>
            @endforelse

        </tbody>
        
    </table>
</body>
</html>