<?php
require('dbcontroller.php');
$db_handler = new DBController();
require_once('function.php');
$result = mysqli_query($conn, "SELECT * FROM Academic_link where id=1");
$Academic = mysqli_fetch_array($result);
$school = school_info($conn);
$schoolinfo = mysqli_fetch_array($school);
?>

<!DOCTYPE html>
<html>

<head>
    <title>notredamedelhi/</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?version=1.1">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@600&display=swap" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>




    <link rel="stylesheet" href="css/footer.css">

    <style>
        /* ============ only desktop view ============ */
        @media all and (min-width: 992px) {
            .navbar .nav-item .dropdown-menu {
                display: block;
                opacity: 0;
                visibility: hidden;
                transition: .3s;
                margin-top: 0;
            }

            .navbar .nav-item:hover .nav-link {
                color: #fff;
            }

            .navbar .dropdown-menu.fade-down {
                top: 80%;
                transform: rotateX(-75deg);
                transform-origin: 0% 0%;
            }

            .navbar .dropdown-menu.fade-up {
                top: 180%;
            }

            .navbar .nav-item:hover .dropdown-menu {
                transition: .3s;
                opacity: 1;
                visibility: visible;
                top: 100%;
                transform: rotateX(0deg);
            }
        }

        /* ============ desktop view .end// ============ */

        p {
            font-family: 'El Messiri', sans-serif;
        }

        h3 {
            font-family: 'El Messiri', sans-serif;
        }
    </style>
</head>

<body>

    <!--........top div.......-->

    <div class="container-fluid" style="padding-top:0.20em;padding-bottom:0.20em;">
        <div class="row" style="float: right;">

            <div class="col">
                <button type="button" class="btn" style="background-color:#13355e;"><a href="https://nds.genericsoftware.in/Parent/login.aspx" style="color:white;">Parent Login</a></button> &nbsp;
                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" style="background-color:#13355e;color:white;">TC Issued</button> &nbsp;
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Enter Registration Number</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="tc_verify.php" action="POST">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Registration Number</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="check">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo $Academic['alumni']  ?>" target="_new"><button type="button" class="btn" style="background-color:#13355e;color:white;">Alumni</button></a> &nbsp;
                <a href="<?php echo $Academic['facebook']  ?>" target="_new" class="btn"><img src="images/icon1.png" alt="" style="float: right;"></a> &nbsp;


            </div>
        </div>
    </div>

    <!--...........image logo...........-->
    <div class="container">
        <center> <img src="images/logo.png" alt="School" style="width:100%"></center>

    </div>
    <!--......navbar.......-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="main_nav">

            <ul class="navbar-nav mx-auto">
                <li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
                <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
                <li class="nav-item"><a class="nav-link" href="#"> Services </a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Hover up </a>
                    <ul class="dropdown-menu fade-down">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                            <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                            <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                        <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
                            </div>
                            <div class="col-sm">col-sm</div>
                            <div class="col-sm">col-sm</div>
                            <div class="col-sm">col-sm</div>
                        </div>
                    </div>
                    </ul>
                   
                </li>
            </ul>



        </div> <!-- navbar-collapse.// -->


    </nav>

    <!--......//navbar.......-->

    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-double-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z" />
            <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
        </svg>
    </button>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>