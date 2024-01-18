<?php

session_start();
if(isset($_SESSION["u"])){
if(isset($_GET["id"])){

    $email = $_SESSION["u"]["email"];
    $pid = $_GET["id"];

    $watchlist_rs = Database::search("SELECT * FROM `watchlist` WHERE `user_email` ='".$email."' AND `product_id` ='".$pid."'");
    $watchlist_num = $watchlist_rs->num_rows;

    if($watchlist_num==1){

        $watchlist_data = $watchlist_rs->fetch_assoc();
        $list_id = $watchlist_data["id"];

        Database::search("DELETE FROM `watchlist` WHERE `id`='".$list_id."'");
echo("removed");

    }else{
    Database::search("INSERT INTO `watchlist`(`user_email`,`product_id`) VALUES ('".$email."','".$pid."')");
echo("added");


    }
}else{
    echo("Something went wrong.Please Try agnain Later.");
}

}else{
    echo("Please Login First");
}

?>