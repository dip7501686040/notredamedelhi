<?php
require('header.php');
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            Enter the details of New Principals
        </div>
        <div class="card-body">
            <p class="card-text">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Choose Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Give your Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail2">Year of Joining</label>
                        <input type="text" class="form-control" id="exampleInputEmail2" >
                    </div>

                    <button type="submit" class="btn" style="background-color: #212529;color:white;">Save</button>
                </form>
            </p>
        </div>
    </div>

</div>
<?php
require('footer.php');
?>