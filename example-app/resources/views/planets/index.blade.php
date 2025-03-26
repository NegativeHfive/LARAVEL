<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Planets</title>
</head>
<body>

    <h1>All Planets</h1>

    <ul>
        @foreach ($planets as $planet)
            <li>
                <a href="{{ route('planets.show', $planet->id) }}">
                    {{ $planet->name }}
                </a>
                - {{ $planet->description }}
                <br>
                <strong>Solar System:</strong> {{ $planet->solarSystem->name ?? 'Unknown' }}
            </li>
        @endforeach
    </ul>

</body>
</html>
