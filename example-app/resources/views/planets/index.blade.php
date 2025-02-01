<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Planets</title>
</head>
<body>

    <h1>Planets</h1>
    <ul>
        @foreach ($planets as $name => $description)
            <li>
                <a href="{{ url('/planets/' . $name) }}">{{ ucfirst($name) }}</a> - {{ $description }}
            </li>
        @endforeach
    </ul>

</body>
</html>
