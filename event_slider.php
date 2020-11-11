<style>

.rating {
    margin-left: 37%
}

.page {
    background-color: #dfe6e0;
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
$result = mysqli_query($conn,"SELECT * FROM events ORDER BY id DESC LIMIT 4
" );

?>

<!--For Page-->
<div class="page">
    <center><h3>EVENTS</h3></center>
    <!--For Row containing all card-->
    <div class="row">
        <!--Card 1-->
        <?php   
        while($row = mysqli_fetch_array($result)){


        ?>
        <div class="col-sm">
            <div class="card card-cascade card-ecommerce wider shadow mb-5 ">
                <!--Card image-->
                <div class="view view-cascade overlay text-center"> <img class="card-img-top" src="uploads/<?php  echo $row['img']   ?>" alt=""> <a>
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
    
       
    </div>
</div>