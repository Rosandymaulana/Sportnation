<?php
include 'connect.php';
session_start();

$user_id = $_SESSION['id'];
$jam = $_GET['jam'];
$date = $_GET['date'];
$time = $_GET['time'];
$lapangan = $_GET['lapangan'];
$lapangan = explode(" ", $lapangan);
$total = $jam * $lapangan[0] + 3000;

//Menghitung total
$sql = "SELECT harga FROM lapangan where lap_id = '$lapangan[1]'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);

$query = "SELECT nomor FROM booking ORDER BY nomor DESC LIMIT 1";
$nomor = mysqli_query($connect, $query);
$nomor = $nomor->fetch_array();
if ($nomor > 0) {
    $nomorInt = intval($nomor[0]) + 1;
} else {
    $nomorInt = 1;
}

$query = "INSERT INTO booking (book_id, nomor, user_id, lap_id, durasi, total, tgl, jam)
            VALUES
                ('B-0$nomorInt', '$nomorInt', '$user_id', '$lapangan[1]', '$jam', '$total', '$date', '$time')
         ";

mysqli_query($connect, $query);

echo "<script>window.location.href='../Pages/Pembayaran/index.php?uid=$nomorInt'</script>";

    // if(mysqli_query($connect, $query)){
    //     echo "<script> 
    //         alert('Anda berhasil Booking !');
    //         document.location.href = '../index.php';
    //     </>";
    // }else{
    //     echo "<script> 
    //         alert('Proses booking gagal ditambahkan. Silahkan coba lagi');
    //         document.location.href = '../Pages/Booking/index.php';
    //     </script> <br>";
    // }
