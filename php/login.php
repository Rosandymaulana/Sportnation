<?php
include 'connect.php';

$email=$_GET['email'];
$password= md5($_GET['password']);

$sql = "SELECT * from user where email ='$email' and password='$password'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
$cek = mysqli_num_rows($result);

if($cek > 0){
    session_start();
    $_SESSION['id'] = $row['id_user'];
    $_SESSION['nama'] = $row['name'];
    $_SESSION['status'] = 'login';
    echo '<script type ="text/JavaScript">';  
    echo 'location="user.php";';
    echo '</script>';
}else{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Username atau Password Anda salah");location="auth/login.html";';
    echo '</script>';
    echo mysqli_error($connect);
}