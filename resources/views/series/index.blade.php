<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Listando Series</h1>
    <ul>
        @foreach ($series as $serie)
            <li>{{ $serie->titulo }}</li>
        @endforeach
    </ul>
</body>

</html>
