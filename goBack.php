<?php

session_start();

// Scrivo questi due metodi che al click del bottone "Go Back" mi permettono di cancellare i dati della sessione e di eliminarla del tutto.
session_unset();
session_destroy();
header("Location: index.php");