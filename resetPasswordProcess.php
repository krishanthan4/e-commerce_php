<?php


include "connection.php";

$email = $POST["email"];
$newPassword = $POST["newPassword"];
$retypePassword = $POST["retypePassword"];
$vcode = $POST["vcode"];

if (empty($email)) {
    echo ("email must not empty");

} else if (empty($newPassword)) {
    echo ("New Password field must not empty");

} else if (empty($retypePassword)) {
    echo ("Retype Password  field must not empty");

} else if (empty($vcode)) {
    echo ("verification code  field must not empty");

} else if ($newPassword !== $retypePassword) {

    echo ("Password does not match");
} else {
    $rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "' AND `verification_code`='" . $vcode . "' ");

    if ($rs->num_rows == 1) {

        Database::iud("UPDATE `user` SET `password`='" . $retypePassword . "' ");
        echo ("success");
        
    } else {

        echo ("Invalid Email Address of Verification Code");
    }
}


?>