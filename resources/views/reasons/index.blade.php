<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th colspan="2">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reasons as $reason)
                <tr>
                    <td></td>
                    <td>{{$reason->name}}</td>
                    <td>
                    </td>
                    <td></td>
                </tr>
            @endforeach        
        </tbody>
    </table>

    
</body>
</html>