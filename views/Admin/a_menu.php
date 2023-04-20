<?php
include("a_header.php");
$con=mysqli_connect('localhost','root','','hostel_review');
if(isset($_POST['submit'])){
    $day=$_POST['day'];
    $date=$_POST['date'];
    $breakfast=$_POST['breakfast'];
    $lunch=$_POST['lunch'];
    $snacks=$_POST['snacks'];
    $dinner=$_POST['dinner'];
    $query="INSERT INTO menu VALUES ('','$day','$date','$breakfast','$lunch','$snacks','$dinner')";
    mysqli_query($con,$query);
}
$retrieve="SELECT * FROM menu";
$result=mysqli_query($con,$retrieve);
mysqli_close($con);
?>
<style>
#update_menu{
    background: rgb(33,210,246);
   background: linear-gradient(90deg, rgba(33,210,246,1) 0%, rgba(33,246,244,0.8156512605042017) 0%, rgba(3,6,6,1) 0%, rgba(245,25,14,1) 0%, rgba(237,233,232,1) 0%, rgba(231,137,142,0.7736344537815126) 0%, rgba(68,147,182,1) 0%, rgba(236,248,250,1) 0%, rgba(199,172,160,1) 0%, rgba(167,247,159,0.7736344537815126) 0%, rgba(163,194,236,1) 0%, rgba(177,209,231,1) 0%, rgba(186,219,242,1) 0%, rgba(234,207,236,1) 0%, rgba(185,218,255,0.5187324929971988) 5%, rgba(232,237,248,1) 49%, rgba(170,215,215,0.5187324929971988) 94%, rgba(215,170,196,0.5187324929971988) 100%); 
}
#mess-menu{
    background: rgb(33,210,246);
    background: linear-gradient(90deg, rgba(33,210,246,1) 0%, rgba(33,246,244,1) 0%, rgba(3,6,6,1) 0%, rgba(245,25,14,1) 0%, rgba(187,239,178,1) 0%, rgba(185,255,252,0.5355392156862745) 7%, rgba(236,248,250,1) 67%, rgba(137,231,227,0.7736344537815126) 97%, rgba(167,247,159,0.7736344537815126) 100%, rgba(68,147,182,1) 100%, rgba(236,163,170,1) 100%);
}
h3{
    font-family: fantasy;
    color: red;
}
</style>
<div class="menu">
    <div id="update_menu">
        <h3>Add The Mess Menu</h3>
    <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Day</td>
            <td>Date</td>
            <td>Breakfast</td>
            <td>Lunch</td>
            <td>Snacks</td>
            <td>Dinner</td>
            <td>Add</td>
          </tr>
            <tr>
                <form action="" method="post">
                    <td>
                    <select name="day" id="">
                        <option value="Sunday">Sunday</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                    </select>
                    </td>  
                    <td><input type="date" name="date" required></td>
                    <td><input type="text" name="breakfast" required></td>
                    <td><input type="text" name="lunch" required></td>
                    <td><input type="text" name="snacks" required></td>
                    <td><input type="text" name="dinner" required></td>
                    <td><button type="submit" name="submit">Add</button></td>
                </form>
            </tr> 
          </table>
          </div>
          </div> 
        </div>
        </div>
    </div>
        <div id="mess-menu">
            <h3>Regular Mess Menu</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="data-fetch">
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>Day</td>
                                    <td>Date</td>
                                    <td>Breakfast</td>
                                    <td>Lunch</td>
                                    <td>Snacks</td>
                                    <td>Dinner</td>
                                    <td>Delete</td>
                                </tr>
                                <tr>
                                    <?php
                                    while($row=mysqli_fetch_assoc($result))
                                    {?>
                                    <td><?php echo $row['day'];?></td>
                                    <td><?php echo $row['date'];?></td>
                                    <td><?php echo $row['breakfast'];?></td>
                                    <td><?php echo $row['lunch'];?></td>
                                    <td><?php echo $row['snacks'];?></td>
                                    <td><?php echo $row['dinner'];?></td>
                                    <td>
                                       <form action="delete.php" method="post">
                                       <button type="submit" name="rem" >Remove</button>
                                       </form>                                     
                                    </td>
                                    </tr>
                                    <?php
                                    }?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php
include("a_footer.php");
?>