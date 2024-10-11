<?php
$page = "contact";

$msg = "";
$msgstatus = "";

if(filter_has_var(INPUT_POST, 'mail')) {

    /*$name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $subject = mysqli_real_escape_string($con,$_POST['subject']);
    $message = mysqli_real_escape_string($con,$_POST['message']);*/

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    

    if(!empty($name)) {
        $name = $name;
    }
    else {
        $name = "";
    }

    if(!empty($email)) {
        $email = $email;
    }
    else {
        $email = "";
    }

    if(!empty($phone)) {
        $phone = $phone;
    }
    else {
        $phone = "";
    }

    if(!empty($subject)) {
        $subject = $subject;
    }
    else {
        $subject = "";
    }

    if(!empty($message)) {
        $message = $message;
    }
    else {
        $message = "";
    }

    $msg = "Mail Sent Successfully";
    $msgstatus = "success";

    $to = "support@3phil.com";
    $subject = $subject;
    $message = "Message from ".$name."<br/>".$message." <br/> Contact Mail: ".$email." <br/> Contact Phone: ".$phone;

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

    mail($to, $subject, $message, $headers);

    echo $name;
    echo $email;
    echo $phone;
    echo $subject;
    echo $message;
}
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
    <link href="css/style20.css" rel="stylesheet" type="text/css">
    <title>Triple Phil | Contact</title>
    <style>
        @media (min-width: 765px) {
            .about .row.two{
                flex-direction: row-reverse;
            }
            .about .row.two .content {
                flex: 1 1 35rem;
            }
        }
        .map {
            border: 5px solid #ccc;
            border-radius: 5px;
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
        }
        form h3.success {
            color: #fff;        }
    </style>
</head>
<body>
    

    <?php include 'header.php'?>
    
    <section class="contact" id="contact">
        <h1 class="heading">contact us</h1>
        <div class="row">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3615992786895!2d3.3494997140943448!3d6.601906324080102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b923101c9d94d%3A0x77c6d0783a81795c!2s55%20Allen%20Ave%2C%20Allen%20101233%2C%20Ikeja!5e0!3m2!1sen!2sng!4v1645378201107!5m2!1sen!2sng" allowfullscreen="" loading="lazy"></iframe>
                
            <!-- <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                <h3>get in touch</h3>
                <?php if(!empty($msg)):?>
                    <h3 class="<?php echo $msgstatus;?>"><?php echo $msg;?></h3>
                <?php endif?>
                <input type="text" placeholder="Name" name="name" class="box" required>
                <input type="email" placeholder="Email" name="email" class="box" required>
                <input type="number" placeholder="Phone" name="phone" class="box">
                <input type="text" placeholder="Subject" name="subject" class="box" required>
                <textarea name="message" id="" cols="30" rows="10" placeholder="Message" class="box" required></textarea>
                <input type="submit" name="mail" value="send message" class="btn">
            </form> -->
        </div>
    </section>

                
    <?php include 'footer.php'?>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script5.js"></script>
    <script>
        lightGallery(document.querySelector('.projects .box-container'));
        lightGallery(document.querySelector('.events .light'));
    </script>
</body>
</html>