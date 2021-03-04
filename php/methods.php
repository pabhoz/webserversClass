<?php
    // $_SERVER, $_REQUEST, $_SESSION, $_POST, $_GET, $_FILES
?>
<?php if(count($_POST) == 0): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="POST">
        <input type="text" placeholder="Nombre del profe" name="teachersName">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php else: ?>
    <h1> El profe es: <?php echo $_POST["teachersName"]; ?> </h1>
<?php endif; ?>
