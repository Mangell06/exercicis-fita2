<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
            $color = $_GET["color"] ?? "white";
        ?>
        body {
            background-color: <?= htmlspecialchars($color) ?>;
        }
    </style>
</head>
<body>
    <form method="GET" action="/ex23pagina1.php">
        <label for="color">Elige un color:</label>
        <select id="color" name="color">
            <option value="red">Rojo</option>
            <option value="green">Verde</option>
            <option value="blue">Azul</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
