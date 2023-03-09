<?php

session_start();

$error = $_FILES['photo']['error'];
$tmp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

if ($error) {
    header("location: ../profile.php?error=1");
    exit();
}

if ($type === "image/jpeg" or $type === "image/png") {
    $_SESSION['user'] = ['name', 'admin'];
    move_uploaded_file($tmp, "photos/profile.jpg");
    header("location: ../profile.php");
} else {
    header("location: ../profile.php?error=type");
}