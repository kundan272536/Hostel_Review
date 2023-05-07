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
        background-image: url(images/snacks1.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }
    h1{
        font-family: fantasy;
        color: #2192FF;
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
        font-weight: bold;
        margin-bottom: 10px;
     color: #42EADDFF;
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
         <button type="submit" name="submit" class="btn btn-lg btn-success">Submit</button>
    </form>
        </div>
    </div>
</div>
</div>
<?php
include("footer.php");
?>