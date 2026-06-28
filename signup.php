<?php
include 'db.php';

if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(username,email,password)
            VALUES('$username','$email','$password')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Registration Successful');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Sign Up</h2>

<form method="POST">
<input type="text" name="username" placeholder="Username" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button name="register">Register</button>

<p>
Already have an account?
<a href="index.php">Login</a>
</p>

</form>
</div>

</body>
</html>