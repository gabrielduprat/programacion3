<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista Saludos</title>
</head>
<body>
    <h1>Saludos alternados:</h1>


 
    @for ($i = 1; $i < 10; $i++)
        @if ($i%2==0)
            <h1>Hola señor</h1>
        @else
            <h1>Hola señora</h1>
        @endif
    @endfor

</body>
</html>
