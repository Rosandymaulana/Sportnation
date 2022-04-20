<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parts | Header</title>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">

    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>

            <span class="logo navLogo">
                <a href="#">
                    <img class="brand" src="images/logo.png" alt="" style="width: 1.5rem; margin-right: .7rem;">
                    Sportnation
                </a>
            </span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#">Sportnation</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#sportvenue">SportVenue</a></li>
                    <li><a href="#rooms">Rooms</a></li>
                    <li><a href="#content">Content</a></li>
                    <li><a href="Pages/Customer Service/index.html">Support</a></li>
                    <?php
                    include "../../../php/connect.php";
                    if (isset($_SESSION['status'])) {
                    ?>
                        <li><a href="Pages/Account/index.php">Account</a></li>
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

    <script src="index.js"></script>

</body>

</html>