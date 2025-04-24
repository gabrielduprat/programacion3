<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista Tablas</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Tablas del número: {{ $numero }}.</h1>

    <table>
        <thead>
            <tr>
                <th>Operación</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 10; $i++)
                <tr>
                    <td>{{ $numero }} x {{ $i }}</td>
                    <td>{{ $numero * $i }}</td>
                </tr>
            @endfor
        </tbody>
    </table>
</body>
</html>
