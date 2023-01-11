<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            width: 500px;
            height: 250px;
            border: 1px solid black;
        }
    </style>
    <?php
    session_start();
    ?>
</head>

<body>
    <div class="container">
        <h1>
            <?php
            echo "la tua password è: " . $_SESSION["password"];
            ?>
        </h1>
    </div>
</body>

</html>