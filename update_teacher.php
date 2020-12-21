<?php 
require_once("db.php");
if(isset($_GET['ids'])){
   $id=$_GET['ids'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $uname=$_POST['username'];

    mysqli_query($conn,"update login set username='".$uname."',password='".$pass."' where login_id='".$id."'");
    mysqli_query($conn,"update teacher set name='".$name."',mobile='".$mobile."',email='".$email."' where login_id='".$id."'");
    echo '<script>alert("Updated");
    window.location="view_teacher.php";</script>';

}
else{
    echo "error";
}
?>
