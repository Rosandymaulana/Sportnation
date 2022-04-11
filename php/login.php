<?php
include 'connect.php';

session_start();
session_destroy();
$email = $_GET['email'];
$password = md5($_GET['password']);

$sql = "SELECT * from customer where email ='$email' and password='$password'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
$cek = mysqli_num_rows($result);

if ($cek > 0) {
    $_SESSION['id'] = $row['cust_id'];
    $_SESSION['nama'] = $row['nama_cust'];
    $_SESSION['status'] = 'login';
    echo '<script type ="text/JavaScript">';
    echo 'location="../index.php";';
    echo '</script>';
} else {
    echo '<script type ="text/JavaScript">';
    echo 'alert("Username atau Password Anda salah");location="../Pages/Login/login.html";';
    echo '</script>';
    echo mysqli_error($connect);
}
