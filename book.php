<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- font awasome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- customer css file link -->
    <link rel="stylesheet" href="css/style.css">

<body>
    <!-- head section satrt -->
    <section class="header">
        <a href="home.php" class="logo"> Travel. </a>


        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="book.php">Book</a>
            <a href="packge.php">Packge</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>





    </section>
    <!-- header section end  -->
    <!-- <div class="heading" style="background:url(image/header2.jpg) no-repeat"> -->
    <div class="heading" style="background: url('image/header2.jpg') no-repeat;">

        <h1>Book Now</h1>
    </div>
    <!-- Booking section start -->
    <section class="booking">

        <h1 class="heading-title">Book Your Trip!</h1>
        <form action="boock_form.php" method="POST" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name:</span>
                    <input type="text" placeholder="Enter Your Name" name="name">
                </div>
                <div class="inputBox">
                    <span>Email:</span>
                    <input type="email" placeholder="Enter Your email" name="email">
                </div>
                <div class="inputBox">
                    <span>Phone:</span>
                    <input type="number" placeholder="Enter Your Number" name="phone">
                </div>
                <div class="inputBox">
                    <span>Where To:</span>
                    <input type="text" placeholder="Plase What you Want to Visit" name="location">
                </div>
                <div class="inputBox">
                    <span> How Many Member:</span>
                    <input type="number" placeholder="NUmber Of Guests" name="gestCount">
                </div>
                <div class="inputBox">
                    <span>Arrivals:</span>
                    <input type="date" name="arrival">
                </div>
                <div class="inputBox">
                    <span>Leaving:</span>
                    <input type="date" name="leaving">
                </div>

            </div>
            <input type="submit" value="submit" class="btn" name="sent">
        </form>

    </section>

    <!-- Booking section End -->




















    <!-- footer section starts -->
    <?php include('footer.php'); ?>
    <!-- footer section end  -->






    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custmer js file -->
    <script src="js/script.js"></script>

</body>

</html>