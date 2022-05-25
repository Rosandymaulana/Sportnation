<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "../../php/connect.php";
$id = $_SESSION['id'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h5>Pembayaran</h5>
        <div class="content">
            <section class="left">
                <img src="../../images/Pembayaran-Image-1.png" alt="">
        <?php
                $book_id = $_GET['uid'];
                    $query = "select *, addtime(sec_to_time(durasi*3600), jam) as jum 
                    from booking b, lapangan l, user u where b.nomor = '$book_id' and b.user_id = u.user_id and b.lap_id = l.lap_id";
                    $result = mysqli_query($connect, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $jam_mulai = $row['jam'];
                        $durasi = $row['durasi'];
                        $jam_berakhir = $row['jum'];
                        $nama_lap = preg_replace("/[^0-9]/","",$row['lap_id']);
                        ?>
                <div class="data">
                    <table class="infoTempat">
                        <tr>
                            <td>No. Booking</td>
                            <td><?php echo $book_id ?></td>
                        </tr>
                        <tr>
                            <td>Lapangan</td>
                            <td><?php echo $nama_lap ?></td>
                        </tr>
                    </table>

                    <table class="infoTanggal">
                        <tr>
                            <td>Tanggal</td>
                            <td class="tgl"><?php echo $row['tgl'] ?></td>
                        </tr>
                        <tr>
                            <td>Jam Mulai</td>
                            <td><?php echo $jam_mulai ?></td>
                        </tr>
                        <tr>
                            <td>Jam Berakhir</td>
                            <td><?php echo $jam_berakhir ?></td>
                        </tr>
                    </table>

                </div>
                <figure>
                    <img src="../../images/Pembayaran-MetodePembayaran.png" alt="">
                    <div class="metode">
                        <h1>Metode Pembayaran</h1>

                        <select name="pilihanMetode" id="pilihanMetode">
                            <option value="Gopay">Gopay</option>
                            <option value="Link Aja">Link Aja</option>
                            <option value="Ovo">Ovo</option>
                        </select>
                    </div>
                </figure>
            </section>
            <section class="right">
                <h4>Penyewa</h4>
                <section class="myacount">
                    <figure>
                        <img src="../../images/PembayaranAcount.png" alt="">
                        <h3><?php echo $row['nama'] ?></h3>
                    </figure>
                    <article class="myemail">
                        <h1>Email Address</h1>
                        <h1 class="email"><?php echo $row['email'] ?></h1>
                    </article>
                    <article class="mytelp">
                        <h1>No.Telp</h1>
                        <h1 class="telp"><?php echo $row['no_telp'] ?></h1>
                    </article>
                </section>
                <section class="tagihan">
                    <h4>Tagihan</h4>
                    <article class="harga">
                        <table>
                            <tr>
                                <td class="detailharga">Harga</td>
                                <td><?php echo $row['harga'] ?>&nbsp&nbsp</td>
                                <td>/Jam</td>
                            </tr>
                        </table>
                    </article>
                    <article class="total">
                        <table>
                            <tr>
                                <td class="detailTotal">Total</td>
                                <td><?php echo $durasi ?>&nbsp&nbsp</td>
                                <td>/Jam</td>
                            </tr>
                        </table>
                    </article>
                    <br>
                    <article class="layanan">
                        <table>
                            <tr>
                                <td>Biaya Layanan</td>
                                <td>Rp. 3000</td>
                            </tr>
                        </table>
                    </article>
                    <br>
                    <article class="totalKeseluruhan">
                        <h1><?php echo $row['total'] ?></h1>
                    </article>
                    
                        <?php
            }
        ?>
                    <div class="pickButton">
                        <a href="../../index.php" class="btnBatalkan"></i>Batalkan</a>
                        <a href="../../php/pembayaran.php" class="btnKonfirmasi">Konfirmasi</a>
                    </div>
                </section>
            </section>
        </div>
    </main>
    <br><br><br>
</body>

</html>