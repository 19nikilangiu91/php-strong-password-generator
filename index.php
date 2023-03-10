<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Strong Password Generator</title>
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

    .button {
      border: 1px solid black;
      border-radius: 5px;
      background-color: white;
      color: black;
      text-decoration: none;
    }
  </style>
  <?php

  session_start();

  require_once __DIR__ . "/libs/helper.php";

  ?>
</head>

<body>
  <div class="container">
    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>
    <form method="GET">
      <label for="password">Lunghezza password:</label>
      <input type="number" name="lenght">
      <input type="submit" value="invia" class="button">
      <h4>
        <?php
        $lenght = $_GET["lenght"] ?? false;
        if ($lenght === false) {
          echo " ";
        } elseif ($lenght < 10) {
          echo "Devi inserire almeno 10 caratteri";
          // Milestone 3
          // Invece di visualizzare la password nella `index.php`, effettuare un *redirect* ad una pagina dedicata che tramite `$_SESSION` recupererà la password da mostrare all’utente.
        } else {
          $show_password = password_generate($lenght);
          $_SESSION["password"] = $show_password;
          header('Location: ./password.php');
        }
        ?>
      </h4>
    </form>
  </div>


</body>

</html>