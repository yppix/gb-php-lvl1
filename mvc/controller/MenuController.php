<?php
require_once 'model/User.php';
session_start();

$menuLinks = 'Hello';

$username = null;
if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getUsername();
}

//не переносит по каким-то причинам в menu, почему?
//даже если просто передавать переменную, где я не так подключаю?

//if (isset($_SESSION['username'])) {
//
//} else {
//}

include "view/menu.php";

