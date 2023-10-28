<?php
include("a_header.php");
include("../connection.php");
$id=$_GET['id'];
?>
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
                        <option value="<?php echo $row['day']?>">Sunday</option>
                        <option value="<?php echo $row['day']?>">Monday</option>
                        <option value="<?php echo $row['day']?>">Tuesday</option>
                        <option value="<?php echo $row['day']?>">Wednesday</option>
                        <option value="<?php echo $row['day']?>">Thursday</option>
                        <option value="<?php echo $row['day']?>">Friday</option>
                        <option value="<?php echo $row['day']?>">Saturday</option>
                    </select>
                    </td>  
                    <td><input type="date" value="<?php echo $row['date']; ?>" name="date" required></td>
                    <td><input type="text" value="<?php echo $row['breakfast']; ?>" name="breakfast" required></td>
                    <td><input type="text" value="<?php echo $row['lunch']; ?>" name="lunch" required></td>
                    <td><input type="text" value="<?php echo $row['snacks']; ?>" name="snacks" required></td>
                    <td><input type="text" value="<?php echo $row['dinner']; ?>" name="dinner" required></td>
                    <td><button type="submit" name="submit" class="btn btn-md btn-success">ADD</button></td>
                </form>
            </tr> 
          </table>
<?php
include("a_footer.php");
?>