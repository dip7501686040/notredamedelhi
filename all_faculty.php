<?php require_once('header.php');
?>
<div class="container">
  <br><br>
  <center>
    <h3 style="color: #072b52;">FACULTY</h3>
  </center>
<br>
  <table class="table table-striped" border="1">
    <thead>
      <tr style="text-align: center;">
        <th>S.no</th>
        <th>Name</th>
        <th>Designation</th>

      </tr>
    </thead>
    <tbody>
      <?php
      $result = getfaculty($conn);
      $count = 1;
      while ($row = mysqli_fetch_array($result)) {  ?>
        <tr>
          <td><?php echo $count; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['Designation']; ?></td>
        </tr>
      <?php
        $count = $count + 1;
      }
      ?>
    </tbody>
  </table>
  <br><br>
  <center>
    <h3 style="color: #072b52;">Co-Ordinators</h3>
  </center>
  <br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</div>
<br><br>
<?php require_once('footer.php'); ?>