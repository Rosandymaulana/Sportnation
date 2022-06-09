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
        <nav>
    <div class="nav-bar">
        <i class='bx bx-menu sidebarOpen'></i>

        <span class="logo navLogo">
            <a href="#">
                <img class="brand" src="../../images/logo.png" alt="" style="width: 1.5rem; margin-right: .7rem;">
                Sportnation
            </a>
        </span>

        <div class="menu">
            <div class="logo-toggle">
                <span class="logo"><a href="../../index.php">Sportnation</a></span>
                <i class='bx bx-x siderbarClose'></i>
            </div>

            <ul class="nav-links">
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../About/index.php">About</a></li>
                <li><a href="../DetailVenue/index.php">SportVenue</a></li>
                <li><a href="#">Booking List</a></li>
                <!-- <li><a href="#rooms">Rooms</a></li> -->
                <li><a href="../Customer%20Service/index.php">Support</a></li>
                <?php
                if (isset($_SESSION['status'])) {
                ?>
                    <li><a href="../Account/index.php">Account</a></li>
            </ul>
        </div>
        <a href="php/logout.php" class="register" style="background-color:#a9e7cc; color: #1D1D1D;">Logout</a>
    <?php
                } else {
    ?>
        <div class="button-box">
            <a href="Pages/Login/index.html" class="login" style="background-color:#a9e7cc; color: #1D1D1D;">Masuk</a>
            <a href="Pages/Register/index.html" class="register" style="background-color:#008080">Daftar</a>
        <?php
                }
        ?>
        </div>
    </div>
</nav>
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
        <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Follow us</h4>
                    <div class="social-links">
                        <p style="color: whitesmoke;">getting used to sports is good</p>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Help</h4>
                    <ul class="foot">
                        <li><a href="../About/index.php">about us</a></li>
                        <li><a href="../Customer Service/index.php">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Features</h4>
                    <ul class="foot">
                        <li><a href="../FaQ/index.html">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul class="foot">
                        <li><a href="../Account/index.php">Account</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul class="foot">
                        <li><a href="../Contact/index.html">contact us</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </body>

</html>