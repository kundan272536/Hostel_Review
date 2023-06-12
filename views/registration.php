<?php
session_start();
include('connection.php');
header('Location:login.php');
$name=$_POST['user'];
$pass=$_POST['password'];
$encpass=password_hash($pass,PASSWORD_DEFAULT);
$first_character=substr($name,0,1);
if($first_character=="S"){
    $quer="SELECT * FROM signin WHERE name='$name' && password='$pass'";
    $result=mysqli_query($con,$quer);
    $num=mysqli_num_rows($result);
    if($num>0){
        echo "Duplicates data";
    }
    else{
        $qy="INSERT INTO signin(name,password) VALUE('$name','$encpass')";
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
        $qy="INSERT INTO esignin(name,password) VALUE('$name','$encpass')";
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
        $qy="INSERT INTO asignin(name,password) VALUE('$name','$encpass')";
        mysqli_query($con,$qy);
    }
}
else{
    echo "<script>alert('You are not the right person');</script>";   
}

?>
