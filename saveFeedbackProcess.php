<?php 


session_start();
include "connection.php";

if(isset($_SESSION["u"])){

    $mail = $_SESSION["u"]["email"];
    $pid = $_POST["pid"];
    $pid = $_POST["t"];
    $pid = $_POST["f"];

$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s"); 

Database::search("INSERT INTO `feedback`(`type`,`date`,`feed`,`product_id`,`user_email`) VALUES ('".$type."','".$date."','".$feed."','".$pid."','".$mail."')");

echo ("success");

}

?>