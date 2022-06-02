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
    <?php
    include "Pages/parts/header/index.php";
    ?>
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

                <a href="#" class="cta" style="background-color:#a9e7cc; color: #000000;">Cari Informasi</a>
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
                            <p>We served the best place to do Sports,
                                With best price,
                                best facility,
                                best field, etc.
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

        <div class="disp">
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
                }else{
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
            <div class="wrap">
                <div class="image" style="padding: 30px;">
                    <img src="<?php echo $row['foto']?>" alt="" width="400" height="300">
                </div>
                <div class="flex" style="padding: 30px;">
                    <h1><?php echo $row['judul']?></h1>
                    <p><?php echo $row['deskripsi']?></p>
                    <span><img src="./images/ic-tropy.png" alt="" style="width: 40px; padding-top: 1rem;"></span><strong>Rp. <?php echo $row['htm']?></strong>
                    <br><br><img src="./images/ic-location.png" alt="" style="width: 18px;"><a href="https://goo.gl/maps/cV3QHDGReHJWturQ7">View Location</a>
                    <br><br> <strong>Learn More --></strong>
                </div>
            </div>
                    <?php
                    }
                }
            ?>
        </div>

        <div class="feature">
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

    <?php
    include "./Pages/parts/footer/footer.php";
    ?>

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