<?php
require_once("db.php");
include "libs/img_upload_resize_crop.php";
$teacher=mysqli_query($conn,"select * from teacher");
$id=$_POST['send_notification'];
$select=mysqli_query($conn,"select * from teacher where name='".$id."'");
$file_data = pathinfo($_FILES['image']['name']);
$your_image = new _image; 
$fileName =  str_replace(" ", "_", $_FILES['image']['name']); 

     
      $your_image->uploadTo = 'images/';
      $upload = $your_image->upload($_FILES['image']);
      $your_image->newPath  = 'images/';
if(isset($_POST['send_notification'])){
    
    if($id=="ALL"){
        while($row=mysqli_fetch_array($teacher)){
            $id1=$row['name'];
            $subject=$_POST['sub'];
            $content=$_POST['content'];
            $link=$_POST['link'];
            mysqli_query($conn,"insert into notification(subject,content,reciver,link) values('$subject','$content','$id1','$link')");
            echo '<script>alert("Send Successfully");
            window.location="add_notification.php";</script>';
        }}
    else{
        while($row1=mysqli_fetch_array($select)){
            $id1=$row1['name'];
            $subject=$_POST['sub'];
            $content=$_POST['content'];
            $link=$_POST['link'];
            mysqli_query($conn,"insert into notification(subject,content,reciver,link,upload_file) values('$subject','$content','$id1','$link','$file_data')");
            echo '<script>alert("Send Successfully");
            window.location="add_notification.php";</script>';
        }
        }
    }

else{
    echo "error";
}



?>