<?php 
require_once('db.php');

if(isset($_POST['sub'])){
$name=$_POST['name'];
$pass=$_POST['pass'];
$name=stripslashes($name);
$pass=stripslashes($pass);

$result=mysqli_query($conn,"select * from login where username='".$name."' and password='".$pass."'");
$row=mysqli_fetch_array($result);
if($row > 0){
    header("Location:home.php");
}
else{
    echo "invalid";   
}
}

else{
    echo "error";
}

?>