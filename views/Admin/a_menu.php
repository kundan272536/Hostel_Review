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
<div class="menu">
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
            <td>Add</td>
          </tr>
            <tr>
                <form action="" method="post">
                    <td><input type="day" name="day" required></td>
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
        <div class="mess-menu">
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
                                        <form action="" method="post">
                                        <button type="submit" name="delete" >Remove</button>
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