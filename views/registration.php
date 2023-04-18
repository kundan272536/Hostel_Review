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
$first_character=substr($name,0,1);
if($first_character=="S"){
    $quer="SELECT * FROM signin WHERE name='$name' && password='$pass'";
    $result=mysqli_query($con,$quer);
    $num=mysqli_num_rows($result);
    if($num>0){
        echo "Duplicates data";
    }
    else{
        $qy="INSERT INTO signin(name,password) VALUE('$name','$pass')";
        mysqli_query($con,$qy);
    }
}
elseif($first_character=="E"){
    $quer="SELECT * FROM esignin WHERE name='$name' && password='$pass'";
    $result=mysqli_query($con,$quer);
    $num=mysqli_num_rows($result);
    if($num>0){
        echo "Duplicates data";
    }
    else{
        $qy="INSERT INTO esignin(name,password) VALUE('$name','$pass')";
        mysqli_query($con,$qy);
    }
}
elseif($first_character=="A"){
    $quer="SELECT * FROM asignin WHERE name='$name' && password='$pass'";
    $result=mysqli_query($con,$quer);
    $num=mysqli_num_rows($result);
    if($num>0){
        echo "Duplicates data";
    }
    else{
        $qy="INSERT INTO asignin(name,password) VALUE('$name','$pass')";
        mysqli_query($con,$qy);
    }
}
else{
    echo "<script>alert('You are not the right person');</script>";   
}

?>
