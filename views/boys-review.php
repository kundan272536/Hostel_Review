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
  header('Location:boys-hostels.php');
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
.boys-rating{
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
<div class="boys-rating" data-aos="fade-down">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
    <h3>Review Form</h3>
            <form action="" method="post">
              <label for="">Name</label><br>
              <input type="text" name="name" placeholder="Enter your name" required><br>
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
              <label for="">Services</label><br>
              <select name="facility" id="">
                <option value="Electricity">Electricity</option>
                <option value="Wifi">Wifi</option>
                <option value="Reading Room">Reading Room</option>
                <option value="Room Cleaning">Room Cleaning</option>
                <option value="Guest Room">Guest Room</option>
                <option value="Saloon">Saloon</option>
                <option value="Mess">Mess</option>
                <option value="Canteen">Canteen</option>
                <option value="Laundry">Laundry</option>
                <option value="Lift">Lift</option>
                <option value="Gym">Gym</option>
                <option value="Dispencary">Dispensary</option>
              </select><br>
              <label for="rating">Ratings</label><br>
              <input type="number" id="rating" name="rating" min="0" max="5" step="0.1" placeholder="0-5" required><br>
              <label for="">Review</label><br>
              <input type="text" name="review" placeholder="write your review" required><br><br>
              <button type="submit" name="submit" class="btn btn-primary  " style="margin-left: 40px;">Submit</button>
            </form>
         </div>
        </div>
</div>
<?php
include('footer.php')
?>