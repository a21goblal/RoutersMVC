<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeritos</title>
</head>
<body>
    <h1>Números pares</h1>
    <ul>
        <?php foreach ($data['message'] as $numero) : ?>
            <li><?php echo $numero; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>