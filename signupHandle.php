<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // VaMoS aMiGoS
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    header("Location: ../page/dashboard.php");
} else {
    header("Location: ../error/error.php");
}
