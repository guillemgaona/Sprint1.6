<?php
session_start();

$name= $_POST["name"]; // Agafes la variable name i la guardes en una variable local (PHP).
$surname= $_POST["surname"];
$email = $_POST["email"];

echo "Los datos registrados con POST: <br>"; 
echo  "Nombre: " . $name . "<br>";
echo "Nombre: " . htmlspecialchars($name) . "<br>"; // converteix strings d'html de manera més segura
echo  "Apellido: " . $surname . "<br>";
echo "Apellido: " . htmlspecialchars($surname) . "<br>";
echo  "Nombre: " . $email . "<br>";
echo "Nombre: " . htmlspecialchars($email) . "<br>";

$_SESSION["name"] = $name; // Es guarda les variables de la teva sessió per això es necessita el session_start
$_SESSION["surname"] = $surname;
$_SESSION["email"] = $email;

echo "Los datos registrados con SESSION: <br>";
echo "Nombre: " . htmlspecialchars($_SESSION["name"]) . "<br>";
echo "Apellido: " . htmlspecialchars($_SESSION["surname"]) . "<br>";
echo "Nombre: " . htmlspecialchars($_SESSION["email"]) . "<br>";
?>