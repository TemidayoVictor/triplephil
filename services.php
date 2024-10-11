<?php
$page = "services";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" rel="stylesheet" type="text/css">
    <link href="css/services3.css" rel="stylesheet" type="text/css">
    <title>Triple Phil | Our Services</title>
    <style>
        
    </style>
</head>
<body>
    

    <?php include 'header.php'?>


    <section class="about" id="about">
        
        <h1 class="heading">What we do</h1>
        <p> We are a transport and safety management consultant with our core focus of Fleet Management, Traffic
            and transport management solutions, manpower development and capacity building in the traffic 
            and transport Operations niche.
        </p>
        
        <div class="row">
            <div class="image-abt">
                <img src="images/about3.png" alt="">
            </div>

            <div class="content one mobility">
                <h3>Mobility Solutions</h3>
                <p> With our focus on transport solutions that resonate with growing cities,we help our clients to develop & manage their fleet in resonance with current trends</p>
                <div class="paragraph">
                    <p>Our mobility solutions cover <strong>Fleet Management; Public transport Management solutions; Traffic Management Solutions and Bus branding</strong></p>
                </div>
                <!--<a href="#" class="btn">Read More</a>-->
            </div>
        </div>

        <div class="row two">
            
            <div class="image-abt">
                <img src="images/abut.png" alt="">
            </div>

            <div class="content two">
                <h3>Manpower Development and Capacity Building</h3>
                <p> We believe in the power of people, and we work to harness the potentials of people at every corner of the industry towards excellence</p>
                <div class="paragraph">
                    <p>Our Manpower development & Capacity Building servics cover <strong>Driver Training</strong> as well as <strong>Field Operatives Training</strong> </p>
                </div>
                
            </div>
        </div>

        <div class="row">
            <div class="image-abt">
                <img src="images/about2.png" alt="">
            </div>

            <div class="content one">
                <h3>Education and Enlightenment</h3>
                <p> We do our best to empower the society with the knowledge that will help make the society safe and in syncronization, drive our Vision.</p>
                <div class="paragraph">
                    <p>Our Education and Enlightenment basically spans around our Traffic and transport enlightenment initiative - which has been
                    running for about 2 years now.</p>
                </div>
                <!--<a href="#" class="btn">Read More</a>-->
            </div>
        </div>

    </section>

            
    <section class="logo-container " style="background: var(--light-bg)">
        <h1 class="heading">Our Services</h1>
        <div class="swiper logo-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" id="overlay"> <img src="images/logo5.png" alt=""> <p>Transport & logistics <br> for Events and Programs</p> </div>
                <div class="swiper-slide slide" id="overlay2"> <img src="images/logo1.png" alt=""> <p>Mobility Solution</p> </div>
                <div class="swiper-slide slide" id="overlay3"> <img src="images/logo2.png" alt=""> <p>Training</p> </div>
                <div class="swiper-slide slide" id="overlay4"> <img src="images/logo3.png" alt=""> <p>Procurement</p> </div>
                <div class="swiper-slide slide" id="overlay5"> <img src="images/logo5.png" alt=""> <p>Feasibility Studies</p> </div>
                <div class="swiper-slide slide" id="overlay6"> <img src="images/logo5.png" alt=""> <p>Data Gathering and Analysis</p> </div>
                <div class="swiper-slide slide" id="overlay7"> <img src="images/logo5.png" alt=""> <p>Transportation Data and Analysis</p> </div>
                <div class="swiper-slide slide" id="overlay8"> <img src="images/logo5.png" alt=""> <p>Transport Consultancy</p> </div>
            </div>
        </div>
    </section>
     
    <section class="overlay">
        <div class="title">Our Event Clients</div>
        <div class="swiper logo-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide"> <img src="images/logo4.png" alt="">  </div>
                <div class="swiper-slide slide"> <img src="images/logo6.png" alt="">  </div>
                <div class="swiper-slide slide"> <img src="images/logo7.png" alt="">  </div>
            </div>
        </div>
        <i class="fas fa-times" id="overlay-close"></i>
    </section>
        
    <?php include 'footer.php'?>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script-services.js"></script>
    <script>
        lightGallery(document.querySelector('.projects .box-container'));
        lightGallery(document.querySelector('.events .light'));
    </script>
    <script>
        var swiper = new Swiper(".logo-slider", {
        loop: true,
        grabCursor:true,
        spaceBetween: 20,
        breakpoints: {
            450: {
                slidesPerView: 3,
            },
            640: {
                slidesPerView: 4,
            },
            768: {
                slidesPerView: 5,
            },
            1000: {
                slidesPerView: 5,
            },
        },
    });
    </script>
</body>
</html>