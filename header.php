<?php
require('dbcontroller.php');
$db_handler = new DBController();
require_once('function.php');
$result = mysqli_query($conn,"SELECT * FROM Academic_link where id=1" );
$Academic = mysqli_fetch_array($result);
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


    <link rel="stylesheet" href="css/footer.css">

    <style>
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
        <div class="row"  style="float: right;">
            
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
                                        <input type="text" class="form-control" id="exampleInputEmail1" >
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
            <button type="button" class="btn" style="background-color:#13355e;color:white;">Alumni</button> &nbsp;
            <a href="https://www.facebook.com/notredamedelhi" target="_new" class="btn"><img src="images/icon1.png" alt="" style="float: right;"></a> &nbsp;
           
      
            </div>
        </div>
    </div>

    <!--...........image logo...........-->
    <div class="container">
        <center> <img src="images/logo.png" alt="School" style="width:100%"></center>

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
                                <div class="col-lg-7 col-xl-8" style="background-color: #13355e;">
                                    <div class="p-4">
                                        <div class="row">
                                            <div class="col-lg-6 mb-4">

                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="legecy.php" class="nav-link text-small pb-0" style="color: white;">Legacy</a></li>
                                                    <li class="nav-item"><a href="history.php" class="nav-link text-small pb-0 " style="color: white;">History</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">

                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="school_info.php" class="nav-link text-small pb-0 " style="color: white;">School Information</a></li>
                                                    <li class="nav-item"><a href="all_faculty.php" class="nav-link text-small pb-0 " style="color: white;">Faculty</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled ">
                                                    <li class="nav-item"><a href="objectives.php" class="nav-link text-small pb-0 " style="color: white;">Aims and Objectives</a></li>
                                                    <li class="nav-item"><a href="rules.php" class="nav-link text-small pb-0 " style="color: white;">Rules and Regulations</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="principle.php" class="nav-link text-small pb-0 " style="color: white;">Principals</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-4 px-0 d-none d-lg-block" style="background: center center url(images/nav_pic.jpg)no-repeat;height:18rem;"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Academics </a>
                    <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
                        <div class="container">
                            <div class="row bg-white rounded-0 m-0 shadow-sm">
                                <div class="col-lg-7 col-xl-8" style="background-color: #13355e;">
                                    <div class="p-4">
                                        <div class="row">
                                            <div class="col-lg-6 mb-4">

                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="EXAMINATION_AND_PROMOTIONS.php" class="nav-link text-small pb-0" style="color: white;">Scheme of Examination and Promotion</a></li>
                                                    <li class="nav-item"><a href="<?php echo $Academic['curriculum']  ?>" target="_new" class="nav-link text-small pb-0 " style="color: white;">Curriculum (9-12)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">

                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 " style="color: white;">H P E</a></li>

                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled ">
                                                    <li class="nav-item"><a href="<?php echo $Academic['Class_X_Sample_Question_Paper_&_Marking_Scheme_for_Exam']  ?>" target="_new" class="nav-link text-small pb-0 " style="color: white;">Sample Question Paper for 10th</a></li>
                                                    <li class="nav-item"><a href="<?php echo $Academic['E-Pathshala']  ?>" target="_new" class="nav-link text-small pb-0 " style="color: white;">Epathshala</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="<?php echo $Academic['Diksha']  ?>" target="_new" class="nav-link text-small pb-0 " style="color: white;">Diksha</a></li>
                                                    <li class="nav-item"><a href="<?php echo $Academic['CBSE_Sample_paper']  ?>" target="_new" class="nav-link text-small pb-0 " style="color: white;">CBSE Sample paper</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-4 px-0 d-none d-lg-block" style="background: center center url(images/nav_pic.jpg)no-repeat ;height:18rem;"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a href="event.php" class="nav-link font-weight-bold text-uppercase">Events</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle font-weight-bold text-uppercase" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Achievements
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="files/a1.pdf" target="_new">Academic Achievements</a>
                        <a class="dropdown-item" href="files/a2.pdf" target="_new">Sports Achievements</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="zonal.php">AWARDS</a>
                    </div>
                </li>
                <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Admission</a>
                    <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
                        <div class="container">
                            <div class="row bg-white rounded-0 m-0 shadow-sm">
                                <div class="col-lg-7 col-xl-8" style="background-color: #13355e;">
                                    <div class="p-4">
                                        <div class="row">
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="second.php" class="nav-link text-small pb-0" style="color:white;">Nursery</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 " style="color:white;">Pre-Primary to 8th</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="" class="nav-link text-small pb-0 " style="color:white;">Class 11th Admission</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="all_fees.php" class="nav-link text-small pb-0 " style="color:white;">Fee Structure</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-4 px-0 d-none d-lg-block" style="background: center center url(images/nav_pic.jpg)no-repeat;height:18rem;"></div>
                            </div>
                        </div>
                </li>
                <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Gallery</a>
                    <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
                        <div class="container">
                            <div class="row bg-white rounded-0 m-0 shadow-sm">
                                <div class="col-lg-7 col-xl-8" style="background-color: #13355e;">
                                    <div class="p-4">
                                        <div class="row">

                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="video_gallery.php?page=sv" class="nav-link text-small pb-0" style="color:white;">Video (Senior)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="gallery.php?page=sp" class="nav-link text-small pb-0" style="color:white;">Photo (Senior)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="video_gallery.php?page=jv" class="nav-link text-small pb-0" style="color:white;">Video (Junior)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <ul class="list-unstyled">
                                                    <li class="nav-item"><a href="gallery.php?page=jp" class="nav-link text-small pb-0" style="color:white;">Photo (Junior)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-4 px-0 d-none d-lg-block" style="background: center center url(images/nav_pic.jpg)no-repeat;height:18rem;"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a href="contact.php" class="nav-link font-weight-bold text-uppercase">Contact us</a></li>
           

            </ul>
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
    </script>