<?php
include("header.php");
include('connection.php');
if(isset($_POST['submit'])){
    $items1=$_POST['items1'];
    $items2=$_POST['items2'];
    $items3=$_POST['items3'];
    $items4=$_POST['items4'];
    $items5=$_POST['items5'];
    $query="INSERT INTO dinner VALUE ('','$items1','$items2','$items3','$items4','$items5')";
    mysqli_query($con,$query);
    echo "<script>alert('Welcome to Main Course Page');</script>";
    header("Location:home.php");
}
mysqli_close($con);
?>
<style>
    #menu{
        position: absolute;
        top: 15%;
        left: 35%;
       background-color: #B2A4FF;
       text-align: left;
        height: 750px;
        width: 500px;
        color: white;
        border-radius: 10px;
        box-shadow: 5px 5px 5px #4F4557; 
        color: white;
    }
    h1{
        text-align: center;
        font-family: fantasy;
        color: #F0FF42;
    }
    h3{
        font-family: fantasy;
        color: red;
    }
    label{
        margin-left: 50px;
        font-size: 20px;
    }
        select,button{
        font-family: 'Times New Roman', Times, serif;
        margin: 10px;
        margin-left: 40px;
        font-weight: bold;
        font-size: 30px;
        width: 400px;
        height: 60px;
        border-radius: 10px;
        background: transparent;
        border: 3px solid #070A52;
        box-shadow: 5px 5px 5px #4F4557;       

    }
    .back-image{
  position: relative;
  filter: blur(1px);
  -webkit-filter: blur(1px);
  margin-top: 0px;
  background-size: cover;
}
</style>
<div class="back-image">
    <img src="images/dinner.jpg" alt="" height="0%" width="100%">
</div>
<div id="menu" data-aos="fade-right">
<h1>Suggest the Mess Menu</h1>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="dinner">
        <form action="" method="post">
            <div class="menu-heading">
                <marquee behavior="" direction="">
                <h3>Select The Dinner Menu</h3>
                </marquee>
            </div>
        <label for="">Select First Items</label><br>
         <select name="items1" id="">
          <option value="Veg_Kofta_Curry">Veg_Kofta_Curry</option>
          <option value="Dal_Palak">Dal_Palak</option>
          <option value="Rice">Rice</option>
          <option value="Chapati">Chapati</option>
          <option value="Chocolate">Chocolate</option>
         </select><br>
         <label for="">Select Second Items</label><br>
         <select name="items2" id="">
          <option value="Chicken_Chilly">Chicken_Chilly</option>
          <option value="Lobiya_Dal">Lobiya_Dal</option>
          <option value="White_Chana">White_Chana</option>
          <option value="Veg_Sambhar">Veg_Sambhar</option>
          <option value="Halwa">Halwa</option>
         </select><br>
         <label for="">Select Third Items</label><br>
         <select name="items3" id="">
          <option value="Palak_Paneer">Palak_Paneer</option>
          <option value="Rajma">Rajma</option>
          <option value="Hara_Kadu">Hara_Kadu</option>
          <option value="Sabut_Masoor">Sabut_Masoor</option>
          <option value="Aloo_Gobhi">Aloo_Gobhi</option>
         </select><br>
         <label for="">Select Fourth Items</label><br>
         <select name="items4" id="">
          <option value="Kerala_Chicken">Kerala_Chicken</option>
          <option value="Kadai_Chicken">Kadai_Chicken</option>
          <option value="Kheer">Kheer</option>
          <option value="Masroom_Matar">Masroom_Matar</option>
          <option value="Dal_Makhani">Dal_Makhani</option>
         </select><br>
         <label for="">Select Fifth Items</label><br>
         <select name="items5" id="">
          <option value="Gulab_Jamun">Gulab_Jamun</option>
          <option value="Gatta_Curry">Gatta_Curry</option>
          <option value="Aloo_Cabbage_Matar">Aloo_Cabbage_Matar</option>
          <option value="Kadai_Paneer">Kadai_Paneer</option>
          <option value="Nutry_Keema">Nutry_Keema</option>
         </select><br> 
         <button type="submit" name="submit" class="btn btn-success" style="margin-left: 40px;">Submit</button>
    </form>
        </div>
    </div>
</div>
</div>
<?php
include("footer.php");
?>