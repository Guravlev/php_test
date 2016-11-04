<?php
session_start();
if(!isset($_SESSION['name'])){
    header('location: php_test/reg.php');
}
