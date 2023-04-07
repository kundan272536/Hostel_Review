<?php
session_start();
header('Location:login.php');
$con=mysqli_connect('localhost','root');
if($con){
    echo "Connection successfully";
}
else{
    echo "Connection Failed";
}
mysqli_select_db($con,'hostel_review');
$name=$_POST['user'];
$pass=$_POST['password'];
$quer="select * from signin where name='$name' && password='$pass'";
$result=mysqli_query($con,$quer);
$num=mysqli_num_rows($result);
if($num==1){
    echo "Duplicates data";
}
else{
    $qy="INSERT INTO signin(name,password) VALUE('$name','$pass')";
    mysqli_query($con,$qy);
}
?>
