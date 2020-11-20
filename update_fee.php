<?php require_once('header.php'); 
 $result=mysqli_query($conn,"SELECT * from new_fee where id=1");
 $row=mysqli_fetch_array($result);
?>
<style>
    tr {
        text-align: center;
    }
</style>
<div class="container">
    <?php

       if(isset($_GET['msg'])){
        if($_GET['msg']=="done"){
            $name=$_GET['name'];
            echo'<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>.'.$name.' added successfully as a faculty.
  </div>';
        }
        else{
            echo'<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong> faculty is not added .
  </div>';
        }
       }

    ?>
    <br><br>
    <center>
        <h3 style="color: #072b52;">FEE STRUCTURE</h3>
    </center>
    <br><br>
    <form action="fee.php" method="post" enctype="multipart/form-data">
    <div class="card">

        <div class="card-body">
            <center>
                <h4 style="font-family: cursive;color:red;"><b>NOTRE DAME SCHOOL </b></h4>
                <h5>BTPS STAFF COLONY, BADARPUR,DELHI</h5>
                <h4>FEE STRUCTURE FOR THE ACADEMIC YEAR <b><input type="text" name="session" value="<?php echo $row['session']; ?>"></b></h4>
            </center>

        </div>
    </div>
    <br><br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"> Tuition Fee ( Per Month)</th>
                <th scope="col"> Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pre School &Pre Primary</td>
                <td>₹
                     <input type="number" name="one" value="<?php echo $row['one'] ?>"></td>
            </tr>
            <tr>
                <td>Class I-V</td>
                <td> ₹
                    <input type="number" name="two" value="<?php echo $row['two'] ?>"></td>
            </tr>
            <tr>
                <td>Class VI-X</td>
                <td>₹
                    <input type="number" name="three" value="<?php echo $row['three'] ?>"></td>
            </tr>
            <tr>
                <td>Class XI & XII</td>
                <td>₹
                    <input type="number" name="four" value="<?php echo $row['four'] ?>"></td>
            </tr>
        </tbody>
    </table>

    <br><br>

    <table class="table table-striped">
        <thead>
            <h5><b>Annual Fee (Yearly) </b></h5>
            <tr>
                <th scope="col"> Pre-School to Class XII </th>
                <th scope="col">₹ <input type="number" name="five" value="<?php echo $row['five'] ?>"></th>
            </tr>
        </thead>

    </table>
    <br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"> Devlopement Fund (Yearly)
                </th>
                <th scope="col"> Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pre School &Pre Primary</td>
                <td>₹
                    <input type="number" name="six" value="<?php echo $row['six'] ?>">
                </td>
            </tr>
            <tr>
                <td>Class I-V</td>
                <td> ₹
                    <input type="number" name="seven" value="<?php echo $row['seven'] ?>"></td>
            </tr>
            <tr>
                <td>Class VI-X</td>
                <td>₹
                    <input type="number" name="eight" value="<?php echo $row['eight'] ?>"></td>
            </tr>
            <tr>
                <td>Class XI & XII</td>
                <td>₹
                    <input type="number" name="nine" value="<?php echo $row['nine'] ?>"></td>
            </tr>
        </tbody>
    </table>
    <center><input type="submit" name="submit" value="update" class="btn btn-success" ></center>
</form>
</div>
<br>
<br>
<br>

<?php require_once('footer.php'); ?>