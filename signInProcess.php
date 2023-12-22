<?php 

session_start();
include "connection.php";

$email = $_POST["email"];
$password = $_POST["password"];
$remember_me = $_POST["remember_me"];

if(empty($email)){

echo "Please Enter Your Email";
}else if(empty($password)){

    echo "Please Enter your password";
}else{
 
    $rs = Database::search("SELECT * FROM `user` WHERE `email`='".$email."' AND `password`='".$password."'");
    $n = $rs->num_rows;

    if($n == 1){
echo "success";
$d = $rs->fetch_assoc();
$session["u"] = $d;

if($remember_me=="true"){
setcookie("email",$email,time()+(60*60*24*365));
setcookie("password",$password,time()+(60*60*24*365));
}else{
    setcookie("email",$email,"",-1);
    setcookie("password",$email,"",-1);
    }

    }else{
     echo "Invalid Username or Password";   
    }

}

?>