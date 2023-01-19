<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <h1>Factura pagada</h1>
    <br>
    <p>Gracias por la compra, Aquí está su recíbo</p>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->items as $item)
            <tr>
                <td scope="row">{{$item->name}}</td>
                <td>{{$item->pivot->quantity}}</td>
                <td>{{$item->pivot->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    Total : $ {{$order->total}}

    <x-mail::button :url="''">
    Imprimir
    </x-mail::button>
    <br>
    Gracias,<br>
    {{ config('app.name') }}
    
</body>
</html>
