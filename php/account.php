<?php
include 'connect.php';

$username = $_GET['username'];
$name = $_GET['name'];
$email = $_GET['email'];
$gender = $_GET['gender'];
$phone = $_GET['phone'];
$password = md5($_GET['password']);
$c_password = md5($_GET['c_password']);

session_start();
$id = $_SESSION["id"];
if ($password == $c_password) {
    $sql = "UPDATE user SET nama = '$name', username = '$username', jenis_kelamin = '$gender', no_telp = '$phone', email = '$email', password = '$password'  WHERE user_id = '$id'";
    if (mysqli_query($connect, $sql)) {
        echo "<script> 
            alert('Data Account berhasil diubah !');
            document.location.href = '../index.php';
        </script>";
    } else {
        echo "<script> 
            alert('Data Account gagal ditambahkan. Coba lagi !');
            document.location.href = '../Pages/Account/index.php';
        </script> <br>";
    }
}
