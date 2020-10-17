<?php
require('header.php');
?>
<div class="card admin_dashboard">
    <div class="card-header">
        Admin Dashboard
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3">
                <a href="add_faculty.php" class="card text-white bg-primary mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>FACULTY</h2>
                    </div>
                </a>
            </div>
             <div class="col-sm-3">
                <a href="add_fees.php" class="card text-white bg-warning mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h2>FEE Structure</h2>
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
                <a href="videos.php" class="card text-white bg-warning mb-4 admin_dashboard_item">
                    <div class="card-body text-center">
                        <h4>Youtube Video</h4>
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
        </div>
    </div>
</div>
<?php
require('footer.php');
?>