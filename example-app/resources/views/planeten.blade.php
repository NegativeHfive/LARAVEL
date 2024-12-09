<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planets</title>
</head>
<body>

    <?php
        
    $planets = [
    [
        'name' => 'Mars',
        'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
    ],
    [
        'name' => 'Venus',
        'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
    ],
    [
        'name' => 'Earth',
        'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
    ],
    [
        'name' => 'Jupiter',
        'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
    ],
];
        
    ?>

    <h1>Planets</h1>
    <ul>
        <?php foreach ($planets as $planet): ?>
            <li>
                <h2><?php echo $planet['name']; ?></h2>
                <p><?php echo $planet['description']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
