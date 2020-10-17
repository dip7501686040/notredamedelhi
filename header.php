<?php
require('dbcontroller.php');
$db_handler = new DBController();
?>

<!DOCTYPE html>
<html>

<head>
    <title>notredamedelhi/</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?version=1.1">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>

<body>
    <div class="container-fluid">
       <center> <img src="images/logo.jpg" alt="School"></center>
    </div>
    <!--......navbar.......-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm"> <a href="#" class="navbar-brand font-weight-bold d-block d-lg-none">Notre Dame School</a> <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"> <span class="navbar-toggler-icon"></span> </button>
        <div id="navbarContent" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a href="index.php" class="nav-link font-weight-bold text-uppercase">Home</a></li>
                <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">About us</a>
                    <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
                        <div class="container">
                            <div class="row bg-white rounded-0 m-0 shadow-sm">
                                <div class="col-lg-7 col-xl-8">
                                    <div class="p-4">
                                        <div class="row">
                                            <div class="col-lg-6 mb-4">

                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="legecy.php" class="nav-link text-small pb-0" style="color: black;">Legacy</a></li>
                                                    <li class="nav-item"><a href="history.php" class="nav-link text-small pb-0 " style="color: black;">History</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">

                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 " style="color: black;">School Information</a></li>
                                                    <li class="nav-item"><a href="all_faculty.php" class="nav-link text-small pb-0 " style="color: black;">Faculty</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled ">
                                                    <li class="nav-item"><a href="objectives.php" class="nav-link text-small pb-0 " style="color: black;">Aims and Objectives</a></li>
                                                    <li class="nav-item"><a href="rules.php" class="nav-link text-small pb-0 " style="color: black;">Rules and Regulations</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="principle.php" class="nav-link text-small pb-0 " style="color: black;">Principals</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-4 px-0 d-none d-lg-block" style="background: center center url(https://images.unsplash.com/photo-1533637267520-4dfd6aa7ee93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1268&q=80)no-repeat; background-size: cover;"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Academics </a>
                    <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
                        <div class="container">
                            <div class="row bg-white rounded-0 m-0 shadow-sm">
                                <div class="col-lg-7 col-xl-8">
                                    <div class="p-4">
                                        <div class="row">
                                            <div class="col-lg-6 mb-4">

                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="EXAMINATION_AND_PROMOTIONS.php" class="nav-link text-small pb-0" style="color: black;">Scheme of Examination and Promotion</a></li>
                                                    <li class="nav-item"><a href="http://cbseacademic.nic.in/curriculum.html" class="nav-link text-small pb-0 " style="color: black;">Curriculum (9-12)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">

                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 " style="color: black;">H P E</a></li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled ">
                                                    <li class="nav-item"><a href="http://cbseacademic.nic.in/SQP_CLASSX_2019_20.html" class="nav-link text-small pb-0 " style="color: black;">Sample Question Paper for 10th</a></li>
                                                    <li class="nav-item"><a href="https://epathshala.nic.in//" class="nav-link text-small pb-0 " style="color: black;">Epathshala</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="https://diksha.gov.in/explore" class="nav-link text-small pb-0 " style="color: black;">Diksha</a></li>
                                                    <li class="nav-item"><a href="http://cbseacademic.nic.in/SQP_CLASSXII_2019_20.html" class="nav-link text-small pb-0 " style="color: black;">CBSE Sample paper</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-4 px-0 d-none d-lg-block" style="background: center center url(https://images.unsplash.com/photo-1533637267520-4dfd6aa7ee93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1268&q=80)no-repeat; background-size: cover;"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a href="activity/index.php" class="nav-link font-weight-bold text-uppercase">Events</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle font-weight-bold text-uppercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Achievements
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Academic Achievements</a>
                        <a class="dropdown-item" href="#">Sports Achievements</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">AWARDS</a>
                    </div>
                </li>
                <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Admission</a>
                    <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
                        <div class="container">
                            <div class="row bg-white rounded-0 m-0 shadow-sm">
                                <div class="col-lg-7 col-xl-8">
                                    <div class="p-4">
                                        <div class="row">
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0">Nursery</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Pre-Primary to 8th</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Class 11th Admission</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="all_fees.php" class="nav-link text-small pb-0 ">Fee Structure</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                </li>
                <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Gallery</a>
                    <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
                        <div class="container">
                            <div class="row bg-white rounded-0 m-0 shadow-sm">
                                <div class="col-lg-7 col-xl-8">
                                    <div class="p-4">
                                        <div class="row">

                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="video_gallery.php?page=sv" class="nav-link text-small pb-0">Video (Senior)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="gallery.php?page=sp" class="nav-link text-small pb-0 ">Photo (Senior)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="video_gallery.php?page=jv" class="nav-link text-small pb-0 ">Video (Junior)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="gallery.php?page=jp" class="nav-link text-small pb-0 ">Photo (Junior)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-4 px-0 d-none d-lg-block" style="background: center center url(https://images.unsplash.com/photo-1533637267520-4dfd6aa7ee93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1268&q=80)no-repeat; background-size: cover;"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a href="admin.php" class="nav-link font-weight-bold text-uppercase">Admin</a></li>
            </ul>
        </div>
    </nav>
    <!--......//navbar.......-->