<?php
include("header.php");
?>
<style>
    #menu{
        background-image: url(images/dinner.jpg);
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
    }
</style>
<div id="menu">
<h1>Suggest the Mess Menu</h1>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="dinner">
        <form action="" method="post">
        <h3>Select The Break Fast Menu</h3>
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
          <option value="Cornflakes_milk">Cornflakes_milk</option>
          <option value="Bread_Jam_Butter_Milk">Bread_Jam_Butter_Milk</option>
          <option value="Daliya_Banana_Bread_Jam">Daliya_Banana_Bread_Jam</option>
         </select><br> 
         <button type="submit" name="submit" class="btn btn-lg btn-primary">Submit</button>
    </form>
        </div>
    </div>
</div>
</div>
<?php
include("footer.php");
?>