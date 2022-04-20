<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booking Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="booking.css">
</head>

<body>

    <section class="banner">
        <h1>BOOK YOUR SPORT ARENA NOW!</h1>
        <div class="card-container">
            <div class="card-img">
                <!-- image here -->
            </div>

            <div class="card-content">
                <h3>Reservation</h3>
                <form action="../../php/booking.php" method="get">
                    <div class="form-row">
                        <input name="date" type="date" placeholder="Choose Date" required>
                        <input name="time" type="time" placeholder="Set Time" min="09:00" max="18:00" required>
                    </div>

                    <div class="form-row">
                        <input name="name" value="" type="text" placeholder="Full Name">
                        <input name="phone" type="text" placeholder="Phone Number">
                    </div>

                    <div class="form-row">
                        <input name="jam" type="number" placeholder="Time playing? (in hours)" min="1">

                    </div>
                    <div class="form-row center">
                        <input type="submit" value="Book Now">
                    </div>
            </div>
        </div>
    </section>

</body>

</html>