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
        .navbar {
            background: #fff;
            padding-top: 0;
            padding-bottom: 0;
            box-shadow: 1px 3px 4px 0 #adadad33;
        }

        .navbar-light .navbar-brand {
            color: #13355e;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #13355e;
        }

        .navbar-light .navbar-brand:focus,
        .navbar-light .navbar-brand:hover {
            color: #fff;
        }

        .navbar-light .navbar-nav .nav-link:focus,
        .navbar-light .navbar-nav .nav-link:hover {
            color: #fff;
        }

        .navbar-light .navbar-nav .nav-link {
            padding-top: 22px;
            padding-bottom: 22px;
            transition: 0.3s;
            padding-left: 24px;
            padding-right: 24px;
            font-size: 18px;
            font-weight: 500;
        }

        .navbar-light .navbar-nav .nav-link:focus,
        .navbar-light .navbar-nav .nav-link:hover {
            background: #13355e;
            transition: 0.3s;
        }

        .dropdown-item:focus,
        .dropdown-item:hover {
            color: #fff;
            text-decoration: none;
            background-color: #13355e !important;
        }

        .sm-menu {
            border-radius: 0px;
            border: 0px;
            top: 97%;
            box-shadow: rgba(173, 173, 173, 0.2) 1px 3px 4px 0px;
        }

        .dropdown-item {
            color: #3c3c3c;
            font-size: 14px;
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #2196F3;
        }

        .navbar-toggler {
            outline: none !important;
        }

        .navbar-tog {
            color: #1ebdc2;
        }

        .megamenu-li {
            position: static;
        }

        .megamenu {
            position: absolute;
            width: 100%;
            left: 0;
            right: 0;
            padding: 15px;
        }

        .megamenu h6 {
            margin-left: 21px;
        }

        .megamenu i {
            width: 20px;
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
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_nav" aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mobile_nav">

                <ul class="navbar-nav navbar-light mx-auto">
                    `<li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>`
                    <li class="nav-item dropdown megamenu-li dmenu">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                        <div class="dropdown-menu megamenu mx-auto sm-menu border-top" aria-labelledby="dropdown01" style="width: 70%;">
                            <div class="row">
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="legecy.php"><i class="fab fa-magento"></i> Legacy</a>
                                    <a class="dropdown-item" href="history.php"><i class="fab fa-magento"></i> History</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="objectives.php"><i class="fab fa-wordpress-simple"></i> Aims and Objectives </a>
                                    <a class="dropdown-item" href="rules.php"><i class="fab fa-php"></i> Rules and Regulations </a>
                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="view_school_info.php?data=<?php echo $schoolinfo['file']; ?>"><i class="fas fa-tablet-alt"></i> School Information </a>
                                    <a class="dropdown-item" href="all_faculty.php"><i class="fas fa-mobile-alt"></i> Faculty</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-4">
                                    <a class="dropdown-item" href="principle.php"><i class="fas fa-leaf fa-rotate-90"></i> Principals</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown megamenu-li dmenu">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
                        <div class="dropdown-menu megamenu mx-auto sm-menu border-top" aria-labelledby="dropdown01" style="width: 70%;">
                            <div class="row">
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="EXAMINATION_AND_PROMOTIONS.php"><i class="fab fa-magento"></i> Scheme of Examination &<br> Promotion</a>
                                    <a class="dropdown-item" href="<?php echo $Academic['curriculum']  ?>"><i class="fab fa-magento"></i> Curriculum (9-12)</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="<?php echo $Academic['hpe']  ?>"><i class="fab fa-wordpress-simple"></i> H P E </a>
                                    <a class="dropdown-item" href="<?php echo $Academic['Class_X_Sample_Question_Paper_&_Marking_Scheme_for_Exam']  ?>"><i class="fab fa-php"></i> Sample Question Paper for 10th</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="<?php echo $Academic['E-Pathshala']  ?>"><i class="fas fa-tablet-alt"></i>Epathshala </a>
                                    <a class="dropdown-item" href="<?php echo $Academic['Diksha']  ?>"><i class="fas fa-mobile-alt"></i> Diksha</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-4">
                                    <a class="dropdown-item" href="<?php echo $Academic['CBSE_Sample_paper']  ?>"><i class="fas fa-leaf fa-rotate-90"></i> CBSE Sample paper</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="all_events.php">Events</a>
                    </li>
                    <li class="nav-item dmenu dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Achievements
                        </a>
                        <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Academic Achievements</a>
                            <a class="dropdown-item" href="#">Sports Achievements</a>
                            <a class="dropdown-item" href="#">Awards</a>
                        </div>
                    </li>
                    <!--========-->
                    <li class="nav-item dropdown megamenu-li dmenu">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admission</a>
                        <div class="dropdown-menu megamenu sm-menu mx-auto border-top" aria-labelledby="dropdown01" style="width: 70%;">
                            <div class="row">
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="second.php"><i class="fab fa-magento"></i>Nursery</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="pre-8.php"><i class="fab fa-php"></i>Pre-Primary to 8th</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="admission11.php"><i class="fab fa-apple"></i> Class 11th Admission</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-4">
                                    <a class="dropdown-item" href="all_fees.php"><i class="fas fa-cubes"></i> Fee Structure</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--=========-->
                    <!--========-->
                    <li class="nav-item dropdown megamenu-li dmenu">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery</a>
                        <div class="dropdown-menu megamenu sm-menu mx-auto border-top" aria-labelledby="dropdown01" style="width: 70%;">
                            <div class="row">
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="gallery_new.php?page=sp"><i class="fab fa-magento"></i>Senior (Photo)</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="gallery_new.php?page=jp"><i class="fab fa-php"></i>Junior (Photo)</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="new_video.php?page=sv"><i class="fab fa-apple"></i> Senior (video)</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 mb-4">
                                    <a class="dropdown-item" href="new_video.php?page=jv"><i class="fas fa-cubes"></i> Junior (video)</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--=========-->
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact us</a></li>

                </ul>
            </div>
        </div>
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

        $(document).ready(function() {
            $('.navbar-light .dmenu').hover(function() {
                $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
            }, function() {
                $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
            });
        });

        $(document).ready(function() {
            $(".megamenu").on("click", function(e) {
                e.stopPropagation();
            });
        });
    </script>