<!DOCTYPE html>
<html lang="en">
    <?php
session_start();
include "../../php/connect.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="content.css">

    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!--<title>Responsive Navigation Menu Bar</title>-->
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
                    <li><a href="#">About</a></li>
                    <li><a href="../DetailVenue/index.php">Sport Venue</a></li>
                    <li><a href="../RoomList/index.php">Booking List</a></li>
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

    <div class="wrap">
        <div class="img">
            <img src="../../images/abt1.jpeg" width="500px">
        </div>
        <div class="hero-section" style="flex-grow: 1; margin-top: 50px;">
            <div class="left">
                <h1>About Us</h1>
                <p>
                    Penyewaan lapangan futsal termudah di Sportnation. Dengan pemesanan lewat web yang cepat dan praktis
                    tanpa takut kehabisan antrian lapangan. Anda bisa menyewa lapangan futsal dimanapun dan kapanpun.
                    Kami ingin memberikan kemudahan kepada anda yang memiliki hobi futsal atau sepakbola dalam menyewa
                    lapangan futsal. Dengan berbagai pilihan lapangan dan harga yang tersebar di hampir seluruh kota
                    besar. Sportnation hadir untuk membantu anda menemukan lapangan futsal yang pas dengan keinginan
                    anda. Tinggal klik, semua bisa sewa!
                </p>
            </div>

            <!-- Slide Show Prosess -->
            <!-- <div class="right">
                <img src="images/image-1.jpg" alt="" />
            </div> -->
        </div>
    </div>

    <div class="wrap">
        <div class="hero-section" style="flex-grow: 1; padding: 0 0 0 100px;">
            <div class="left">
                <h1></h1> <!-- Jangan dihapus H1 ini buat padding -->

                <p>
                    Sportnation hadir sebagai penyewaan lapangan futsal pertama di Indonesia. Dengan berbagai pilihan
                    lapangan dan harga yang tersebar di hampir seluruh Kota Malang.
                </p>
            </div>

            <!-- Slide Show Prosess -->
            <!-- <div class="right">
                <img src="images/image-1.jpg" alt="" />
            </div> -->
        </div>
        <div class="img2">
            <img src="../../images/abt2.jpeg" width="500px">
        </div>
    </div>

    <!-- <div class="card">
        <div class="main-images">
            <img src="/images/image-1.jpg" alt="image-1">
        </div>
        <div class="details">
            <span class="shoe_name">SM Futsal</span>
            <p>Lorem ipsum dolor sit lorenm i amet, consectetur adipisicing elit. Eum, ea, ducimus!</p>
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bx-star'></i>
            </div>
        </div>

        
        <div class="color-price">
            <div class="color-option">
                <span class="color">Colour:</span>
                <div class="circles">
                    <span class="circle blue active" id="blue"></span>
                    <span class="circle pink " id="pink"></span>
                    <span class="circle yellow " id="yellow"></span>
                </div>
            </div>
            <div class="price">
                <span class="price_num">$09.00</span>
                <span class="price_letter">Nine dollar only</span>
            </div>
        </div>

        <div class="button">
            <div class="button-layer"></div>
            <button>Join Room</button>
        </div>
    </div> -->

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
                        <li><a href="#">our services</a></li>
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

    <script>

        const body = document.querySelector("body"),
            nav = document.querySelector("nav"),
            searchToggle = document.querySelector(".searchToggle"),
            sidebarOpen = document.querySelector(".sidebarOpen"),
            siderbarClose = document.querySelector(".siderbarClose");

        sidebarOpen.addEventListener("click", () => {
            nav.classList.add("active");
        });

        body.addEventListener("click", e => {
            let clickedElm = e.target;

            if (!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")) {
                nav.classList.remove("active");
            }
        });

    </script>

</body>

</html>