<?php
session_start();
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
$q="select * from signin where name='$name' && password='$pass'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['username']=$name;
header('Location:home.php');
}
else{
    header('Location:signin.php');
}
?>