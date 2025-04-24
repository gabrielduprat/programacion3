<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista por edad</title>
</head>
<body>

    @if ($edad>=18)
    <h1>Bienvenido/a</h1>
    @else
    <h1>No puede ingresar</h1>
    @endif
</body>
</html>