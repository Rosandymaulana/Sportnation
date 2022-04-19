<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<?php
session_start();
include "../../php/connect.php";
$id = $_SESSION['id'];
?>

<head>
    <meta charset="UTF-8">
    <title> Account </title>
    <link rel="stylesheet" href="account.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">Account</div>
        <div class="content">
            <form action="../../php/account.php" method="get">
                <?php
                $query = "Select * from user where user_id = '$id'";
                $result = mysqli_query($connect, $query);
                while($row = mysqli_fetch_array($result)){
                ?>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input id="username" name="username" type="text" placeholder="Enter your name" value="<?php echo $row['username'] ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Fullname</span>
                        <input id="name" name="name" type="text" placeholder="Enter your username" value="<?php echo $row['nama'] ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input id="email" name="email" type="email" placeholder="Enter your email" value="<?php echo $row['email'] ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input id="phone" name="phone" type="tel" placeholder="Enter your number" value="<?php echo $row['telp'] ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input id="password" name="password" type="password" placeholder="Enter your password" value="<?php echo $row['password'] ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input id="c_password" name="c_password" type="password" placeholder="Confirm your password" value="<?php echo $row['password'] ?>" required>
                    </div>
                </div>
                <?php
                }
                ?>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1" checked="checked">
                    <input type="radio" name="gender" id="dot-2">
                    <input type="radio" name="gender" id="dot-3">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Prefer not to say</span>
                        </label>
                    </div>
                </div>
                <div class="user-post">
                    <div class="button">
                        <input onClick="history.go(-1)" type="button" value="Discard Changes" id="discard">
                    </div>
                    <div class="button">
                        <input type="submit" value="Save Changes" id="save">
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>