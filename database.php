<?php
$servername = "localhost";
$username = "id21963942_user_portfolio_db";
$password = "User_portfolio1";
$dbname = "id21963942_user_portfolio_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
