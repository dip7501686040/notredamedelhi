<?php
require('header.php');
if(isset($_SESSION['name']))
{	

?>
<style type="text/css">
    h2{
        text-transform: capitalize;
    }
    a{
        text-decoration: none;
    }
</style>
<div class="card admin_dashboard">
    <div class="card-header">
        Admin Dashboard
        <?php echo "<a href='admin_logout.php'><button class='btn btn-secondary' style='float:right'margin-left:150px;;>LOGOUT </button></a>";
        ?>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3">
                <a href="add_faculty.php" class="card text-white bg-primary mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>Faculty</h2>
                    </div>
                </a>
            </div>
             <div class="col-sm-3">
                <a href="add_fees.php" class="card text-white bg-warning mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>Fee Structure</h2>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="upload_notice.php" class="card text-white bg-primary mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>Notice</h2>
                    </div>
                </a>
            </div>
           <div class="col-sm-3">
                <a href="create_gallery.php" class="card text-white bg-info mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>Gallery</h2>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="add_home_link.php" class="card text-white bg-warning mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>Home links</h2>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="add_event.php" class="card text-white bg-warning mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>Events</h2>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="calendar.php" class="card text-white bg-warning mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>Calendar</h2>
                    </div>
                </a>
            </div>
 
            <div class="col-sm-3">
                <a href="Academic.php" class="card text-white bg-warning mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>Academic links</h2>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="home_slider.php" class="card text-white bg-primary mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>Index slider</h2>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="new_principals.php" class="card text-white bg-warning mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2> New Principals</h2>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="tc_issued.php" class="card text-white bg-primary mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>TC Issued</h2>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="update_admission.php" class="card text-white bg-primary mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>Admission cell</h2>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="update_school-info.php" class="card text-white bg-primary mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>School Info</h2>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="update_school-info.php" class="card text-white bg-primary mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>Achievements</h2>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="add_objectives.php" class="card text-white bg-primary mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>Add Objectives</h2>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="add_Exam&prom.php" class="card text-white bg-primary mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>Exam & prom</h2>
                        </div>
                        </a>
                        </div>
            <div class="col-sm-3">
                <a href="add_rules.php" class="card text-white bg-primary mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>Rules</h2>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="add_history.php" class="card text-white bg-primary mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>History</h2>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="update_awards.php" class="card text-white bg-primary mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>Awards</h2>
                    </div>
                </a>
            </div>
             
        </div>
    </div>
</div>
<?php
require('footer.php');
}
else{
    echo "<script>window.location.href='admin_login.php'</script>";
}
?>