<?php
include('e_header.php');
$con=mysqli_connect('localhost','root','','hostel_review');
$retrieve="SELECT * FROM girls_feed_back";
$result=mysqli_query($con,$retrieve);
$sukhna_a="SELECT * FROM girls_feed_back where hostels='Shukhna-A'";
$result1=mysqli_query($con,$sukhna_a);
$sukhna_b="SELECT * FROM girls_feed_back where hostels='Shukhna-B'";
$result2=mysqli_query($con,$sukhna_b);
$tagore="SELECT * FROM girls_feed_back where hostels='Tagore'";
$result3=mysqli_query($con,$tagore);
$lc_a="SELECT * FROM girls_feed_back where hostels='LC-A'";
$result4=mysqli_query($con,$lc_a);
$lc_b="SELECT * FROM girls_feed_back where hostels='LC-B'";
$result5=mysqli_query($con,$lc_b);
$lc_c="SELECT * FROM girls_feed_back where hostels='LC-C'";
$result6=mysqli_query($con,$lc_c);
$lc_d="SELECT * FROM girls_feed_back where hostels='LC-D'";
$result7=mysqli_query($con,$lc_d);
$shivalik="SELECT * FROM girls_feed_back where hostels='Shivalik'";
$result8=mysqli_query($con,$shivalik);
mysqli_close($con);
?>
<style>
    #girls-hostels-review{  
    margin-top: 10px;
    margin-left: 10px;
    margin-right: 10px;

    }
    .image-section{
        background: rgb(236,39,37);
        background: linear-gradient(90deg, rgba(236,39,37,0.6083683473389356) 0%, rgba(238,240,242,0.7428221288515406) 0%, rgba(190,230,241,1) 95%, rgba(39,200,236,1) 100%, rgba(7,213,255,1) 100%, rgba(0,212,255,1) 100%, rgba(110,192,132,0.7456232492997199) 100%, rgba(81,226,81,1) 100%);
    }
    .hov:hover{
      height: 400px;
      width: 500px;
      transition: 0.2s;
    }
    .pg{
        text-align: justify;
        font-size: 20px;
        padding: 30px;
    }    
</style>
<div id="girls-hostels-review">
    <div class="row image-section">
        <div class="col col-lg-4 col-md-6 col-sm-12 hov ">
        <img src="../images/girls/shukhna-b.JPG" class="img-thumbnail" alt="Cinque Terre" >
        </div>
        <div class="col col-lg-4 col-md-6 col-sm-12 pg">
            <p>Choosing a University is also about choosing a 
                new home. We ensure that students dwell in a
                 healthy environment that helps them to grow 
                 and learn without any obstacle.Chandigarh 
                 University Campus has separate hostels for 
                 boys and girls with all modern facilities and 
                 attached mess.
            </p>
        </div>
        <div class="col col-lg-4 col-md-6 col-sm-12">
        <img src="../images/girls/shivalik.JPG" class="img-thumbnail" alt="Cinque Terre">
        </div>
        <div class="col col-lg-4 col-md-6 col-sm-12 pg">
            <p>
            The hostel mess serves fresh and hygienic food.
             You will be provided with facilities like internet, 
             music room, and common room with TV & cable facility, 
             salon facilities, room for indoor games and a reading 
             room with a collection of national/international 
             newspapers, magazines, etc.
            </p>
        </div>
        <div class="col col-lg-4 col-md-6 col-sm-12">
        <img src="../images/girls/lc.JPG" class="img-thumbnail" alt="Cinque Terre">
        </div>
        <div class="col col-lg-4 col-md-6 col-sm-12 pg">
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
        <h3>All review</h3>
            <div class="col-lg-12 col-md-12 col-sm-12">
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
         <!-- Shukhna- A Review   -->
        <div class="row">
        <h3>Shukhna-A Review Table</h3>
            <div class="col-lg-12 col-md-12 col-sm-12">
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
        <!-- Shukhna-B Review-->
        <div class="row">
        <h3>Shukhna-B Review Table</h3>
            <div class="col-lg-12 col-md-12 col-sm-12">
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
        <!-- Tagore Review-->
        <div class="row">
        <h3>Tagore Review Table</h3>
            <div class="col-lg-12 col-md-12 col-sm-12">
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
        <!--LC-A Review-->
        <div class="row">
        <h3>LC-A Review Table</h3>
            <div class="col-lg-12 col-md-12 col-sm-12">
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
           <!--LC-B Review-->
        <div class="row">
        <h3>LC-B Review Table</h3>
            <div class="col-lg-12 col-md-12 col-sm-12">
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
        <!--LC-C Review-->
        <div class="row">
        <h3>LC-C Review Table</h3>
            <div class="col-lg-12 col-md-12 col-sm-12">
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
        <!--LC-D Review-->
        <div class="row">
        <h3>LC-D Review Table</h3>
            <div class="col-lg-12 col-md-12 col-sm-12">
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
        <!--Shivalik Review-->
        <div class="row">
        <h3>Shivalik Review Table</h3>
            <div class="col-lg-12 col-md-12 col-sm-12">
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
</div>
<?php
include('e_footer.php');
?>