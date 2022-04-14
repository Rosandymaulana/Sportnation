<?php
include 'connect.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$query = "SELECT nomor FROM user ORDER BY nomor DESC LIMIT 1";
$nomor = mysqli_query($connect, $query);
$nomor = $nomor->fetch_array();
if($nomor > 0) {
    $nomorInt = intval($nomor[0]) + 1;
} else {
    $nomorInt = 1;
}
echo "$nomorInt";

$query = "INSERT INTO user(user_id, nomor, nama, username, email, password)
                VALUES
                    ('C-$nomorInt', '$nomorInt', '$nama', '$username', '$email', '$password')
         ";
mysqli_query($connect, $query);

header('Location: ../Pages/Register/index.html');

// /* execute statement */
// if($stmt->execute()){
//     echo "<script> 
//             alert('Data akun berhasil ditambahkan !');
//             header('Location: ../Pages/index.html');
//         </script>";
// } else {
//     echo "<script> 
//             alert('Data akun gagal ditambahkan. Coba lagi !');
//             header('Location: ../Pages/index.html');
//         </script> <br>";
// }
