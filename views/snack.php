<?php
include("header.php");
include('connection.php');
if(isset($_POST['submit'])){
    $items1=$_POST['items1'];
    $items2=$_POST['items2'];
    $items3=$_POST['items3'];
    $items4=$_POST['items4'];
    $query="INSERT INTO snacks VALUE('','$items1','$items2','$items3','$items4')";
    mysqli_query($con,$query);
    echo "<script>alert('Welcome to Main Course Page');</script>";
    header('Location:dinner.php');
}
mysqli_close($con);
?>
<style>
    #menu{
        position: absolute;
        margin-top:50px;

        top: 15%;
        left: 35%;
       background-color: #B2A4FF;
       text-align: left;
        height: 650px;
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
    <img src="images/snacks.jpg" alt="" height="0%" width="100%">
</div>
<div id="menu" data-aos="fade-right">
<h1>Suggest the Mess Menu</h1>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="snacks">
        <form action="" method="post">
            <div class="menu-heading">
                <marquee behavior="" direction="">
                <h3>Select The Snack Menu</h3>
                </marquee>
            </div>
        <label for="">Select First Items</label><br>
         <select name="items1" id="">
          <option value="Biscuit_Tea">Biscuit_Tea</option>
          <option value="Veg_Petties_Tea">Veg_Petties_Tea</option>
          <option value="Mix_Pakoda_Tea">Mix_Pakoda_Tea</option>
          <option value="Chips_Tea">Chips_Tea</option>
          <option value="Sweet_Roll_Tea">Sweet_Roll_Tea</option>
         </select><br>
         <label for="">Select Second Items</label><br>
         <select name="items2" id="">
          <option value="Rusk_Tea">Rusk_Tea</option>
          <option value="Namak_Pare_tea">Namak_Pare_tea</option>
          <option value="Shakkar_Pare_Tea">Shakkar_Pare_Tea</option>
          <option value="Mathhi_Tea">Mathhi_Tea</option>
          <option value="Namkeen_Tea">Namkeen_Tea</option>
         </select><br>
         <label for="">Select Third Items</label><br>
         <select name="items3" id="">
          <option value="Danish_Bun_Tea">Danish_Bun_Tea</option>
          <option value="Bread_Pakoda_Tea">Bread_Pakoda_Tea</option>
          <option value="Samosa_Tea">Samosa_Tea</option>
          <option value="Namak_Pare_Tea">Namak_Pare_Tea</option>
          <option value="Chips_Tea">Chips_Tea</option>
         </select><br>
         <label for="">Select Fourth Items</label><br>
         <select name="items4" id="">
          <option value="Samosa_Tea">Samosa_Tea</option>
          <option value="Namak_Pare_Tea">Namak_Pare_Tea</option>
          <option value="Bread_Pakoda_Tea">Bread_Pakoda_Tea</option>
          <option value="Danish_Bun_Tea">Danish_Bun_Tea</option>
          <option value="Namkeen_Tea">Namkeen_Tea</option>
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