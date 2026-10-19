<?php
session_start();

// Identifiants en dur pour le moment (root / root)
$valid_username = "root";
$valid_password = "root";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['user_id'] = 1;
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['login_error'] = "Identifiants incorrects.";
        header("Location: index.php");
        exit();
    }
}
?>