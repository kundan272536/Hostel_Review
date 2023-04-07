<?php
include('header.php');
$con=mysqli_connect('localhost','root','','hostel_review');
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $hostels=$_POST['hostels'];
  $facility=$_POST['facility'];
  $rating=$_POST['rating'];
  $review=$_POST['review'];
  $query="INSERT INTO boys_feed_back VALUES ('','$name','$hostels','$facility','$rating','$review')";
  mysqli_query($con,$query);
  echo "<script>alert('Data inserted Successfully')</script>";
}
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
  label, input, select {
  display: inline-block;
  vertical-align: middle;
  margin: 10px;
  font-size: 20px;
}
input, select {
  width: 350px;
  height: 40px;
  border-radius: 5px;
}
.rating{
  background-color: #E3DFFD;
  padding: 10px;
 
}
.boys-rating{
  position: relative;
  border: 2px solid black;
  border-radius: 10px;
  
  box-shadow: 10px 10px 10px black;
  
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
                <h5 class="card-title">Shivalik</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="girls-hostels" class="btn btn-primary">For More Details</a>
              </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card" style="margin-left: 50px;margin-top: 5px;" >
              <img src="images/boys/b2.JPG" class="card-img-top" alt="..." >
              <div class="card-body">
                <h5 class="card-title">Shivalik</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="girls-hostels" class="btn btn-primary">For More Details</a>
              </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card" style="margin-left: 50px;margin-top: 5px;" >
              <img src="images/boys/b3.JPG" class="card-img-top" alt="..." >
              <div class="card-body">
                <h5 class="card-title">Shivalik</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="girls-hostels" class="btn btn-primary">For More Details</a>
              </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card" style="margin-left: 50px;margin-top: 5px;" >
              <img src="images/boys/b4.JPG" class="card-img-top" alt="..." >
              <div class="card-body">
                <h5 class="card-title">Shivalik</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="girls-hostels" class="btn btn-primary">For More Details</a>
              </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card" style="margin-left: 50px;margin-top: 5px;" >
              <img src="images/boys/b5.JPG" class="card-img-top" alt="..." >
              <div class="card-body">
                <h5 class="card-title">Shivalik</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="girls-hostels" class="btn btn-primary">For More Details</a>
              </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card" style="margin-left: 50px;margin-top: 5px;" >
              <img src="images/boys/b6.JPG" class="card-img-top" alt="..." >
              <div class="card-body">
                <h5 class="card-title">Shivalik</h5>
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
<div class="rating">
 
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="boys-rating">
    <h3>Review Form</h3>
            <form action="" method="post">
              <label for="">Name: </label>
              <input type="text" name="name" placeholder="enter your name" required><br>
              <label for="">Hostels:</label>
              <select name="hostels" id="">
              <option value="Nek Chand-1">Nek Chand-1</option>
              <option value="Nek Chand-2">Nek Chand-2</option>
              <option value="Nek Chand-3">Nek Chand-3</option>
              <option value="Nek Chand-4">Nek Chand-4</option>
              <option value="Nek Chand-5">Nek Chand-5</option>
              <option value="Nek Chand-6">Nek Chand-6</option>
              <option value="Zakir-A">Zakir-A</option>
              <option value="Zakir-B">Zakir-B</option>
              <option value="Zakir-C">Zakir-C</option>
              <option value="Zakir-D">Zakir-D</option>
              <option value="Govind">Govind</option>
              </select><br>
              <label for="">Facility:</label>
              <select name="facility" id="">
                <option value="Electricity">Electricity</option>
                <option value="Wifi">Wifi</option>
                <option value="Reading Room">Reading Room</option>
                <option value="Room Cleaning">Room Cleaning</option>
                <option value="Guest Room">Guest Room</option>
                <option value="Saloon">Saloon</option>
                <option value="Mess">Mess</option>
                <option value="Canteen">Canteen</option>
                <option value="Lift">Lift</option>
                <option value="Gym">Gym</option>
                <option value="Warden">Warden</option>
                <option value="Dispencary">Dispencary</option>
              </select><br>
              <label for="rating">Rating:</label>
              <input type="number" id="rating" name="rating" min="0" max="5" step="0.1" placeholder="0-5" required><br>
              <label for="">Review:</label>
              <input type="text" name="review" placeholder="write your review" required><br>
              <button type="submit" name="submit" class="btn btn-primary btn-lg " style="width: 350px;margin-left: 90px;">Submit</button>
            </form>
         </div>
        </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
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