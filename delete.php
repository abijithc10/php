<?php


if(isset($_GET['Del'])){
    $conn=mysqli_connect('localhost','root','','login1');
    $id=$_GET['Del'];
    $result=mysqli_query($conn,"delete from regi where ID='".$id."'");

            if($result){
                header('Location:table.php');
            }
            else{
                echo "SOMETHING WENT WRONG";
}
}
?>