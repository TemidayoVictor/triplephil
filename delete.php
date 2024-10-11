<?php
ob_start();
require('connect.php');

if(!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM events WHERE id = '$id'";
    $query = mysqli_query($con,$sql);
    if($query) {
        header("location: events.php#created");
        ob_end_flush();
    }
}

else {
    header("location: events.php");
    ob_end_flush();
}

?>