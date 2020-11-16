<?php
require('header.php');
?>
<div class="container">
    <?php

       if(isset($_GET['msg'])){
        if($_GET['msg']=="done"){
           
        }
        else{
            echo'<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong> faculty is not added .
  </div>';
        }
       }

    ?>
    <div class="card">
        <div class="card-header">
            Enter the details of New Principals
        </div>
        <div class="card-body">
            <p class="card-text">
                <form action="add_principal.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="pname">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Choose Image</label>
                        <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Give your Message</label><br>
                        <label for="exampleFormControlTextarea1">First para</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                        <label for="exampleFormControlTextarea1">Second Para(optional)</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message2"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail2"  >Year of Joining</label>
                        <input type="text" class="form-control" id="exampleInputEmail2" name="yoj">
                    </div>

                    <button type="submit" class="btn" name="submit" style="background-color: #212529;color:white;">Save</button>
                </form>
            </p>
        </div>
    </div>

</div>


<?php
require('footer.php');
?>