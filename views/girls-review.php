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
.girls-rating{
  border-radius: 10px;
  padding-top: 6%;
  padding-bottom: 6%;
  background-image: url(images/img8.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
        <div class="girls-rating">
            <h3>Review Form</h3>
            <form action=" " method="post">
              <label for="name" >Name:</label>
              <input type="text" placeholder="enter your name" name="name" required ><br>
              <label for="hostels">Hostels:</label>
              <select name="hostels" id="" required>
              <option value="Shukhna-A" >Shukhna-A</option>
              <option value="Shukhna-B" >Shukhna-B</option>
              <option value="Tagore" >Tagore</option>
              <option value="Shivalik" >Shivalik</option>
              <option value="LC-A" >LC-A</option>
              <option value="LC-B" >LC-B</option>
              <option value="LC-C" >LC-C</option>
              <option value="LC-D" >LC-D</option>
              </select><br>
              <label for="facility">Services:</label>
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
                <option value="Warden">Warden</option>
                <option value="Dispencary">Dispencary</option>
              </select><br>
              <label for="rating">Rating:</label>
              <input type="number" id="rating" name="rating" min="0" max="5" step="0.1" placeholder="0-5" required><br>
              <label for="review">Review:</label>
              <input type="text" placeholder="write your review" name="review" required ><br>
              <button type="submit" name="submit" class="btn btn-primary btn-lg " style="width: 350px;margin-left: 90px;" value="submit">Submit</button>
            </form>
          </div>
        </div>
</div>
  
        <?php
        include('footer.php');
        ?>