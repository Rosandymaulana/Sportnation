<?php
$hostname = "localhost";
$database = "id18109489_sportnation";
$username = "id18109489_sport";
$password = "J?nkA~nlh\^1K|\x";
// Create connection
$connect = mysqli_connect($hostname, $username, $password, $database);
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}