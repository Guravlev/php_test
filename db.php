<?php
$db = new PDO("mysql:host=localhost;dbname=blob", "root", "");
//$db = mysqli_connect("localhost", "root", "", "blob");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
require_once "Twig/Autoloader.php";
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('includes');
$twig = new Twig_Environment($loader);
