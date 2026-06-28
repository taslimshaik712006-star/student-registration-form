<?php
$conn = mysqli_connect("localhost", "root", "", "user_system");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>