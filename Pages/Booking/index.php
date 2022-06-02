<!DOCTYPE html>
<html>
<?php
session_start();
include "../../php/connect.php";
$temp_id = $_GET['uid'];
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booking Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="booking.css">

    <script type="text/javascript">
        function showTotal() {
            var durasi = parseInt(document.getElementById("durasi").value);
            var x = document.getElementById("lapangan").value;
            x = x.split(" ");
            document.getElementById("total").innerHTML = "Total: Rp. " + (durasi * x[0]);
            document.getElementById("total").innerHTML.value = durasi * x[0];
        }
    </script>
</head>

<body>
    <?php
    if (isset($_SESSION['status'])) {
        $id = $_SESSION['id'];
    ?>
        <section class="banner">
            <h1>BOOK YOUR SPORT ARENA NOW!</h1>
            <div class="card-container">
                <div class="card-img">
                    <!-- image here -->
                </div>

                <div class="card-content">
                    <h3>Reservation</h3>
                    <form id="form-booking" name="form1" action="../../php/booking.php" method="get">
                        <?php

                        $query = "Select * from user where user_id = '$id'";
                        $result = mysqli_query($connect, $query);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <div class="form-row">
                                <input name="date" type="date" placeholder="Choose Date" required>
                                <input name="time" type="time" placeholder="Set Time" min="09:00" max="18:00" required>
                            </div>

                            <div class="form-row">
                                <input name="name" value="<?php echo $row['nama'] ?>" type="text" placeholder="Full Name" disabled>
                                <input name="phone" value="<?php echo $row['no_telp'] ?>" type="text" placeholder="Phone Number" disabled>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="form-row">
                            <select name="lapangan" id="lapangan">
                                <option>Pilih Lapangan</option>
                                <?php
                                $sql = "Select * from lapangan where tempat_id = '$temp_id'";
                                $result1 = mysqli_query($connect, $sql);
                                while ($row = mysqli_fetch_array($result1)) {
                                    $nama_lap = preg_replace("/[^0-9]/", "", $row['lap_id']);
                                    $h = $row['harga'];
                                    $v = $h . ' ' . $row['lap_id'];
                                ?>
                                    <option value="<?php echo $v ?>">Lapangan <?php echo $nama_lap ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-row">
                            <input type="number" name="jam" id="durasi" placeholder="Time playing? (in hours)" oninput="showTotal()">
                        </div>
                        <div class="form-row">
                            <p name="total" id="total" style="margin-left: 20px; margin-bottom: 20px; margin-top: 20px" disabled>Total: Rp. </p>
                        </div>
                        <div class="form-row">
                            <input type="submit" value="Book Now">
                        </div>
                </div>
            </div>
        </section>
    <?php
    } else {
        echo '<script type ="text/JavaScript">';
        echo 'alert("Silahkan login terlebih dahulu");location="../Login/index.html";';
        echo '</script>';
    }
    ?>
</body>

</html>