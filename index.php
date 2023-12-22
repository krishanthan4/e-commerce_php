<?php require_once("connection.php")?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eShop</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.svg" />

</head>

<body class="main-body">

    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-center">

            <!-- header -->

            <div class="col-12">
                <div class="row">
                    <div class="col-12 logo"></div>
                    <div class="col-12">
                        <p class="text-center title01">Hi, Welcome to eShop</p>
                    </div>
                </div>
            </div>

            <!-- header -->

            <!-- content -->

            <div class="col-12 p-3">
                <div class="row">

                    <div class="col-6 d-none d-lg-block background"></div>
                    <!-- signupbox -->

                    <div class="col-12 col-lg-6" id="signUpBox">
                        <div class="row g-2">

                            <div class="col-12">
                                <p class="title02">Create New Account</p>
                            </div>

                            <div class="col-12 d-none" id="msgdiv">
                                <div class="alert alert-danger" role="alert" id="msg">

                                </div>
                            </div>



                            <div class="col-6">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="ex:- John" id="fname" />
                            </div>

                            <div class="col-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="ex:- Doe" id="lname" />
                            </div>

                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="ex:- john@gmail.com" id="email" />
                            </div>

                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="ex:- **********" id="password" />
                            </div>

                            <div class="col-6">
                                <label class="form-label">Mobile</label>
                                <input type="text" class="form-control" placeholder="ex:- 0771234568" id="mobile" />
                            </div>

                            <div class="col-6">
                                <label class="form-label">Gender</label>
                                <select class="form-control" id="gender">

                                    
<?php 

$rs = Database::search("SELECT * FROM `gender`");
$num = $rs->num_rows;

for($x = 0;$x < $num;$x++):
$data = $rs->fetch_assoc();
?>
<option value="<?= $data["gender_id"]?>">
<?= $data["gender_name"]?>
</option>

<?php
endfor;

?>

                                    
                                </select>
                            </div>

                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-primary" onclick="signUp();">Sign Up</button>
                            </div>

                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-dark" onclick="changeView();">Already have an account? Sign In</button>
                            </div>

                        </div>
                    </div>

                    <!-- signupbox -->

                    <!-- signinbox -->

                    <div class="col-12 col-lg-6 d-none" id="signInBox">
                        <div class="row g-2">
                            <div class="col-12">
                                <p class="title02">Sign In</p>
                            </div>


                            <?php 

$email = "";
$password = "";

if(isset($_COOKIE["email"])){
$email = $_COOKIE["email"];
}

if(isset($_COOKIE["password"])){
    $password = $_COOKIE["password"];
    }

?>

                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" id="email2" value="<?= $email ?>" />
                            </div>
                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="password2" value="<?= $password ?>" />
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberme" />
                                    <label class="form-check-label">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" class="link-primary" onclick="forgotPassword();">Forgot Password?</a>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-primary" onclick="signin();">Sign In</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-danger" onclick="changeView();">New to eShop? Join Now</button>
                            </div>
                        </div>
                    </div>

                    <!-- signinbox -->

                </div>
            </div>

            <!-- content -->

            <!-- mode start -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="fpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
<div class="row g-3">

<div class="col-6">
<label for="" class="form-label">New Password</label>
<div class="input-group mb-3">
<input type="password" class="form-control">
<button class="btn btn-outline-secondary" type="button">Show</button>
</div>
</div>

<div class="col-6">
<label for="" class="form-label">Re-Password</label>
<div class="input-group mb-3">
<input type="password" class="form-control">
<button class="btn btn-outline-secondary" type="button">Show</button>
</div>
</div>

<div class="col-12">
<label for="" class="form-label">Verification Code</label>
<div class="input-group mb-3">
<input type="text" class="form-control">
</div>
</div>


</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Reset</button>
      </div>
    </div>
  </div>
</div>

            <!-- mode end -->
            <!-- footer -->
            <div class="col-12 fixed-bottom d-none d-lg-block">
                <p class="text-center">&copy; <?= date("Y")?> eShop.lk || All Rights Reserved</p>
            </div>
            <!-- footer -->
        </div>
    </div>
    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>
</html>