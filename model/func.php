<?php
include 'db.php';
function about_user($db){
    $query = $db->query("SELECT name FROM author");
//    while ($row = $query->fetch()){
//        $auth_login = $row;
//    }
    $rows = $query->fetchAll();
    foreach ($rows as $column){
        $columns[] = $column;
    }
    return $columns;
}
function info_get($db, $name){
    $query =  $db->query("SELECT user_name, content FROM note WHERE user_name = '$name'");
    while ($pow = $query->fetch()){
        $info[] = $pow;
    }
    return $info;
}