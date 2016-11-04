<?php
session_start();
include 'db.php';
include 'model/func.php';

if(isset($_GET['exit'])){
    unset($_SESSION['name']);
}
if (isset($_POST['user'])){
    $username = htmlspecialchars(trim($_POST["user"]));
    $query = $db->query("SELECT name FROM author WHERE name = '$username'");
    $result = $query->fetch();
    if($result){
        $_SESSION['name'] = $username;
    } else echo "Incorrect login or password!";
}
if (isset($_SESSION['name'])){
    $name = $_SESSION['name'];
    $user_info = about_user($db);
    $info = info_get($db, $name);
    echo "Hello " . $name;
    echo $twig->render('add_note.html', array('user_info'=> $user_info, 'more_info'=> $info));
}
//if (isset($_POST['send']) && !empty($_POST['note'])){
//    $note = htmlspecialchars(trim($_POST["note"]));
//    //$insert = $db->query("INSERT INTO note (user_name, content) VALUES ('$name', '$note')");
//}
if ($_POST['show']){


}
//if (!isset($_SESSION['name'])){
//    echo $twig->render('show_all.html', array());
//}
