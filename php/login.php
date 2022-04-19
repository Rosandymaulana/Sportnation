<?php
include 'connect.php';

session_start();
$email=$_GET['email'];
$password= md5($_GET['password']);

$sql = "SELECT * from user where email ='$email' and password='$password'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
$cek = mysqli_num_rows($result);

if($cek > 0){
    $_SESSION['id'] = $row['user_id'];
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['status'] = 'login';
    echo '<script type ="text/JavaScript">';  
    echo 'location="../index.php";';
    echo '</script>';
}else{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Username atau Password Anda salah");location="../Pages/Login/index.html";';
    echo '</script>';
    echo mysqli_error($connect);
}