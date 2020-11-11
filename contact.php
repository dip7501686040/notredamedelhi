<?php include 'sendemail.php'; ?>

<?php
require_once('header.php');
?>

<link rel="stylesheet" href="css/contact.css">


<!--For all screen-->
<div class="page">
    <!--Login & Signup in single row-->
    <div class="row" style=" margin-left: 2%;
    margin-right: 2%;
    margin-top: 5%;">
        <!--Column for signin-->
        <div class="col-sm-8 text-center signin">
            <!-- Default form login -->
            <p class="h4 mb-4  signintext top"><strong>Get in touch with us.</strong></p>
            <p class="signintext">Got a question? We'd love to hear from you. Send us a message and we'll respond as soon as possible</p>

            <!--....alert message start...-->
            <?php echo $alert; ?>
            <!--....alert message end...-->
            <form class="contact" action="" method="post">
                <!-- Full Name --> <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Full Name" name="name" required>
                <!-- Email --> <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
                <!-- Phone Number --> <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Eg : 87892-83479" name="number" required>
                <!-- Message --> <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Give your Message" name="message" required></textarea>
                <button class="btn btn-info btn-block LoginBtn" name="submit" type="submit" style="    width: 30%;
    margin-top: 5%;
    margin-bottom: 5%;
    margin-left: 25%">SUBMIT</button>
            </form>
        </div>
        <!--Column for signin-->
        <div class="col-sm-4 signup text-center">
            <div id="map-container-google-2" class="z-depth-1-half map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d56097.69780285086!2d77.302406!3d28.506455!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xedb20aa6b7cd7ce0!2sNotre%20Dame%20School!5e0!3m2!1sen!2sus!4v1602932106411!5m2!1sen!2sus" width="98%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                <br><br>
                <p class="h4 mb-4  signintext top"><strong> Notre Dame School</strong></p>
                <p class="signintext">  BTPS, Staff Colony, Badarpur, Delhi 110044, India</p>
        </div>
    </div>
</div>

<script type="text/javascript">
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<?php
require_once('footer.php');
?>