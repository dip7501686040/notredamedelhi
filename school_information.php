<?php
require_once('header.php');
?>
<br>
<div class="container">

	<center><h3 style="color: #072b52;" >SCHOOL INFORMATION</h3></center>
   <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">heading</th>
                <th scope="col">Information</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <center><h3>Salary Details</h3></center>
    <center><a href="view_school_info.php?data=<?php echo $schoolinfo['file']; ?>" target=_new style="text-decoration: none;color:red;"><b>|| VIEW MORE ||</b></a></center>
</div>



<br>
<?php
require_once('footer.php');
?>