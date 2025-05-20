<?php

/**
 * Thiw is a page in your appplication that is only accessible to logged-in users.
 */

session_start();

if (!isset($_SESSION['user_email'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome <?=$_SESSION['user_name']; ?>!</h1>
    <p>Email: <?=$_SESSION['user_email']; ?></p>
    <a href="logout.php">Close session</a>
</body>
</html>