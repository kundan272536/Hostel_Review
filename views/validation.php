<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hostel_review');
$name=$_POST['user'];
$pass=$_POST['password'];
$first_character=substr($name,0,1);
if($first_character=='S'){
    $qy="SELECT  * FROM signin WHERE name='$name' && password='$pass'";
    $result=mysqli_query($con,$qy);
    $num=mysqli_num_rows($result);
    if($num==1){
        $_SESSION['username']=$name;
    header('Location:home.php');
    }
    else{
        header('Location:signin.php');
    }
}
elseif($first_character=='E'){
    $qy="SELECT  * FROM esignin WHERE name='$name' && password='$pass'";
    $result=mysqli_query($con,$qy);
    $num=mysqli_num_rows($result);
    if($num==1){
    $_SESSION['username']=$name;
    header('Location:Employee/e_home.php');
    }
    else{
    header('Location:signin.php');
   }
}
elseif($first_character=='A'){
    $qy="SELECT  * FROM asignin WHERE name='$name' && password='$pass'";
    $result=mysqli_query($con,$qy);
    $num=mysqli_num_rows($result);
    if($num==1){
    $_SESSION['username']=$name;
    header('Location:Admin/a_home.php');
    }
    else{
    header('Location:signin.php');
   }
}
else{
    echo"<scripts>'You are not the right person'</scripts>";
}
?>