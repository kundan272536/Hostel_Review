<?php
include('header.php');
$con=mysqli_connect('localhost','root','','hostel_review');
$retrieve="SELECT * FROM boys_feed_back";
$result=mysqli_query($con,$retrieve);
mysqli_close($con);
?>
<style>
  .hostels-facility img{
    border-radius: 50%;
    border: 2px solid black;
    background-color: #EEF1FF;
    box-shadow: 0px 8px 10px black;
  }
  .hov:hover{
  width: 230px;
  height: 230px;
  background-color: #B9E9FC;
  border-color: #675D50;
  transition-duration: 0.5s;
}

</style>
<div class="hostel-heading">
    <marquee behavior="alphacoders" direction="right">
        <h1>Hostels is the Best Place for Students</h1>
    </marquee>
</div>
<div class="boys-hostels-img" >
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card" style="margin-left: 50px;margin-top: 5px;" >
              <img src="images/boys/b1.JPG" class="card-img-top" alt="..." >
              <div class="card-body">
                <h5 class="card-title">Nek-Chand-1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="girls-hostels" class="btn btn-primary">For More Details</a>
              </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card" style="margin-left: 50px;margin-top: 5px;" >
              <img src="images/boys/b2.JPG" class="card-img-top" alt="..." >
              <div class="card-body">
                <h5 class="card-title">Nek-Chand-2</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="girls-hostels" class="btn btn-primary">For More Details</a>
              </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card" style="margin-left: 50px;margin-top: 5px;" >
              <img src="images/boys/b3.JPG" class="card-img-top" alt="..." >
              <div class="card-body">
                <h5 class="card-title">Nek-Chand-3</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="girls-hostels" class="btn btn-primary">For More Details</a>
              </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card" style="margin-left: 50px;margin-top: 5px;" >
              <img src="images/boys/b4.JPG" class="card-img-top" alt="..." >
              <div class="card-body">
                <h5 class="card-title">Nek-Chand-4</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="girls-hostels" class="btn btn-primary">For More Details</a>
              </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card" style="margin-left: 50px;margin-top: 5px;" >
              <img src="images/boys/b5.JPG" class="card-img-top" alt="..." >
              <div class="card-body">
                <h5 class="card-title">Nek-Chand-5</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="girls-hostels" class="btn btn-primary">For More Details</a>
              </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card" style="margin-left: 50px;margin-top: 5px;" >
              <img src="images/boys/b6.JPG" class="card-img-top" alt="..." >
              <div class="card-body">
                <h5 class="card-title">Zakir</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="girls-hostels" class="btn btn-primary">For More Details</a>
              </div>
            </div>
         </div>
    </div>
</div>
<div class="boys-hostels">
<!--Hostel Fasility-->
<h1>Facilities at Hostels</h1>
<div class="hostels-facility" >
    <div class="row"  > 
    <div class="col-lg-3 col-md-4 col-sm-6" > 
        <img  src="images/img/electric.png" class="img-fluid hov" alt="">
         <p>Electricity Services 24X7</p>
    </div> 
    <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/img/router.png" class="img-fluid hov" alt="">
       <p>Wifi Services 24X7</p>    
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/img/reading.png" class="img-fluid hov" alt="">
       <p>Well- equipped reading rooms</p>      
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/img/roomcleaning.png" class="img-fluid hov" alt="">
            <p> Room cleaning Services</p>  
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/img/visitor.png" class="img-fluid hov" alt=""> 
            <p> Visitors & Guest Room </p>    
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/img/saloon.png" class="img-fluid hov" alt="">
         <p> Saloon Services</p>      
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/img/mess.png" class="img-fluid hov" alt="">
          <p>Mess Services </p>      
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/img/canteen.png" class="img-fluid hov" alt="">
          <p>Night Canteen & Tuck Shops</p> 
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/img/lift.png" class="img-fluid hov" alt="">
          <p>Lift Services</p>     
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/img/gym.png" class="img-fluid hov" alt="">
         <p>Gym Services</p>    
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/img/b-warden.png" class="img-fluid hov" alt="">
         <p>Warden</p>    
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/img/dispencary.png" class="img-fluid hov" alt="">
         <p>Dispencary</p>    
    </div>
    </div>  
 </div>
</div>
<div>
  <h5>If you want give feedback <a href="boys-review.php">click here</a> </h5>
</div>
<div class="menu">
      <h5>Form related to mess menu <a href="breakfast.php">click here</a></h5>
    </div>
<div class="rating">
  <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
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
          </div>
        </div>
<?php
include("footer.php");
?>