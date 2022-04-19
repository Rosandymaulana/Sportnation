<?php
include 'connect.php';
session_start();

$username = $_GET['username'];
$name = $_GET['name'];
$email=$_GET['email'];
$password= md5($_GET['password']);
$c_password= md5($_GET['c_password']);

$id = $_SESSION["id"];
if($password == $c_password){
    $sql = "UPDATE user SET nama = '$name', username = '$username', email = '$email', password = '$password'  WHERE user_id = '$id'";
    if(mysqli_query($connect, $sql)){
    echo "<script> 
            alert('Data Account berhasil diubah !');
            document.location.href = '../index.php';
        </script>";
}else{
    echo "<script> 
            alert('Data Account gagal ditambahkan. Coba lagi !');
            document.location.href = '../Pages/Account/index.php';
        </script> <br>";
}
}
?>