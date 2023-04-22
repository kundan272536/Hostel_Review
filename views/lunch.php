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
    #menu{
        background-image: url(images/lunch1.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }
    h1{
        font-family: fantasy;
        color: #ADA2FF;
    }
    h3{
        font-family: fantasy;
        color: red;
    }
    .menu-heading{
        margin-left: 38.5%;
        background-color: #C9EEFF;
        height: 40px;
        width: 350px;
        border-radius: 5px;
    }
    select,button{
        font-family: 'Times New Roman', Times, serif;
        /* font-style: italic; */
        margin-bottom: 10px;
     color: #16FF00;
        font-size: 30px;
        width: 350px;
        height: 60px;
        border-radius: 10px;
        background: transparent;
        border: 3px solid #070A52;
        box-shadow: 5px 5px 5px #4F4557;       

    }
</style>
<div id="menu">
<h1>Suggest the Mess Menu</h1>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="lunch">
        <form action="" method="post">
        <div class="menu-heading">
        <marquee behavior="" direction="">
        <h3>Select Lunch Menu</h3>
        </marquee>
    </div>
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
          <option value="Mushroom_Matar">Mushroom_Matar</option>
          <option value="Malka_Masoor_Dal">Malka_Masoor_Dal</option>
          <option value="Aloo_Beans">Aloo_Beans</option>
          <option value="Stuffed_Paratha_Curd">Raita</option>
          <option value="Chicken_Biryani">Chicken_Biryani</option>
         </select><br>
         <label for="">Select Fourth Items</label><br>
         <select name="items4" id="">
          <option value="Kathal_Biryani">Kathal_Biryani</option>
          <option value="Boondi_Raita">Boondi_Raita</option>
          <option value="Masroom_Matar">Masroom_Matar</option>
          <option value="Kadi_Gatta">Kadi_Gatta</option>
          <option value="Nuterla_Rice">Nuterla_Rice</option>
         </select><br>
         <label for="">Select Fifth Items</label><br>
         <select name="items5" id="">
          <option value="Kadai_Veg_Rice">Kadai_Veg_Rice</option>
          <option value="Mix_Raita">Mix_Raita</option>
          <option value="Salad">Salad</option>
          <option value="Nutry_Kima">Nutry_Kima</option>
          <option value="Nutry_Matar">Nutry_Matar</option>
         </select><br>         
         <button type="submit" name="submit" class="btn btn-lg btn-success">Submit</button>
    </form>
        </div>
    </div>   
</div>
</div>
<?php
include('footer.php');
?>