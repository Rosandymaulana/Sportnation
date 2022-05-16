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

        <div class="" id="about">
            <section class="about" id="about">
                <?php
                $query = "Select * from event limit 1";
                $result = mysqli_query($connect, $query);
                if (mysqli_num_rows($result) == 0) {
                ?>
                    <h1>Tidak ada event</h1>
                    <?php
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <h1><?php echo $row['judul'] ?></h1>
                        <div class="about-me">
                            <figure>
                                <img src="<?php echo $row['foto'] ?>" alt="">
                            </figure>
                            <p><?php echo $row['deskripsi'] ?></p>
                        </div>
                <?php
                    }
                }
                ?>
            </section>
        </div>

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
                        <div class="box" box_id="<?php $row['tempat_id']?>">
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
                                <button onclick="document.location='Pages/Booking/index.php'">Booking</button>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
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