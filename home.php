<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- font awasome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- customer css file link -->
    <link rel="stylesheet" href="css/style.css">

<body>
    <!-- head section satrt -->
    <section class="header">
        <a href="home.php" class="logo"> Travel.LK </a>


        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="book.php">Book</a>
            <a href="packge.php">Packge</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>





    </section>
    <!-- header section end  -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(image/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>Explore,Discover,Travel</span>
                        <h3>Travel Arround The World</h3>
                        <a href="packge.php" class="btn"> Discover More</a>

                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(image/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>Explore,Discover,Travel</span>
                        <h3>Discover The New Places</h3>
                        <a href="packge.php" class="btn"> Discover More</a>

                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(image/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>Explore,Discover,Travel</span>
                        <h3>Make Your Tour Worthwhile </h3>
                        <a href="packge.php" class="btn"> Discover More</a>

                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- home section start  -->


    <!-- home section end  -->
    <!-- Service Section start  -->
    <section class="services">
        <h1 class="heading-title"> Our Service</h1>
        <div class="box-container">
            <div class="box">
                <img src="image/icon-1.png" alt="">
                <h3>Adventure</h3>
            </div>
            <div class="box">
                <img src="image/icon-2.png" alt="">
                <h3>Tour Guide</h3>
            </div>
            <div class="box">
                <img src="image/icon-3.png" alt="">
                <h3>Trakking</h3>
            </div>
            <div class="box">
                <img src="image/icon-4.png" alt="">
                <h3>Camp Fire</h3>
            </div>
            <div class="box">
                <img src="image/icon-5.png" alt="">
                <h3>Off Road</h3>
            </div>
            <div class="box">
                <img src="image/icon-6.png" alt="">
                <h3>Camping</h3>
            </div>

        </div>
    </section>
    <!-- Service Sectoin End  -->
    <!-- home about section start -->
    <sectoin class="home-about">
        <div class="image">
            <img src="image/aboutus.jpg" alt="">


        </div>
        <div class="content">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, quo. Ab fuga saepe distinctio quod velit
                excepturi veritatis ea molestiae. Nulla, hic quisquam voluptate consequatur quasi tempora repellat
                suscipit pariatur.
            </p>
            <a href="about.php" class="btn">Read More</a>

        </div>

    </sectoin>

    <!-- home about secttion end  -->
    <section class="home-packge">
        <h1 class="heading-title">
            Our Packages
        </h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="image/img-sigirii1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, repellendus.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="image/img-ninearch.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, repellendus.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="image/img-pinnawala.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, repellendus.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>
        <div class="load-more">
            <a href="book.php" class="btn">Load More</a>
        </div>
    </section>
    <!-- home packege sectoin start  -->

    <!-- home packege section end  -->
    <!-- home offer sectoin start -->
    <secton class="home-offer">
        <div class="content">
            <h3>Upto 50% Off</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum hic sit, dolorum aut maiores similique ex
                quod saepe optio obcaecati.</p>
            <a href="bool.php" class="btn">Bool Now</a>
        </div>
    </secton>
    <!-- home offer sectoin end  -->


















    <br>
    <!-- footer section starts -->
    <?php include('footer.php'); ?>


    <!-- footer section end  -->






    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custmer js file -->
    <script src="js/script.js"></script>

</body>

</html>