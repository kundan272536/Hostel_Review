<?php
include('e_header.php');
include('../connection.php');
$retrieve="SELECT * FROM boys_feed_back";
$result=mysqli_query($con,$retrieve);
$nc1="SELECT * FROM boys_feed_back where hostels='Nek Chand-1'";
$result1=mysqli_query($con,$nc1);
$nc2="SELECT * FROM boys_feed_back where hostels='Nek Chand-2'";
$result2=mysqli_query($con,$nc2);
$nc3="SELECT * FROM boys_feed_back where hostels='Nek Chand-3'";
$result3=mysqli_query($con,$nc3);
$nc4="SELECT * FROM boys_feed_back where hostels='Nek Chand-4'";
$result4=mysqli_query($con,$nc4);
$nc5="SELECT * FROM boys_feed_back where hostels='Nek Chand-5'";
$result5=mysqli_query($con,$nc5);
$nc6="SELECT * FROM boys_feed_back where hostels='Nek Chand-6'";
$result6=mysqli_query($con,$nc6);
$zakir_a="SELECT * FROM boys_feed_back where hostels='Zakir-A'";
$result7=mysqli_query($con,$zakir_a);
$zakir_b="SELECT * FROM boys_feed_back where hostels='Zakir-B'";
$result8=mysqli_query($con,$zakir_b);
$zakir_c="SELECT * FROM boys_feed_back where hostels='Zakir-C'";
$result9=mysqli_query($con,$zakir_c);
$zakir_d="SELECT * FROM boys_feed_back where hostels='Zakir-D'";
$result10=mysqli_query($con,$zakir_d);
$govind="SELECT * FROM boys_feed_back where hostels='Govind'";
$result11=mysqli_query($con,$govind);
mysqli_close($con);
?>
<style>
    #boys-hostels-review{ 
      background: rgb(33,210,246);
      background: linear-gradient(90deg, rgba(33,210,246,1) 0%, rgba(33,246,244,1) 0%, rgba(246,204,162,1) 0%, rgba(148,232,249,1) 30%, rgba(192,110,192,0.7456232492997199) 100%, rgba(233,247,159,0.7736344537815126) 100%, rgba(68,147,182,1) 100%, rgba(137,231,227,0.7736344537815126) 100%, rgba(0,212,255,1) 100%); 
      margin-top: 10px;
      margin-left: 10px;
      margin-right: 10px;

    }
    .image-section{
        background: rgb(236,39,37);
        background: linear-gradient(90deg, rgba(236,39,37,0.6083683473389356) 0%, rgba(238,240,242,0.7428221288515406) 0%, rgba(190,230,241,1) 95%, rgba(39,200,236,1) 100%, rgba(7,213,255,1) 100%, rgba(0,212,255,1) 100%, rgba(110,192,132,0.7456232492997199) 100%, rgba(81,226,81,1) 100%);
    }
    .pg{
        text-align: justify;
        font-size: 20px;
        padding: 30px;
    }    
    h3{
      font-family: fantasy;
      color: red;
    }
</style>
<div id="boys-hostels-review">
    <div class="row image-section">
        <div class="col col-lg-4 col-md-6 col-sm-12" data-aos="fade-up-right" data-aos-anchor-placement="center-bottom">
        <img src="../images/boys/b4.JPG" class="img-thumbnail" alt="Cinque Terre" >
        </div>
        <div class="col col-lg-4 col-md-6 col-sm-12 pg" data-aos="fade-down" data-aos-anchor-placement="center-bottom">
            <p>Choosing a University is also about choosing a 
                new home. We ensure that students dwell in a
                 healthy environment that helps them to grow 
                 and learn without any obstacle.Chandigarh 
                 University Campus has separate hostels for 
                 boys and girls with all modern facilities and 
                 attached mess.
            </p>
        </div>
        <div class="col col-lg-4 col-md-6 col-sm-12" data-aos="fade-up-left" data-aos-anchor-placement="center-bottom">
        <img src="../images/boys/b3.JPG" class="img-thumbnail" alt="Cinque Terre">
        </div>
        <div class="col col-lg-4 col-md-6 col-sm-12 pg" data-aos="fade-right" data-aos-anchor-placement="center-bottom">
            <p>
            The hostel mess serves fresh and hygienic food.
             You will be provided with facilities like internet, 
             music room, and common room with TV & cable facility, 
             salon facilities, room for indoor games and a reading 
             room with a collection of national/international 
             newspapers, magazines, etc.
            </p>
        </div>
        <div class="col col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <img src="../images/boys/b5.JPG" class="img-thumbnail" alt="Cinque Terre">
        </div>
        <div class="col col-lg-4 col-md-6 col-sm-12 pg" data-aos="fade-left" data-aos-anchor-placement="center-bottom">
            <p>
            The hostels’ houses have a fully equipped gym and 
            separate courts for Volleyball, BasketBall, and 
            Badminton. The concerned and highly-experienced 
            staff looks after the university assets and ensures 
            that the hostel remains responsive all the time.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <h3>All Review</h3>
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Name</td>
            <td>Hostels</td>
            <td>Services</td>
            <td>Rating</td>
            <td>Review</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($result))
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
        <!-- All NC-1 Review Table -->
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <h3>Nek-Chand-1 Review Table</h3>
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Name</td>
            <td>Services</td>
            <td>Rating</td>
            <td>Review</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($result1))
            {
              ?>
              <td><?php echo $row['name'];?></td>
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
         <!-- All NC-2 Review Table -->
         <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <h3>Nek-Chand-2 Review Table</h3>
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Name</td>
            <td>Services</td>
            <td>Rating</td>
            <td>Review</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($result2))
            {
              ?>
              <td><?php echo $row['name'];?></td>
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
         <!-- All NC-3 Review Table -->
         <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <h3>Nek-Chand-3 Review Table</h3>
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Name</td>
            <td>Services</td>
            <td>Rating</td>
            <td>Review</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($result3))
            {
              ?>
              <td><?php echo $row['name'];?></td>
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
         <!-- All NC-4 Review Table -->
         <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <h3>Nek-Chand-4 Review Table</h3>
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Name</td>
            <td>Services</td>
            <td>Rating</td>
            <td>Review</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($result4))
            {
              ?>
              <td><?php echo $row['name'];?></td>
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
         <!-- All NC-5 Review Table -->
         <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <h3>Nek-Chand-5 Review Table</h3>
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Name</td>
            <td>Services</td>
            <td>Rating</td>
            <td>Review</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($result5))
            {
              ?>
              <td><?php echo $row['name'];?></td>
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
         <!-- All NC-6 Review Table -->
         <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <h3>Nek-Chand-6 Review Table</h3>
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Name</td>
            <td>Services</td>
            <td>Rating</td>
            <td>Review</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($result6))
            {
              ?>
              <td><?php echo $row['name'];?></td>
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
         <!-- All Zakir-A Review Table -->
         <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <h3>Zakir-A Review Table</h3>
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Name</td>
            <td>Services</td>
            <td>Rating</td>
            <td>Review</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($result7))
            {
              ?>
              <td><?php echo $row['name'];?></td>
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
         <!-- All Zakir-B Review Table -->
         <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <h3>Zakir-B Review Table</h3>
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Name</td>
            <td>Services</td>
            <td>Rating</td>
            <td>Review</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($result8))
            {
              ?>
              <td><?php echo $row['name'];?></td>
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
         <!-- All NC-1 Review Table -->
         <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <h3>Zakir-C Review Table</h3>
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Name</td>
            <td>Services</td>
            <td>Rating</td>
            <td>Review</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($result9))
            {
              ?>
              <td><?php echo $row['name'];?></td>
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
         <!-- All Zakir-D Review Table -->
         <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <h3>Zakir-D Review Table</h3>
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Name</td>
            <td>Services</td>
            <td>Rating</td>
            <td>Review</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($result10))
            {
              ?>
              <td><?php echo $row['name'];?></td>
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
         <!-- All Govind Review Table -->
         <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
            <h3>Govind Review Table</h3>
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Name</td>
            <td>Services</td>
            <td>Rating</td>
            <td>Review</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($result11))
            {
              ?>
              <td><?php echo $row['name'];?></td>
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
<?php
include('e_footer.php');
?>