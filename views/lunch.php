<?php
include('header.php');
$con=mysqli_connect('localhost','root','','hostel_review');
if(isset($_POST['submit'])){
    $items1=$_POST['items1'];
    $items2=$_POST['items2'];
    $items3=$_POST['items3'];
    $items4=$_POST['items4'];
    $items5=$_POST['items5'];
    $query="INSERT INTO lunch VALUE('','$items1','$items2','$items3','$items4','$items5')";
    mysqli_query($con,$query);
    echo "<script>alert('Welcome to Main Course Page');</script>";
    header('Location:snack.php');
}
mysqli_close($con);
?>
<style>
    body{
        background-image: url(images/lunch.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }
    select,button{
        font-size: 20px;
        width: 350px;
        height: 60px;
        border-radius: 10px;
        background: transparent;
        border-color: blue;
        /* color: white; */
    }
</style>
<div id="menu">
<h1>Suggest the Mess Menu</h1>
<div>
    <form action="" method="post">
        <h3>Select Lunch Menu</h3>
        <label for="">Select First Items</label><br>
         <select name="items1" id="">
          <option value="Jeera_rice">Jeera_rice</option>
          <option value="Kadhi_Pakoda">Kadhi_Pakoda</option>
          <option value="Khichdi_Curd">Khichdi_Curd</option>
          <option value="Dal_Panchmel">Dal_Panchmel</option>
          <option value="Ghiya_Masala">Ghiya_Masala</option>
         </select><br>
         <label for="">Select Second Items</label><br>
         <select name="items2" id="">
          <option value="Veg_Biryani">Veg_Biryani</option>
          <option value="Dal_Makhani">Dal_Makhani</option>
          <option value="Mix_Veg_Rice">Mix_Veg_Rice</option>
          <option value="Aloo_Matar">Aloo_Matar</option>
          <option value="Saboot_Masoor">Saboot_Masoor</option>
         </select><br>
         <label for="">Select Third Items</label><br>
         <select name="items3" id="">
          <option value="Masoor_Matar">Masoor_Matar</option>
          <option value="Malka_Masoor_Dal">Malka_Masoor_Dal</option>
          <option value="Aloo_Beans">Aloo_Beans</option>
          <option value="Stuffed_Paratha_Curd">Stuffed_Paratha_Curd</option>
          <option value="Omlete_Bread_Jam_Butter">Omlete_Bread_Jam_Butter</option>
         </select><br>
         <label for="">Select Fourth Items</label><br>
         <select name="items4" id="">
          <option value="Plain_Paratha">Plain_Paratha</option>
          <option value="Stuffed_Paratha">Stuffed_Paratha</option>
          <option value="Cornflakes_milk">Cornflakes_milk</option>
          <option value="Bread_Jam_Butter_Milk">Bread_Jam_Butter_Milk</option>
          <option value="Daliya_Banana_Bread_Jam">Daliya_Banana_Bread_Jam</option>
         </select><br>
         <label for="">Select Fifth Items</label><br>
         <select name="items5" id="">
          <option value="Plain_Paratha">Plain_Paratha</option>
          <option value="Stuffed_Paratha">Stuffed_Paratha</option>
          <option value="Cornflakes_milk">Cornflakes_milk</option>
          <option value="Bread_Jam_Butter_Milk">Bread_Jam_Butter_Milk</option>
          <option value="Daliya_Banana_Bread_Jam">Daliya_Banana_Bread_Jam</option>
         </select><br>
         
         <button type="submit" name="submit" class="btn btn-lg btn-primary">Submit</button>
    </form>
</div>
</div>
<?php
include('footer.php');
?>