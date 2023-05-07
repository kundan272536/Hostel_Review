<?php
include("a_header.php");
include('../connection.php');
$bReview="SELECT * FROM boys_feed_back";
$bResult=mysqli_query($con,$bReview);
$gReview="SELECT * FROM girls_feed_back";
$gResult=mysqli_query($con,$gReview);
mysqli_close($con);
?>
<style>
  
  #boys_review{
    background: rgb(33,210,246);
    background: linear-gradient(90deg, rgba(33,210,246,1) 0%, rgba(33,246,244,1) 0%, rgba(3,6,6,1) 0%, rgba(245,25,14,1) 0%, rgba(246,245,175,1) 0%, rgba(185,255,252,0.5355392156862745) 18%, rgba(236,248,250,1) 67%, rgba(137,231,227,0.7736344537815126) 85%, rgba(236,163,170,1) 100%, rgba(233,247,159,0.7736344537815126) 100%, rgba(68,147,182,1) 100%);
  }
  #girls_review{
    background: rgb(33,210,246);
    background: linear-gradient(90deg, rgba(33,210,246,1) 0%, rgba(33,246,244,1) 0%, rgba(3,6,6,1) 0%, rgba(245,25,14,1) 0%, rgba(187,239,178,1) 0%, rgba(185,255,252,0.5355392156862745) 18%, rgba(236,248,250,1) 67%, rgba(137,231,227,0.7736344537815126) 85%, rgba(167,247,159,0.7736344537815126) 100%, rgba(68,147,182,1) 100%, rgba(236,163,170,1) 100%);
  }
  h3{
    font-family: fantasy;
    color: red;
  }
</style>
<h3>All Boys` Hostels` Reviews</h3>
<div id="review">
<div id="boys_review">
    <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Name</td>
            <td>Hostels</td>
            <td>Facility</td>
            <td>Rating</td>
            <td>Review</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($bResult))
            {
              ?>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['hostels'];?></td>
            <td><?php echo $row['facility'];?></td>
            <td><?php echo $row['rating'];?></td>
            <td><?php echo $row['review'];?></td>
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
<h3>All Girls` Hostels` Review</h3>
<div id="girls_review">
<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12"data-aos="fade-up" data-aos-anchor-placement="center-bottom">
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Name</td>
            <td>Hostels</td>
            <td>Facility</td>
            <td>Rating</td>
            <td>Review</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($gResult))
            {
              ?>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['hostels'];?></td>
            <td><?php echo $row['facility'];?></td>
            <td><?php echo $row['rating'];?></td>
            <td><?php echo $row['review'];?></td>
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