<?php
session_start();
include "../../php/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Venue</title>

    <!-- CSS -->
    <link rel="stylesheet" href="index.css">

</head>

<body>
    <a href="/index.php" style="font-size: 26px; padding: 20px; font-weight: bold;"></a>

    <?php
    $tempat_id = $_GET["uid"];
                $query = "SELECT *, count(l.lap_id) jumlah_lap from tempat t, pemilik p, lapangan l 
                        WHERE t.owner_id = p.owner_id and t.tempat_id = '$tempat_id' and t.tempat_id = l.tempat_id";
                $result = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
            <div class="wrap">
                <div id="content">
                    <center>
                        <img src="<?php echo $row['foto_tempat']?>" width="80%">
                        <h1><?php echo $row['nama_tempat'] ?></h1>
                    </center>

                </div>
                <aside>
                    <div class="wrap">
                        <div class="flex" style="width: 15%; padding: 5px;">
                            <img src="<?php echo $row['foto_owner'] ?>" width="100%">
                        </div>
                        <div class="flex" style="width: 80%; padding: 5px;">
                            <?php echo $row['nama_owner'] ?> <br> <strong> Pemilik Tempat </strong> <br> <?php echo $row['email'] ?>
                        </div>
                    </div>
                    <h1>Detail Venue</h1>
                    <div class="wrap">
                        <div class="flex" style="width: 15%; padding: 27px 0 0 25px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-dpad" viewBox="0 0 16 16">
                                <path
                                    d="m7.788 2.34-.799 1.278A.25.25 0 0 0 7.201 4h1.598a.25.25 0 0 0 .212-.382l-.799-1.279a.25.25 0 0 0-.424 0Zm0 11.32-.799-1.277A.25.25 0 0 1 7.201 12h1.598a.25.25 0 0 1 .212.383l-.799 1.278a.25.25 0 0 1-.424 0ZM3.617 9.01 2.34 8.213a.25.25 0 0 1 0-.424l1.278-.799A.25.25 0 0 1 4 7.201V8.8a.25.25 0 0 1-.383.212Zm10.043-.798-1.277.799A.25.25 0 0 1 12 8.799V7.2a.25.25 0 0 1 .383-.212l1.278.799a.25.25 0 0 1 0 .424Z" />
                                <path
                                    d="M6.5 0A1.5 1.5 0 0 0 5 1.5v3a.5.5 0 0 1-.5.5h-3A1.5 1.5 0 0 0 0 6.5v3A1.5 1.5 0 0 0 1.5 11h3a.5.5 0 0 1 .5.5v3A1.5 1.5 0 0 0 6.5 16h3a1.5 1.5 0 0 0 1.5-1.5v-3a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 0 16 9.5v-3A1.5 1.5 0 0 0 14.5 5h-3a.5.5 0 0 1-.5-.5v-3A1.5 1.5 0 0 0 9.5 0h-3ZM6 1.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3A1.5 1.5 0 0 0 11.5 6h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a1.5 1.5 0 0 0-1.5 1.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-3A1.5 1.5 0 0 0 4.5 10h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 0 6 4.5v-3Z" />
                            </svg>
                        </div>
                        <div class="flex" style="width: 100%; padding: 5px;">
                            <h4>Nama</h3>
                                <p style="color: gray;"><?php echo $row['nama_tempat'] ?></p>
                        </div>
                    </div>
                    <div class="wrap">
                        <div class="flex" style="width: 15%; padding: 27px 0 0 25px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-calendar3" viewBox="0 0 16 16">
                                <path
                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                <path
                                    d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>
                        </div>
                        <div class="flex" style="width: 100%; padding: 5px;">
                            <h4>Buka</h3>
                                <p style="color: gray;"><?php echo $row['buka'], " - ", $row['tutup']  ?></p>
                        </div>
                    </div>
                    <div class="wrap">
                        <div class="flex" style="width: 15%; padding: 27px 0 0 25px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </div>
                        <div class="flex" style="width: 100%; padding: 5px;">
                            <h4>Banyak Lapangan</h3>
                                <p style="color: gray;"><?php echo $row['jumlah_lap'] ?></p>
                        </div>
                    </div>
                    <h4>Alamat</h4>
                <p style="color: gray;"><?php echo $row['alamat'] ?></p>
                    <h4>Nomor Telphon</h4>
                    <p style="color: gray;"><?php echo $row['no_telp'] ?></p>
                    <h4>Fasilitas</h4>
                    <p style="color: gray;"><?php echo $row['fasilitas'] ?></p>
                    <h4>Rata-rata Harga</h4>
                    <ul>
                        <li>
                            <p style="color: gray;"><?php echo $row['harga'] ?></p>
                        </li>
                    </ul>

                    <div class="wrap">

                        <div class="flex">
                            <div class="btn"  style="background-color: darkslategray;">
                                <a href="../Booking/index.php?uid=<?php echo $row['tempat_id'] ?>" style="color: white;">Pesan Sekarang</a>
                            </div>
                        </div>

                        <!-- <div class="flex">
                            <div class="btn" style="background-color: white;">
                                <a href="/index.php" style="color: darkslategray;">Cancel</a>
                            </div>
                        </div> -->

                    </div>

                </aside>
            </div>
            <?php
                }
            ?>
</body>

</html>