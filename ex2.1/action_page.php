<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>action</title>
</head>
<body>
    <?php
        $accounts = ["user123"=>"123456","Labol"=>"937283","Carcasa"=>"!Popas"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        if (array_key_exists($username,$accounts) && $accounts[$username] === $password) {
            echo "Login correcte!";
        } else {
            echo "Login incorrecte";
        }
    ?>
</body>
</html>