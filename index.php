<?php
require('connect.php');
$page = "index";
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
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <title>Triple Phil | Home</title>
    <style>
        @media (min-width: 765px) {
            .about .row.two{
                flex-direction: row-reverse;
            }
        }
        @media (min-width: 1026px) {
            .work {
                height: 420px;
            }
            .about .row.two .content {
                flex: 1 1 40rem;
            }
        }
        .btn {
            background: transparent;
            border: 1.7px solid black;
            padding: 15px;
            color: black;
            border-radius: 3px;
        }
        .btn:hover {
            background: black;
            color: white;
            border: 1.7px solid black;
            
        }
        .footer {
            background:white;
        }
    </style>
</head>
<body>
    
    <?php include 'header.php'?>


    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <section class="swiper-slide slide" style="background:linear-gradient(rgba(9, 5, 54, 0.1), rgba(5, 4, 46, 0.3)), url('images/Mask Group 1.png') no-repeat;">
                    <div class="content one">
                        <h3>Innovative Traffic & Transport Solutions</h3>
                        <p> We are thrice as effective at combating the plights <br> of the Global Transportation Industry.<br> <strong>We are TriplePhil</strong> </p>
                    </div>
                </section>
            </div>
        </div>

        <div class="swiper2 home-slider">
            <div class="">
                <section class="swiper-slide slide slide2 " style="background:linear-gradient(rgba(9, 5, 54, 0.9), rgba(5, 4, 46, 0.9)), url('images/we.png') no-repeat;">
                    <div class="content two">
                        <h3>We are TriplePhil</h3>
                        <p> We are a transport and safety management <br> consultant with our core focus of Fleet Management, <br> Traffic
                            and transport management solutions, manpower <br> development and capacity building in the traffic <br>
                            and transport Operations niche.
                        </p>
                        <a href="services.php" class="btn">Learn More</a>
                    </div>
                </section>
                
            </div>
        </div>

    </section>

    <section class="about" id="about">
        <div class="row">
        
            <div class="image-abt">
                <img src="images/vision.png" alt="">
            </div>

            <div class="content">
                <div class="content2">
                    <h3>We run with a vision</h3>
                    <p> We are working towards technology adaptation mixed with cultural values for an innovative and sustainable traffic and transport management architecture  </p>
                </div>
                <div class="content2p">
                    <p> We want to see a globalization of state of the art working systems in the transportation Industry <br> We have a vision that keeps us on our toes to keep working day and night </p>
                </div>
            </div>

        </div>

        <div class="row two">

            <div class="image-abt">
                <img src="images/about2 (2).png" class="exe" alt="">
            </div>

            <div class="content">
                <div class="content2 three">
                    <h3>We deliver Excellence</h3>
                    <p> On all our services, we deliver what we promise, and even more, we work passionately on delivering more than our clients expect, and this has set us out amongst competitors as competent in our art</p>
                </div>
                <div class="content2p">
                    
                </div>
            </div>

        </div>


        <div class="row">

            <div class="image-abt">
                <img src="images/work.jpg" class="work" style="border-radius:10px;" alt="">
            </div>

            <div class="content">
                <div class="content2 three">
                    <h3>Our Work Speaks</h3>
                    <p> We have an itenerary of projects that have been accredited to our name, and we have delivered a great deal over the bar of our clients expectations at every instance</p>
                </div>
                <div class="content2p">
                    
                </div>
            </div>

        </div>

        <div class="box-container">
            <div class="box">
                <h3>10+</h3>
                <p>years of experience</p>
            </div>

            <div class="box">
                <h3>30+</h3>
                <p>projects completed</p>
            </div>

            <div class="box">
                <h3>200+</h3>
                <p>satisfied  clients</p>
            </div>

            <div class="box">
                <h3>50+</h3>
                <p>active workers</p>
            </div>
        </div>
    </section>

    <section class="reviews" id="reviews">
        <h1 class="heading">clients reviews</h1>
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <p> Great Company. Your buses are neat, and the drivers well behaved. Keep it up Please.</p>
                    <div class="user">
                        <div class="info">
                            <h3>Tola Sokoya</h3>
                            <h3><strong>Comapny NG</strong></h3>
                            <div class="starts">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p> We bless God for life, and outstanding services rendered unto us. We say God bless you all in Jesus name.</p>
                    <div class="user">
                        <div class="info">
                            <h3>Akin Oyejola</h3>
                            <h3><strong>RCCG-Lagos province 1234567</strong></h3>
                            <div class="starts">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p> We appreciate you greatly for your support and faithfulness during our last program. We pray that God will bless you and your organization and forward ever in Jesus name</p>
                    <div class="user">
                        <div class="info">
                            <h3>Pastor Olurinto Abayomi</h3>
                            <h3><strong>RCCG.</strong></h3>
                            <div class="starts">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <p> Appreciation to our Daddies that made the issue of Transportation to TBS Successful. God will shine His light on you and condemn darkness in your life. Kudos to the captains that piloted the busses. The Light of God locates you all.</p>
                    <div class="user">
                        <div class="info">
                            <h3>Pastor Adebayo Mabayoje</h3>
                            <h3><strong>RCCG.</strong></h3>
                            <div class="starts">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="events" id="events">
        <div class="heading">
            <h3>News & Events</h3>
        </div>

        <div class="swiper food-slider">
            <div class="swiper-wrapper">
                <?php
                    $query = mysqli_query($con, "SELECT * FROM events");
                    if(mysqli_num_rows($query)>0) {
                    $i = 1;
                    while($row = mysqli_fetch_array($query)) {
                        $id = $row['id'];
                        $title = $row['title'];
                        $sub = $row['subtitle'];
                        $link = $row['link'];
                        $image = $row['image'];
                        $action = $row['action'];

                        if(empty($link)) {
                            $display = "none";
                        }

                        else {
                            $display = "";
                        }
                ?>

                <div class="swiper-slide slide" data-name="food-1">
                    <img src="images/<?php echo $image;?>" alt="">
                    <h3><?php echo $title;?></h3>
                    <p> <?php echo $sub;?></p>

                    <a style="display: <?php echo $display;?>" href="https://<?php echo $link;?>" class="btn"><?php echo $action;?></a> 
                </div>

                <?php
                $i++;
                    }
                }
                else {
                ?>
                    <p style="font-weight: bolder; font-size: 2rem; color: black;">No Event available at the Moment.</p>
                <?php
                }
            ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

 

    

     <?php include 'footer.php'?>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script7.js"></script>
    <script>
        lightGallery(document.querySelector('.projects .box-container'));
        lightGallery(document.querySelector('.events .light'));
    </script>
</body>
</html>
