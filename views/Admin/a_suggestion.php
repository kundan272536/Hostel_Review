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
<style>
  /* #demand{

  } */
  #breakfast{
    background: rgb(33,210,246);
    background: linear-gradient(90deg, rgba(33,210,246,1) 0%, rgba(33,246,244,0.8156512605042017) 0%, rgba(3,6,6,1) 0%, rgba(245,25,14,1) 0%, rgba(237,233,232,1) 0%, rgba(231,137,142,0.7736344537815126) 0%, rgba(68,147,182,1) 0%, rgba(236,248,250,1) 0%, rgba(199,172,160,1) 0%, rgba(167,247,159,0.7736344537815126) 0%, rgba(163,194,236,1) 0%, rgba(177,209,231,1) 0%, rgba(186,219,242,1) 0%, rgba(128,235,171,1) 0%, rgba(227,237,252,1) 0%, rgba(162,251,211,1) 0%, rgba(185,218,255,0.5187324929971988) 0%, rgba(65,233,141,0.5187324929971988) 0%, rgba(246,241,199,0.6279761904761905) 0%, rgba(233,233,233,1) 64%, rgba(179,219,217,0.5187324929971988) 100%);
    }
  #lunch{
    background: rgb(33,210,246);
   background: linear-gradient(90deg, rgba(33,210,246,1) 0%, rgba(33,246,244,0.8156512605042017) 0%, rgba(3,6,6,1) 0%, rgba(245,25,14,1) 0%, rgba(237,233,232,1) 0%, rgba(231,137,142,0.7736344537815126) 0%, rgba(68,147,182,1) 0%, rgba(236,248,250,1) 0%, rgba(199,172,160,1) 0%, rgba(167,247,159,0.7736344537815126) 0%, rgba(163,194,236,1) 0%, rgba(177,209,231,1) 0%, rgba(186,219,242,1) 0%, rgba(128,235,171,1) 0%, rgba(227,237,252,1) 0%, rgba(162,251,211,1) 0%, rgba(185,218,255,0.5187324929971988) 0%, rgba(65,233,141,0.5187324929971988) 0%, rgba(244,242,230,0.5327380952380952) 0%, rgba(233,233,233,1) 64%, rgba(179,219,217,0.5187324929971988) 100%);
    }
  #snacks{
    
    background: rgb(33,210,246);
    background: linear-gradient(90deg, rgba(33,210,246,1) 0%, rgba(33,246,244,0.8156512605042017) 0%, rgba(3,6,6,1) 0%, rgba(245,25,14,1) 0%, rgba(237,233,232,1) 0%, rgba(231,137,142,0.7736344537815126) 0%, rgba(68,147,182,1) 0%, rgba(236,248,250,1) 0%, rgba(199,172,160,1) 0%, rgba(167,247,159,0.7736344537815126) 0%, rgba(163,194,236,1) 0%, rgba(177,209,231,1) 0%, rgba(186,219,242,1) 0%, rgba(128,235,171,1) 0%, rgba(227,237,252,1) 0%, rgba(162,251,211,1) 0%, rgba(185,218,255,0.5187324929971988) 0%, rgba(65,233,141,0.5187324929971988) 0%, rgba(246,241,199,0.6279761904761905) 0%, rgba(233,233,233,1) 64%, rgba(179,219,217,0.5187324929971988) 100%);
 }
  #dinner{
    background: rgb(33,210,246);
   background: linear-gradient(90deg, rgba(33,210,246,1) 0%, rgba(33,246,244,0.8156512605042017) 0%, rgba(3,6,6,1) 0%, rgba(245,25,14,1) 0%, rgba(237,233,232,1) 0%, rgba(231,137,142,0.7736344537815126) 0%, rgba(68,147,182,1) 0%, rgba(236,248,250,1) 0%, rgba(199,172,160,1) 0%, rgba(167,247,159,0.7736344537815126) 0%, rgba(163,194,236,1) 0%, rgba(177,209,231,1) 0%, rgba(186,219,242,1) 0%, rgba(128,235,171,1) 0%, rgba(227,237,252,1) 0%, rgba(162,251,211,1) 0%, rgba(185,218,255,0.5187324929971988) 0%, rgba(65,233,141,0.5187324929971988) 0%, rgba(244,242,230,0.5327380952380952) 0%, rgba(233,233,233,1) 64%, rgba(179,219,217,0.5187324929971988) 100%);
  }
  h3{
    font-family: fantasy;
    color: red;
  }
</style>
<div id="demand">
    <div id="breakfast">
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
    <div id="lunch">
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
    <div id="snacks">
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
    <div id="dinner">
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