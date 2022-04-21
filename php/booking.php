<?php
include 'connect.php';
session_start();

$date = $_GET['date'];
$name = $_GET['name'];
$time = $_GET['time'];
$jam = $_GET['jam'];
$time = $_GET['time'];
$user_id = $_SESSION['id'];
$id = "set @nomor_user = (select nomor from user where user_id = '$user_id');";
$nomor = "set @nomor = (select nomor from booking order by nomor desc);";

// /*Percobaan Query*\
// (book_id, nomor, user_id, lap_id, durasi, total, tgl, jam) 
// values ('B-(@nomor+1)', '', '@nomor_user', 'L-01', '$jam', '50000', '$date', '$time')
// set book_id = 'B-($nomor+1)',
// set nomor = '',
// set user_id = '$id',
// set lap_id = 'L-01',
// set durasi = '$jam',
// set total = '75000',
// set tgl = '$date',
// set jam = '$time' ;

    $query = "insert into booking (book_id, nomor, user_id, lap_id, durasi, total, tgl, jam)
    select
    ";
    if(mysqli_query($connect, $query)){
        echo "<script> 
            alert('Anda berhasil Booking !');
            document.location.href = '../index.php';
        </script>";
}else{
    echo "<script> 
            alert('Proses booking gagal ditambahkan. Silahkan coba lagi');
            document.location.href = '../Pages/Booking/index.php';
        </script> <br>";
}
?>