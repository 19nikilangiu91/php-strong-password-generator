<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Strong Password Generator</title>
  <?php
  $lenght = $_GET["lenght"] ?? false;
  echo "La password generata è: " . $lenght;
  ?>
</head>

<body>
  <h1>Strong Password Generator</h1>
  <h2>Genera una password sicura</h2>
  <form method="GET">
    <label for="password">Lunghezza password:</label>
    <input type="number" name="lenght">
    <input type="submit" value="invia">
  </form>

</body>

</html>