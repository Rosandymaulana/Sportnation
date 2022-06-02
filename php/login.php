<?php
include 'connect.php';

$email = $_GET['email'];
$password = $_GET['password'];
$e_password = md5($password);

$sql = "SELECT * from user where email ='$email' and password='$e_password'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
$cek = mysqli_num_rows($result);

if ($cek > 0) {
    session_start();
    $_SESSION['id'] = $row['user_id'];
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['password'] = $password;
    $_SESSION['status'] = 'login';
    echo '<script type ="text/JavaScript">';
    echo 'location="../index.php";';
    echo '</script>';
} else {
    echo '<script type ="text/JavaScript">';
    echo 'alert("Username atau Password Anda salah");location="../Pages/Login/index.html";';
    echo '</script>';
    echo mysqli_error($connect);
}
