<?php
include 'connect.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$query = "INSERT INTO user(nama, username, email, password)
                VALUES
                    ('$nama', '$username', '$email', '$password')
            ";

mysqli_query($connect, $query);

header('Location: ../index.html');