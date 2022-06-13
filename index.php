<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "php/connect.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="content.css">

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
                <span class="logo"><a href="../../index.php">Sportnation</a></span>
                <i class='bx bx-x siderbarClose'></i>
            </div>

            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="Pages/About/index.php">About</a></li>
                <li><a href="Pages/DetailVenue/index.php">SportVenue</a></li>
                <li><a href="Pages/RoomList/index.php">Booking List</a></li>
                <!-- <li><a href="#rooms">Rooms</a></li> -->
                <li><a href="Pages/Customer Service/index.php">Support</a></li>
                <?php
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
    <main>
        <div class="hero-section" id="home">
            <div class="left">
                <h1>
                    Mulai Olahraga<br /> Sekarang
                </h1>
                <p>
                    This is a comprehensive course on Game Development. You will learn everything from generating an
                    idea to
                    publishing your games to different platforms.
                </p>

                <a href="#about-me" class="cta" style="background-color:#0071c7; color: white;">Cari Informasi</a>
            </div>

            <div class="right">
                <img src="images/bg_jumbotron.svg" alt="" />
            </div>

        </div>

        <section class="steps">
            <div class="card">
                <img src="./images/tabs.png" alt="" width="25">
                <p>Step 01</p>
                <h4>Menyusun Jadwal </h4>
                <img src="./images/line.png" alt="">
            </div>
            <div class="card">
                <img src="./images/tabs.png" alt="" width="25">
                <p>Step 02</p>
                <h4>Meningkatkan Kegiatan</h4>
                <img src="./images/line.png" alt="">
            </div>
            <div class="card">
                <img src="./images/tabs.png" alt="" width="25">
                <p>Step 03</p>
                <h4>Lihat Perkembangan</h4>
                <img src="./images/line.png" alt="">
            </div>
        </section>

        <div class="about-me" id="about-me">
            <section class="about" id="about">
                        <h1>About</h1>
                        <div class="about-me">
                            <figure>
                                <img src="https://wallpaperaccess.com/full/378757.png" alt="">
                            </figure>
                            <p>Sewa Lapangan dengan website Sportnation dapat membantu Anda melakukan penyewaan lapangan untuk melaksanakan Olahraga seperti Futsal dan sejenisnya dengan penggunaan website yang mudah dimengerti.
                                <br>Anda dapat menyewa kapan saja dengan berbagai pilihan lapangan dan tempat, serta dapat memilih waktu yang diinginkan.
                                <br>Olahraga sangat penting untuk menjaga kesehatan tubuh. Yuk, gunakan website Sportnation dan mulailah berolahraga bersama tim dan teman agar tubuh terasa lebih bugar.
                            </p>
                        </div>
            </section>
        </div>

        <!-- <section class="discover">
            <img src="./images/volley.jpg" alt="">
            <div class="card" style="width: 40%;">
                <h1>Discover Elite Celebrity Workouts</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia mollitia illum, quisquam suscipit asperiores
                    dolorem reiciendis quasi ducimus officiis itaque repellendus quis quae consequuntur, voluptates fugit? Ipsum
                    officiis soluta numquam.</p>
                <a href="#" class="btn" style="color: white;">Get Access</a>
            </div>
        </section> -->

        <div class="sportvenue" id="sportvenue">
            <h1>SportVenue</h1>
            <div class="container">
                <?php
                $query = "select * from tempat Limit 6";
                $result = mysqli_query($connect, $query);
                if (mysqli_num_rows($result) == 0) {
                ?>
                    <div class="box">
                        <div class="image">
                            <img src="images/sportvenue-1.jpg">
                        </div>
                        <div class="name_job">Baseball Club</div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque
                            reiciendi
                            nemo.
                        </p>
                        <div class="btns">
                            <button>Lihat Detail</button>
                            <button>Booking</button>
                        </div>
                    </div>
                    <?php
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="box" box_id="<?php $row['tempat_id'] ?>">
                            <div class="image">
                                <img src="<?php echo $row['foto_tempat'] ?>">
                            </div>
                            <div class="name_job"><?php echo $row['nama_tempat'] ?></div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p> <?php echo $row['fasilitas'] ?>
                            </p>
                            <div class="btns">
                                <button onclick="window.location.href='Pages/DetailVenue/index.php?uid=<?php echo $row['tempat_id'] ?>';">Lihat Detail</button>
                                <button onclick="window.location.href='Pages/Booking/index.php?uid=<?php echo $row['tempat_id'] ?>';">Booking</button>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>

        <div class="disp" id="event">
            <center>
                <h1>Event of the month</h1>
                <p>You can join even and enjoy the fun</p>
            </center>
            <?php
            $query = "select * from event Limit 3";
            $result = mysqli_query($connect, $query);
            if (mysqli_num_rows($result) == 0) {
            ?>
                <div class="wrap">
                    <div class="image" style="padding: 30px;">
                        <img src="football.jpg" alt="" width="400" height="300">
                    </div>
                    <div class="flex" style="padding: 30px;">
                        <h1></h1>
                        <p></p>
                        <span><img src="./images/ic-tropy.png" alt="" style="width: 40px; padding-top: 1rem;"></span><strong></strong>
                        <br><br><img src="./images/ic-location.png" alt="" style="width: 18px;"><a href="#">View Location</a>
                        <br><br> <strong>Learn More --></strong>
                    </div>
                </div>
                <?php
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="wrap">
                        <div class="image" style="padding: 30px;">
                            <img src="<?php echo $row['foto'] ?>" alt="" width="400" height="300">
                        </div>
                        <div class="flex" style="padding: 30px;">
                            <h1><?php echo $row['judul'] ?></h1>
                            <p><?php echo $row['deskripsi'] ?></p>
                            <span><img src="./images/ic-tropy.png" alt="" style="width: 40px; padding-top: 1rem;"></span><strong>Rp. <?php echo $row['htm'] ?></strong>
                            <br><br><img src="./images/ic-location.png" alt="" style="width: 18px;"><a href="https://goo.gl/maps/cV3QHDGReHJWturQ7">View Location</a>
                            <br><br> <strong>Learn More --></strong>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>

        <div class="feature" id="featured">
            <center>
                <h1>Featured program of the month</h1>
                <p>Featured program of the month</p>
            </center>
            <div class="wrap">
                <div class="feat-1">
                    <img src="./images/about.jpg" alt="">
                    <div class="description">
                        <h4>7 Days to Shrink Belly and Tights with Aerobics!</h4>
                        <br>
                        <p>Learn More --></p>
                    </div>
                </div>
                <div class="feat-1">
                    <img src="./images/about.jpg" alt="">
                    <div class="description">
                        <h4>Burn belly fat by lying down, without using tools</h4>
                        <br>
                        <p>Learn More --></p>
                    </div>
                </div>
            </div>
        </div>

    </main>

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
                        <li><a href="Pages/About/index.php">about us</a></li>
                        <li><a href="Pages/Customer Service/index.php">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Features</h4>
                    <ul class="foot">
                        <li><a href="Pages/FaQ/index.html">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul class="foot">
                        <li><a href="./Pages/Acount/index.html">Account</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul class="foot">
                        <li><a href="Pages/Contact/index.php">contact us</a></li>
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