<?php
session_start();
$con=mysqli_connect('localhost','root');
// if($con){
//     echo "Connection successfully";
// }
// else{
//     echo "Connection Failed";
// }
mysqli_select_db($con,'hostel_review');
$name=$_POST['user'];
$pass=$_POST['password'];
$first_character=substr($name,0,1);
if($first_character=='S'||'s'){
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
else if($first_character=='E'||'e'){
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
else{
    echo"<scripts>'You are not the right person'</scripts>";
}
?>