<?php
include("a_header.php");
$con=mysqli_connect('localhost','root','','hostel_review');
$breakfast="SELECT * FROM breakfast";
$breakQuery=mysqli_query($con,$breakfast);
$lunch="SELECT * FROM lunch";
$lunchQuery=mysqli_query($con,$lunch);
$snacks="SELECT * FROM snacks";
$snacksQuery=mysqli_query($con,$snacks);
$dinner="SELECT * FROM dinner";
$dinnerQuery=mysqli_query($con,$dinner);
mysqli_close($con);
?>
<div class="demand">
    <div class="breakfast">
        <h3>Demanding Breakfast Menu</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Itmes1</td>
            <td>Items2</td>
            <td>Items3</td>
            <td>Itmes4</td>
            <td>Items5</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($breakQuery))
            {
              ?>
            <td><?php echo $row['items1'];?></td>
            <td><?php echo $row['items2'];?></td>
            <td><?php echo $row['items3'];?></td>
            <td><?php echo $row['items4'];?></td>
            <td><?php echo $row['items5'];?></td>
            </tr>
            <?php
            }
            ?>
          </table>
          </div>
          </div> 
        </div>
        </div>    
    </div>
    <div class="lunch">
        <h3>Demanding Lunch Menu</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Itmes1</td>
            <td>Items2</td>
            <td>Items3</td>
            <td>Itmes4</td>
            <td>Items5</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($lunchQuery))
            {
              ?>
            <td><?php echo $row['items1'];?></td>
            <td><?php echo $row['items2'];?></td>
            <td><?php echo $row['items3'];?></td>
            <td><?php echo $row['items4'];?></td>
            <td><?php echo $row['items5'];?></td>
            </tr>
            <?php
            }
            ?>
          </table>
          </div>
          </div> 
        </div>
        </div>
    </div>
    <div class="snacks">
        <h3>Demanding Snacks Menu</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Itmes1</td>
            <td>Items2</td>
            <td>Items3</td>
            <td>Itmes4</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($snacksQuery))
            {
              ?>
            <td><?php echo $row['items1'];?></td>
            <td><?php echo $row['items2'];?></td>
            <td><?php echo $row['items3'];?></td>
            <td><?php echo $row['items4'];?></td>
            </tr>
            <?php
            }
            ?>
          </table>
          </div>
          </div> 
        </div>
        </div>
    </div>
    <div class="dinner">
        <h3>Demanding Dinner Menu</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Itmes1</td>
            <td>Items2</td>
            <td>Items3</td>
            <td>Itmes4</td>
            <td>Items5</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($dinnerQuery))
            {
              ?>
            <td><?php echo $row['items1'];?></td>
            <td><?php echo $row['items2'];?></td>
            <td><?php echo $row['items3'];?></td>
            <td><?php echo $row['items4'];?></td>
            <td><?php echo $row['items5'];?></td>
            </tr>
            <?php
            }
            ?>
          </table>
          </div>
          </div> 
        </div>
        </div>
    </div>
</div>
<?php
include("a_footer.php");
?>