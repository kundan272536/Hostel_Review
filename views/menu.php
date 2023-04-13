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
        <label for="">Select the Meal</label><br>
        <select name="meal" id="">
            <option value="breakfast">Breakfast</option>
            <option value="lunch">Lunch</option>
            <option value="snacks">Snacks</option>
            <option value="dinner">Dinner</option>
        </select>
    </form>
</div>
</div>

<?php
include('footer.php');
?>