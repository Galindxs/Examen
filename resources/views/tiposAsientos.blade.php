<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de Asientos</title>
</head>
<body>
    <div class="container">        
    <h1>Mantenimiento Asientos</h1>
    <br>
    <a href="{{route('tipoAsiento.nuevo')}}" class="btn btn-success">Agregar Nuevo</a>
    <br>
    <table class="table">
        @csrf
        <thead>
            <tr>
                <th>Id Tipo Asiento</th>
                <th>Descripci&oacute;n</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($tipos as $tipo)
                <td>{{$tipo->idTipoAsiento}}</td>
                <td>{{$tipo->descripcion}}</td>
                <td>{{$tipo->precio}}</td>
                <td>{{$tipo->estado}}</td>
                <td>
                    <a href="route{{'tipoAsiento.editar'}}/$tipo->idTipoAsiento">Editar</a>
                </td>
                <td>
                    <a href="route{{'tipoAsiento.eliminar'}}/$tipo->idTipoAsiento">Eliminar</a>
                </td>
                @endforeach
            
             </tr>
            
            
        </tbody>

    </table>
    </div>
</body>
</html>