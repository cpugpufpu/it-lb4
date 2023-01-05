<?php

session_start();

$flag = isset($_GET) && !empty($_GET);

if ($flag) {
    $name = $_GET['name'];

    $_SESSION['name'] = $name;

    setcookie(
        "name",
        $name,
        time() - (20),
    );
}
