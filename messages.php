<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Messages | eShop</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.svg" />
</head>

<body style="background-color: #74EBD5;background-image: linear-gradient(90deg,#74EBD5 0%,#9FACE6 100%);">

    <div class="container-fluid">
        <div class="row">
            <?php include "header.php";
            include "connection.php";
            $mail = $_SESSION["u"]["email"];
            

            
            ?>

            <div class="col-12">
                <hr />
            </div>

            <div class="col-12 py-5 px-4">
                <div class="row overflow-hidden shadow rounded">
                    <div class="col-12 col-lg-5 px-0">
                        <div class="bg-white">
                            <div class="bg-light px-4 py-2">
                                <div class="col-12">
                                    <h5 class="mb-0 py-1">Recents</h5>
                                </div>
                                <div class="col-12">

                                    <!--  -->
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                                aria-selected="true">Received</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="false">Sent</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <div class="message_box" id="message_box">

                                                <div class="list-group rounded-0">
                                                    <a href="#"
                                                        class="list-group-item list-group-item-action text-white rounded-0 bg-primary">

                                                        <div class="media">

                                                            <img src="resource//new_user.svg" width="50px"
                                                                class="rounded-circle">

                                                            <div class="me-4">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-1 ">
                                                                    <h6 class="mb-0 fw-bold">Sahan</h6>
                                                                    <small class="small fw-bold">2023-12-30
                                                                        08:30:40</small>

                                                                </div>
                                                                <p class="mb-0">Hello</p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>

                                                <div class="list-group rounded-0">
                                                    <a href="#"
                                                        class="list-group-item list-group-item-action text-dark rounded-0 bg-body">

                                                        <div class="media">

                                                            <img src="resource//new_user.svg" width="50px"
                                                                class="rounded-circle">

                                                            <div class="me-4">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-1 ">
                                                                    <h6 class="mb-0 fw-bold">Janith</h6>
                                                                    <small class="small fw-bold">2023-12-30
                                                                        08:35:40</small>

                                                                </div>
                                                                <p class="mb-0">Hey</p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>


                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">

                                            <div class="message_box" id="message_box">

                                                <div class="list-group rounded-0">
                                                    <a href="#"
                                                        class="list-group-item list-group-item-action text-black rounded-0 bg-secondary">
                                                        <div class="media">

                                                            <img src="resource//new_user.svg" width="50px"
                                                                class="rounded-circle">

                                                            <div class="me-4">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between mb-1 ">
                                                                    <h6 class="mb-0 fw-bold"> me</h6>
                                                                    <small class="small fw-bold">2023-12-30
                                                                        08:30:40</small>

                                                                </div>
                                                                <p class="mb-0">Good Morning</p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7 px-0">
                        <div class="row px-4 py-5 text-white chat_box" id="chat_box">

                            <!-- view area -->


                        </div>
                        <!-- txt -->
                        <div class="col-12 px-2">
                            <div class="row">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control rounded border-0 py-3 bg-light"
                                        placeholder="Type a message ..." aria-describedby="send_btn" id="msg_txt" />
                                    <button class="btn btn-light fs-2" id="send_btn" onclick="send_msg();"><i
                                            class="bi bi-send-fill fs-1"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- txt -->
                    </div>

                </div>
            </div>

            <!-- <?php include "footer.php"; ?> -->
        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>