<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include '../../php/connect.php';
$id = $_SESSION['id'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../style.css">
</head>

    <body>
        <?php
        include '../parts/header/index.php';
        ?>
        <div class=" card">
            <?php
            $query = "Select * from booking b, lapangan l, tempat t where b.user_id = '$id' 
            and b.lap_id = l.lap_id and l.tempat_id = t.tempat_id
            and tgl >= curdate() order by b.tgl desc limit 6;";
                    $result = mysqli_query($connect, $query);
                    while ($row = mysqli_fetch_array($result)) {
            ?>
    <div class=" box">
        <img src="<?php echo $row['foto'] ?>" alt="">
        <h5><?php echo $row['lap_id'] ?></h5>
        <p class="place">
            <img src="../../images/ic-location.png" alt="">
            SM Futsal
        </p>
        <p class="place">
            <img src="../../images/ic-date.png" alt="">
            <?php echo $row['alamat']?>
        </p>
        <p class="place">
            <img src="../../images/ic-homePlace.png" alt="">
            <?php echo $row['lap_id'] ?>
        </p>
        <p class="place">
            <img src="../../images/ic-people.png" alt="">
            <?php echo $row['durasi'] ?>
        </p>
        <div class="info">
            <h3><?php echo $row['total'] ?></h3>
            <button>Join Now</button>
        </div>
    </div>
    <?php
                    }
    ?>
    </div>
    <?php
    include '../parts/footer/footer.php';
    ?>
    </body>

</html>