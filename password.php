<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    session_start();
    ?>
</head>

<body>
    <h1>
        <?php
        echo "la tua password è: " . $_SESSION["password"];
        ?>
    </h1>
</body>

</html>