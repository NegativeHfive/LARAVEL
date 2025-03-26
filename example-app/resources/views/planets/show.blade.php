<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $planet->name }}</title>
</head>
<body>

    <h1>{{ $planet->name }}</h1>
    <p>{{ $planet->description }}</p>
    <p><strong>Size:</strong> {{ $planet->size_in_km }} km</p>
    <p><strong>Solar System:</strong> {{ $planet->solarSystem->name ?? 'Unknown' }}</p>

    <a href="{{ route('planets.index') }}">Back to All Planets</a>

</body>
</html>
