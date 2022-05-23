<!DOCTYPE html>
<html>
<?php
session_start();
include "../../php/connect.php";
$id = $_SESSION['id'];
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
            var harga_lapangan = function(x) {
                                    if(x == "L-01") {
                                        return harga_lapangan = 70000;
                                    } else if(x == "L-02"){
                                        return harga_lapangan = 80000;
                                    } else if(x == "L-03"){
                                        return harga_lapangan = 60000;
                                    } else {
                                        return harga_lapangan = 80000;
                                    }
                                 };
            document.getElementById("total").innerHTML = "Total: Rp. " + (durasi * harga_lapangan(x));
        }
    </script>
</head>
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
                            <?php
                        }
                    ?>
                        <div class="form-row">
                            <select name="lapangan" id="lapangan">
                                <option>Pilih Lapangan</option>
                                <?php
                                $sql = "Select lap_id from lapangan where tempat_id = '$temp_id'";
                                $result1 = mysqli_query($connect, $sql);
                                while ($row = mysqli_fetch_array($result1)) {
                                    $nama_lap = preg_replace("/[^0-9]/","",$row['lap_id']);
                                ?>
                                <option value="<?php echo $row['lap_id'] ?>">Lapangan <?php echo $nama_lap ?></option>
                                <?php
                            }
                        ?>
                            </select>
                        </div>
                        <div class="form-row">
                            <input type="number" id="durasi" placeholder="Time playing? (in hours)" oninput="showTotal()">
                        </div>
                        <div class="form-row">
                            <p id="total" style="margin-left: 20px; margin-bottom: 20px; margin-top: 20px">Total: Rp. </p>
                        </div>
                        <div class="form-row">
                            <input type="submit" value="Book Now">
                        </div>
            </div>
        </div>
    </section>
</body>
</html>