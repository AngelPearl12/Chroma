<?php
include 'database.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['username'] = $user['username'];
            header('Location: index.php');
        } else {
            $_SESSION['message'] = "Invalid password.";
            header('Location: login.php');
        }
    } else {
        $_SESSION['message'] = "No user found with that email.";
        header('Location: login.php');
    }
}
?>
