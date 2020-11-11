<style>
    .rating {
        margin-left: 37%
    }

    .page {
        background-color: white;
        padding: 2%;
        margin: auto
    }

    .fa {
        color: #f2dd1d
    }

    .card-img-top {
        width: 90%;
        height: 225px
    }

    .view {
        background-color: #dfe6e0;
        padding: 10px;
        margin: 20px
    }

    .card {
        width: 95%;
        padding: 0px;
        margin-left: 2%
    }

    .card-footer {
        background-color: #ff772e;
        font-weight: 700
    }

    .price {
        color: #ff4517;
        font-weight: 600
    }
</style>
<?php require_once('function.php');
$result = mysqli_query($conn, "SELECT * FROM eventsindex ORDER BY id DESC LIMIT 4
");

?>

<!--For Page-->

<div class="page">
    <center>
        <h3>EVENTS</h3>
    </center>
    <!--For Row containing all card-->
    <div class="row">
        <a href="" style="color:#13355e;">
            <div style="margin-top:10em;">
                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                </svg>
            </div>
        </a>
        <!--Card 1-->
        <?php
        while ($row = mysqli_fetch_array($result)) {


        ?>
            <div class="col-sm">
                <div class="card card-cascade card-ecommerce wider shadow mb-5 ">
                    <!--Card image-->
                    <div class="view view-cascade overlay text-center"> <img class="card-img-top" src="uploads/<?php echo $row['img']   ?>" alt=""> <a>
                            <div class="mask rgba-white-slight"></div>
                        </a> </div>
                    <!--Card Body-->
                    <div class="card-body card-body-cascade text-center">
                        <!--Card Title-->
                        <h5 class="card-title"><strong><a href="show_event.php?n=<?php echo $row['id']  ?>" style="color:black;"><?php echo $row['title']   ?></a></strong></h5> <!-- Card Description-->

                    </div>
                </div>
            </div>
           
        <?php
        }
        ?>

<a href="" style="color:#13355e;">
                <div style="margin-top:10em;">
                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
            </a>
    </div>
</div>