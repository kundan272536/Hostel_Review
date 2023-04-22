<?php
include('header.php');
$con=mysqli_connect('localhost','root','','hostel_review');
if(isset($_POST['submit'])){
    $items1=$_POST['items1'];
    $items2=$_POST['items2'];
    $items3=$_POST['items3'];
    $items4=$_POST['items4'];
    $items5=$_POST['items5'];
    $query="INSERT INTO breakfast VALUE('','$items1','$items2','$items3','$items4','$items5')";
    mysqli_query($con,$query);
    echo "<script>alert('Welcome to Main Course Page');</script>";
    header('Location:lunch.php');
}
mysqli_close($con);
?>
<style>
    
    #menu{
        background-image: url(images/breakfast11.jpg);
        backdrop-filter: blur(5px);
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }
    h1{
        font-family: fantasy;
        color: #F0FF42;
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
        margin-bottom: 10px;
        color: white;
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
<div class="row breakfast">
    <div class="col-lg-12 col-md-12 col-sm-12">
       <form action="" method="post">
       <div class="menu-heading">
        <marquee behavior="" direction=""> 
            <h3>Select The Break Fast Menu</h3> 
        </marquee>
       </div>
        <label for="">Select First Items</label><br>
         <select name="items1" id="">
          <option value="Plain_Paratha">Plain_Paratha</option>
          <option value="Stuffed_Paratha">Stuffed_Paratha</option>
          <option value="Cornflakes_milk">Cornflakes_milk</option>
          <option value="Bread_Jam_Butter">Bread_Jam_Butter</option>
          <option value="Daliya_Boiled_Egg_Bread">Daliya_Boiled_Egg_Bread</option>
         </select><br>
         <label for="">Select Second Items</label><br>
         <select name="items2" id="">
          <option value="Puri_Sabji">Puri_Sabji</option>
          <option value="Chhole_Bhature">Chhole_Bhature</option>
          <option value="Cornflakes_milk">Cornflakes_milk</option>
          <option value="Bread_Jam_Butter_Upma">Bread_Jam_Butter_Upma</option>
          <option value="Daliya_Boiled_Egg_Bread">Daliya_Boiled_Egg_Bread</option>
         </select><br>
         <label for="">Select Third Items</label><br>
         <select name="items3" id="">
          <option value="Pav_Bhaji_Milk">Pav_Bhaji_Milk</option>
          <option value="Chhole_Kulchha">Chhole_Kulchha</option>
          <option value="Chhole_Bhature">Chhole_Bhature</option>
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
          <option value="Cornflakes_milk">Poha_Milk</option>
          <option value="Bread_Jam_Butter_Milk">Bread_Jam_Butter_Milk</option>
          <option value="Daliya_Banana_Bread_Jam">Daliya_Banana_Bread_Jam</option>
         </select><br>  
         <button type="submit" name="submit" class="btn btn-lg btn-success">Submit</button>
    </form>
    </div>
    
</div>
</div>

<?php
include('footer.php');
?>