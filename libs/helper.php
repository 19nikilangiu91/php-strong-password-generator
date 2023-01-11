<?php

$lenght = $_GET["lenght"] ?? false;

// Creo una funzione per stampare la "Password".
function getHtmlValidation($lenght)
{
    if ($lenght === false) {
        echo " ";
    } elseif ($lenght < 10) {
        echo "Devi inserire almeno 10 caratteri";
    } else
        echo "La password generata è: " . password_generate($lenght);
}

// Creo una funzione per generare una "Password".
function password_generate($lenght)
{
    $chars = array_merge(range("A", "Z"), range("a", "z"), range(0, 9), array("!", "@", "$", "%", "^", "&", "*"));
    $password = " ";
    for ($i = 0; $i < $lenght; $i++) {
        $password .= $chars[array_rand($chars)];
    }
    return $password;
}