<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 2.4</title>
</head>
<body>
    <?php
    $contrasenya1 = $_POST["contrasenya1"];
    $contrasenya2 = $_POST["contrasenya2"];
    $contieneError = false;
    if ($contrasenya1 !== $contrasenya2) {
        echo "<p>ERROR: les contrasenyes han de coincidir</p>";
        $contieneError = true;
    }
    $contieneNumero = false;
    for ($i = 0; $i < strlen($contrasenya1); $i++) {
        if (is_numeric($contrasenya1[$i])) {
            $contieneNumero = true;
            break;
        }
    }
    if (!$contieneNumero && !$contieneError) {
        echo "<p>ERROR: la contrasenya ha de tenir al menys un número</p>";
        $contieneError = true;
    }
    if (!$contieneError) {
        echo "<p>¡La contrasenya es correcta!</p>";
    }
    ?>
</body>
</html>