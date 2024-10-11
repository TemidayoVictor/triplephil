<?php

require('connect.php');

$msg = "";
$msgstatus = "";
$msgDisplay = "Add Event";
if(filter_has_var(INPUT_POST, 'upload')) {
    $title = mysqli_real_escape_string($con,$_POST['title']);
    $sub = mysqli_real_escape_string($con,$_POST['sub']);
    $link = mysqli_real_escape_string($con,$_POST['link']);
    $action = mysqli_real_escape_string($con,$_POST['action']);
    
    if(!empty($title)) {
        $filename = $_FILES['image']['name'];
        if(!empty($filename)) {
            $fileTempName = $_FILES['image']['tmp_name'];
            $path = "images/".$filename;
        }
        else {
            $filename = "";
        }

        if(empty($link)) {
            $link = "";
        }
        else {
            $link = str_replace( 'https://', '', $link);
        }

        if(empty($action)) {
            $action = "View";
        }
        
        $sql = "INSERT INTO events (title, subtitle, link, image, action) VALUES ('".$title."','".$sub."','".$link."','".$filename."','".$action."')";
        $query = mysqli_query($con,$sql);
        if($query) {
            if(!empty($filename)) {
                move_uploaded_file($fileTempName,$path);
            }
            $msg = "Event Created Successfully";
            $msgstatus = "alert-success";
            $msgDisplay = "Add another Event";
        }
    }

    else {
        $msg = "Please fill in all fields";
        $msgstatus = "alert-danger";
    }    
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
    <link href="css/about4.css" rel="stylesheet" type="text/css">
    <title>Triple Phil | Upload Events</title>
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
            border: 1px solid black;
            padding: 1rem;
            color: black;
            border-radius: 3px;
            font-size: 1.5rem;
        }
        .btn:hover {
            background: black;
            color: white;
        }
        form h3.success {
            color: #fff;        
        }
        
    </style>
    </style>
</head>
<body>
    

    <?php include 'header.php'?>
    
    <section class="contact" id="contact">
        <h1 class="heading">Events</h1>
        <div class="row">    
            <form  action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
                <?php if(!empty($msg)):?>
                    <h3 class="<?php echo $msgstatus;?>"><?php echo $msg;?></h3>
                <?php endif?>
                <h3><?php echo $msgDisplay;?></h3>
                <input type="text" placeholder="Event Title" name="title" class="box" required>
                <input type="text" placeholder="Event subtitle" name="sub" class="box">
                <input type="text" placeholder="Event Link" name="link" class="box">
                <input type="text" placeholder="Action: eg Register, click. . ." name="action" class="box">
                <div style="font-size: 2rem; margin-bottom: 10px;">Add Image</div>
                <input type="file" name="image" accept="image/*" style="border:none; outline:none;">
                <div><input type="submit" name="upload" value="Upload" class="btn"></div>
            </form>
        </div>
    </section>

    <section class="projects" id="projects">
        <h1 class="heading"> Created Events</h1>
        <div class="box-container" id="created">

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
            ?>
            
            <div class="box">
                <div class="image">
                    <img src="images/<?php echo $image;?>" alt="">
                </div>
                <div class="content">
                    
                    <div class="info">
                        <h3><?php echo $title;?></h3>
                        <p><?php echo $sub;?></p>
                        <a href="delete.php?id=<?php echo $id;?>" class="btn">Delete Event</a>
                    </div>
                    
                </div>
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
    </section>

                
    <?php include 'footer.php'?>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script5.js"></script>
</body>
</html>