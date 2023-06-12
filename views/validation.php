<?php
session_start();
include('connection.php');
$name=$_POST['user'];
$password=$_POST['password'];
$first_character=substr($name,0,1);
if($first_character=='S'){
    $qy="SELECT  * FROM signin WHERE name='$name'";
    $result=mysqli_query($con,$qy);
    $num=mysqli_num_rows($result);
    if($num>0){
        $row=mysqli_fetch_assoc($result);
        $verify=password_verify($password,$row['password']);
        if($verify==1){
            $_SESSION['username']=$name;
            header('Location:home.php');
        }
        else{
            header('Location:signin.php');
        }
    }
   
}
elseif($first_character=='E'){
    $qy="SELECT  * FROM esignin WHERE name='$name'";
    $result=mysqli_query($con,$qy);
    $num=mysqli_num_rows($result);
    if($num>0){
        $row=mysqli_fetch_assoc($result);
        $verify=password_verify($password,$row['password']);
        if($verify==1){
            $_SESSION['username']=$name;
            header('Location:Employee/e_home.php');
        }
        else{
            header('Location:signin.php');
           }
    }
    
}
elseif($first_character=='A'){
    $qy="SELECT  * FROM asignin WHERE name='$name'";
    $result=mysqli_query($con,$qy);
    $num=mysqli_num_rows($result);
    if($num>0){
        $row=mysqli_fetch_assoc($result);
        $verify=password_verify($password,$row['password']);
        if($verify==1){
            $_SESSION['username']=$name;
            header('Location:Admin/a_home.php');
        }
        else{
            header('Location:signin.php');
           }
    }
    
}
else{
    echo"<scripts>'You are not the right person'</scripts>";
}
?>