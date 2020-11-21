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
    <br><br>
    <center>
        <h3 style="color: #072b52;">FEE STRUCTURE</h3>
    </center>
    <br><br>
    <form>
    <div class="card">

        <div class="card-body">
            <center>
                <h4 style="font-family: cursive;color:red;"><b>NOTRE DAME SCHOOL </b></h4>
                <h5>BTPS STAFF COLONY, BADARPUR,DELHI</h5>
                <h4>FEE STRUCTURE FOR THE ACADEMIC YEAR <b><?php echo $row['session']; ?></b></h4>
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
                     <?php  echo $row['one'] ?></td>
            </tr>
            <tr>
                <td>Class I-V</td>
                <td> ₹
                    <?php  echo $row['two'] ?></td>
            </tr>
            <tr>
                <td>Class VI-X</td>
                <td>₹
                    <?php  echo $row['three'] ?></td>
            </tr>
            <tr>
                <td>Class XI & XII</td>
                <td>₹
                    <?php  echo $row['four'] ?></td>
            </tr>
        </tbody>
    </table>

    <br><br>

    <table class="table table-striped">
        <thead>
            <h5><b>Annual Fee (Yearly) </b></h5>
            <tr>
                <th scope="col"> Pre-School to Class XII </th>
                <th scope="col">₹ <?php  echo $row['five'] ?></th>
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
                    <?php  echo $row['six'] ?>
                </td>
            </tr>
            <tr>
                <td>Class I-V</td>
                <td> ₹
                    <?php  echo $row['seven'] ?></td>
            </tr>
            <tr>
                <td>Class VI-X</td>
                <td>₹
                    <?php  echo $row['eight'] ?></td>
            </tr>
            <tr>
                <td>Class XI & XII</td>
                <td>₹
                    <?php  echo $row['nine'] ?></td>
            </tr>
        </tbody>
    </table>
    <table class="table table-striped">
    <h5><b>For all Classes </b></h5>
        <tbody>
            <tr>
                <td>PTA fee(Yearly)</td>
                <td>₹
                    <?php  echo $row['ten'] ?>
                </td>
            </tr>
            <tr>
                <td>Admission Fee(for new admission)</td>
                <td> ₹
                    <?php  echo $row['eleven'] ?></td>
            </tr>
            <tr>
                <td>News Papers/Periodicals</td>
                <td>₹
                    <?php  echo $row['twelve'] ?></td>
            </tr>
           
        </tbody>
    </table>
</form>
</div>

<?php require_once('footer.php'); ?>