<?php
session_start();
include 'db.php';
if(isset($_SESSION['name'])){
    header('location: session.php');
}
if(isset($_POST["user"])){
    include_once("db.php");
    $username = htmlspecialchars(trim($_POST["user"]));

    $insert = $db->query("INSERT INTO author (name)VALUES ('$username')");
        if ($insert) {
            $_SESSION['name'] = $username;
        }
}
if (!isset($_SESSION['name'])){
    echo $twig->render('reg_form.html', array());
}
