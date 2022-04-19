<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="content,css">

    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>

            <span class="logo navLogo">
                <a href="#">
                    <img class="brand" src="/images/logo.png" alt="" style="width: 1.5rem; margin-right: .7rem;">
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
                </ul>
            </div>

            <div class="button-box">
                <?php
    include "connect.php";
    session_start();
    echo "hai";
    if($_SESSION['status'] == 'login'){
?>
                <a onclick="logout()" class="logout"
                    style="background-color:#a9e7cc; color: #1D1D1D;">Logout</a>
                    <?php
    }else{
        ?>
<a href="Pages/Login/index.html" class="login"
                    style="background-color:#a9e7cc; color: #1D1D1D;">Masuk</a>
                <a href="Pages/Register/index.html" class="register" 
                    style="background-color:#008080">Daftar</a>
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

                <a href="#" class="cta" style="background-color:#a9e7cc; color: #000000;">Cari Informasi</a>
            </div>

            <div class="right">
                <img src="images/bg_jumbotron.svg" alt="" />
            </div>

        </div>

        <div class="" id="about">
            <section class="about" id="about">
                <?php
            $query = "Select * from event";
            $result = mysqli_query($connect, $query);
         if(mysqli_num_rows($result) == 0){
?>
<h1>Tentang Sportnation</h1>
                <div class="about-me">
                    <figure>
                        <img src="images/about.jpg" alt="">
                    </figure>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit ipsum delectus
                        quia,molestiae
                        consequatur dolorum quidem, itaque qui consectetur vel? Molestias voluptatem amet quam
                        voluptates
                        quis saepe est eveniet!</p>
                </div>
<?php
        }else{
        while($row = mysqli_fetch_assoc($result)){       
        ?>
                <h1><?php echo $row['judul_event'] ?></h1>
                <div class="about-me">
                    <figure>
                        <img src="images/<?php echo $row['banner'] ?>" alt="">
                    </figure>
                    <p><?php echo $row['desc'] ?></p>
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
            $query = "select * from tempat Limit 3";
            $result = mysqli_query($connect, $query);
         if(mysqli_num_rows($result) == 0){
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
        }else{
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="box">
                    <div class="image">
                        <img src="images/<?php echo $row['foto_tempat']?>.jpg">
                    </div>
                    <div class="name_job"><?php echo $row['nama_tempat']?></div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p> <?php echo $row['fasilitas']?>
                    </p>
                    <div class="btns">
                        <button>Lihat Detail</button>
                        <button>Booking</button>
                    </div>
                </div>
                <?php
            }
        }
        ?>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <p style="color: whitesmoke;">getting used to sports is good</p>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Help</h4>
                    <ul class="foot">
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Features</h4>
                    <ul class="foot">
                        <li><a href="#">FAQ</a></li>
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
                        <li><a href="/Pages/Booking/index.html">Booking</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul class="foot">
                        <li><a href="Pages/Contact/index.html">contact us</a></li>
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