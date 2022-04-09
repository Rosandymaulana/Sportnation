<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="content,css">

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
                    <img class="brand" src="../images/logo.png" alt="" style="width: 1.5rem; margin-right: .7rem;">
                    Sportnation
                </a>
            </span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#">Sportnation</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">SportVenue</a></li>
                    <li><a href="#">Rooms</a></li>
                    <li><a href="#">Content</a></li>
                    <li><a href="../Pages/Customer Service/c_sevice.html">Support</a></li>
                    <!-- <li><a href="#">Payments</a></li> -->
                </ul>
            </div>

            <div class="button-box">
                <a href="Pages/Login/login.html" class="login"
                    style="background-color:#a9e7cc; color: #1D1D1D;">Masuk</a>
                <a href="Pages/Register/register.html" class="register" style="background-color:#008080">Daftar</a>
            </div>
        </div>

    </nav>

    <div class="hero-section">
        <div class="left">
            <h1>
                Learn the art of <br />
                Game Dev
            </h1>

            <p>
                This is a comprehensive course on Game Development. You will learn
                everything from generating an idea to publishing your games to
                different platforms.
            </p>

            <a href="#" class="cta" style="background-color:#a9e7cc; color: #000000;">Cari Informasi</a>
        </div>

        <!-- Slide Show Prosess -->
        <!-- <div class="right">
            <img src="images/image-1.jpg" alt="" />
        </div> -->

    </div>

    <div class="card">
        <div class="main-images">
            <img src="../images/image-1.jpg" alt="image-1">
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

        <!-- Sementara Tidak Difungsikan -->
        <!-- <div class="color-price">
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
        </div> -->

        <div class="button">
            <div class="button-layer"></div>
            <button>Join Room</button>
        </div>
    </div>

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
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul class="foot">
                        <li><a href="#">watch</a></li>
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