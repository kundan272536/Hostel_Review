<?php
include('header.php');
?>
<style>
    body{
        background-image: url(images/food-items-2.avif);
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }
</style>
<div id="menu">
<h1>Suggest the Mess Menu</h1>
<div>
    <form action="">
        <h5>Select The Break Fast Menu</h5>
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
         <button type="submit" class="btn btn-lg btn-primary">Submit</button>
    </form>
</div>
</div>

<?php
include('footer.php');
?>