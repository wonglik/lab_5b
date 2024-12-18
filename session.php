<?php

session_start();


if ($_SESSION == null || $_SESSION["login"] == null || $_SESSION["login"] != true) {


    echo '<script>alert("U must login")</script>';


    $_SESSION["login"] = null;


    unset($_SESSION);


    session_destroy();

    echo "<script>window.location.href = 'login.php'</script>";
    exit();
}
