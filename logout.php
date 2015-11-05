<?php
session_start();

if(isset($_SESSION['logged_in'])) {
    unset($_SESSION['logged_in']);
}

if(isset($_SESSION['logged_in_user'])) {
    unset($_SESSION['logged_in_user']);
}

if(isset($_SESSION['logged_in_user_access'])) {
    unset($_SESSION['logged_in_user_access']);
}

if(isset($_SESSION['logged_in_user_id'])) {
    unset($_SESSION['logged_in_user_id']);
}

if(isset($_SESSION['logged_in_user_first_name'])) {
    unset($_SESSION['logged_in_user_first_name']);
}

if(isset($_SESSION['logged_in_user_last_name'])) {
    unset($_SESSION['logged_in_user_last_name']);
}

header("Location: home.php");
?>