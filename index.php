<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Strong Password Generator</title>
  <?php

  $lenght = $_GET["lenght"] ?? false;
  if ($lenght === false) {
    echo " ";
  } elseif ($lenght < 10) {
    echo "Devi inserire almeno 10 caratteri";
  } else
    echo "La password generata è: " . password_generate($lenght);


  function password_generate($lenght)
  {
    $chars = array_merge(range("A", "Z"), range("a", "z"), range(0, 9), array("!", "@", "$", "%", "^", "&", "*"));
    $password = "";
    for ($i = 0; $i < $lenght; $i++) {
      $password .= $chars[array_rand($chars)];
    }
    return $password;
  }
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