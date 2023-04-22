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
   label, input, select {
  display: inline-block;
  vertical-align: middle;
  margin: 10px;
  font-size: 20px;
 
}
label{
 font-family: Georgia, 'Times New Roman', Times, serif;
}
input, select {
  width: 350px;
  height: 40px;
  border-radius: 5px;
}
.boys-rating{
  border-radius: 10px;
  padding-top: 6%;
  padding-bottom: 6%;
  background-image: url(images/img81.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
    <div class="boys-rating">
    <h3>Review Form</h3>
            <form action="" method="post">
              <label for="">Name:</label>
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
              <label for="">Services:</label>
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
              <label for="rating">Ratings:</label>
              <input type="number" id="rating" name="rating" min="0" max="5" step="0.1" placeholder="0-5" required><br>
              <label for="">Review:</label>
              <input type="text" name="review" placeholder="write your review" required><br>
              <button type="submit" name="submit" class="btn btn-primary btn-lg " style="width: 350px;margin-left: 90px;">Submit</button>
            </form>
         </div>
        </div>
</div>
<?php
include('footer.php')
?>