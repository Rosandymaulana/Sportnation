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
                <span class="logo"><a href="/Sportnation.fork/index.php">Sportnation</a></span>
                <i class='bx bx-x siderbarClose'></i>
            </div>

            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#sportvenue">SportVenue</a></li>
                <li><a href="#content">Content</a></li>
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

<script src="index.js"></script>