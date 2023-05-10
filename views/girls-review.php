<?php
include('header.php');
$con=mysqli_connect('localhost','root','','hostel_review');
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $hostels=$_POST['hostels'];
  $facility=$_POST['facility'];
  $rating=$_POST['rating'];
  $review=$_POST['review'];
  $query="INSERT INTO girls_feed_back VALUES ('','$name','$hostels','$facility','$rating','$review')";
  mysqli_query($con,$query);
  echo "<script>alert('Data inserted Successfully')</script>";
  header('Location:girls-hostels.php');
}
mysqli_close($con);
?>
<style>
   
input, select, button {
  margin: 5px;
  margin-left: 40px;
  width: 400px;
  height: 50px;
  border-radius: 10px;
  box-shadow: 10px 10px 10px black;         
}
label{
  margin-left: 40px;
  font-weight: bold;
  color: blue;
  font-size: 20px;
}
.girls-rating{
  text-align: left;
  position: absolute;
  top: 20%;
  left: 35%;
  height: 600px;
  width: 500px;
  background-color: #B9E9FC;
  
}
h3{
  text-align: center;
  font-family: fantasy;
  color: red;
}
.back-image{
  position: relative;
  filter: blur(1px);
  -webkit-filter: blur(2px);
  margin-top: 0px;
  background-size: cover;
}
</style>
<div class="back-image">
  <img src="images/img8.jpg" alt="" height="0%" width="100%">
</div>
<div class="girls-rating" data-aos="fade-up">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">  
            <h3>Review Form</h3>
            <form action=" " method="post">
              <label for="name" >Name</label><br>
              <input type="text" placeholder="enter your name" name="name" required><br>
              <label for="hostels">Hostels</label><br>
              <select name="hostels" id="" required><br>
              <option value="Shukhna-A" >Shukhna-A</option>
              <option value="Shukhna-B" >Shukhna-B</option>
              <option value="Tagore" >Tagore</option>
              <option value="Shivalik" >Shivalik</option>
              <option value="LC-A" >LC-A</option>
              <option value="LC-B" >LC-B</option>
              <option value="LC-C" >LC-C</option>
              <option value="LC-D" >LC-D</option>
              </select><br>
              <label for="facility">Services</label><br>
              <select name="facility" id="" required >
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
                <option value="Laundry">Laundry</option>
                <option value="Dispencary">Dispenary</option>
              </select><br>
              <label for="rating">Rating</label><br>
              <input type="number" id="rating" name="rating" min="0" max="5" step="0.1" placeholder="0-5" required><br>
              <label for="review">Review</label><br>
              <input type="text" placeholder="write your review" name="review" required ><br><br>
              <button type="submit" name="submit" class="btn btn-primary "  value="submit" style="margin-left: 40px;">Submit</button>
            </form>
</div>
</div>
</div>
<?php
include('footer.php');
?>