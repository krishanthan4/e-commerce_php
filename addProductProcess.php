<?php

session_start();
include "connection.php";

$email = $_SESSION["u"]["email"];
$category = $_POST["ca"];
$brand = $_POST["b"];
$model = $_POST["m"];
$title = $_POST["t"];
$condition = $_POST["con"];
$clr = $_POST["col"];
$qty = $_POST["q"];
$cost = $_POST["co"];
$dwc = $_POST["dwc"];
$doc = $_POST["doc"];
$desc = $_POST["de"];


$mhb_rs = Database::search("SELECT * FROM `model_has_brand` WHERE `model_model_id`='" . $model . "' AND `brand_brand_id` = '" . $brand . "' ");
$model_has_brand_id;

if ($mhb_rs->num_rows > 0) {
    $mhb_data = $mhb_rs->fetch_assoc();
    $model_has_brand_id = $mhb_data["id"];



} else {
    Database::iud("INSERT INTO `model_has_brand` (`model_model_id`,`brand_brand_id`) VALUES ('" . $model . "','" . $brand . "')");
    $model_has_brand_id = Database::$connection->insert_id;
}

$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimeZone($tz);
$date = $d->format("Y-m-d H:i:s");

$status = 1;
Database::Iud("INSERT INTO `product` (`price`,`qty`,`description`,`title`,`datetime_added`,`delivery_fee_colombo`,`delivery_fee_other`,`category_cat_id`,`model_has_brand_id`,`condition_condition_id`,`status_status_id`,`user_email`) VALUES ('" . $cost . "','" . $qty . "','" . $desc . "','" . $title . "','" . $date . "','" . $dwc . "','" . $category . "','" . $model_has_brand_id . "','" . $condition . "','" . $status . "','" . $email . "')");

$product_id = Database::$connection->insert_id;

$length = sizeof($_FILES);

if ($length <= 3 && $length > 0) {

    $allowed_image_extensions = array("image/jpeg", "image/png", "image/svg+xml");

    for ($x = 0; $x < $length; $x++) {
        if (isset($_FILES["image" . $x])) {
            $image_extension = $image_file["type"];

            if(in_array($image_extension,$allowed_image_extensions)){

                $new_img_extension;

                if($image_extension == "image/jpeg"){

                    $new_image_exension =".jpeg";
                }else if($image_extension == "image/png"){

                    $new_image_exension =".png";
                }else if($image_extension == "image/svg+xml"){

                    $new_image_exension =".svg";
                }
$file_name = "resource//mobile_images//".$title."_".$x."_".uniqid().$new_img_extension;
move_uploaded_file($image_file["tmp_name"],$file_name);
Database::iud("INSERT INTO `product_img` (`img_path`,`product_id`) VALUES ('".$file_name."','".$product_id."')");


}else{
                echo ("Invalid Image Type !");
            }
        }

    }
} else {
    echo ("Invalid Image Count");
}

?>