<!DOCTYPE html>
<html>
<?php
session_start();
include "../../php/connect.php";
$id = $_SESSION['id'];
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booking Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="cek.js">

<body>

    <section class="banner">
        <h1>BOOK YOUR SPORT ARENA NOW!</h1>
        <div class="card-container">
            <div class="card-img">
                <!-- image here -->
            </div>

            <div class="card-content">
                <h3>Reservation</h3>
                <form  id="form-booking" name="form1" action="../../php/booking.php" method="get">
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
                            <input name="name" value="<?php echo $row['nama'] ?>" type="text" placeholder="Full Name">
                            <input name="phone" value="<?php echo $row['no_telp'] ?>" type="text" placeholder="Phone Number">
                        </div>

                        <div class="form-row">
                        <select id="select1" name="select1">
                            <option>Select Venues</option>
                            <option value="lapangan1">Lapangan 1</option>
                            <option value="lapangan2">Lapangan 2</option>
                            <option value="lapangan3">Lapangan 3</option>
                            <option value="lapangan4">Lapangan 4</option>
                        </select>
                        <!-- <input type="submit" id="btncek" value="Price Cek" onclick="cek()"> -->
                    </div>

                        <div class="form-row">
                            <input name="jam" type="number" placeholder="Time playing? (in hours)" min="1">

                        </div>
                        <div class="form-row center">
                            <input type="submit" value="Book Now">
                        </div>

                    <?php
                    }
                    ?>
            </div>
        </div>
    </section>

</body>

</html>