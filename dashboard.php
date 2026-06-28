<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Welcome <?php echo $_SESSION['user']; ?></h1>

<h2>i have come to take you home.....MY BELOVED</h2>

<p>
This page opens only after successful login.
</p>

<a href="logout.php">
Logout
</a>

</body>
</html>