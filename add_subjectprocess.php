<?php
require_once("db.php");

if(isset($_POST['sub'])){

    $teacher=$_POST['s_teacher'];
    $class=$_POST['s_class'];
    $sname=$_POST['s_name'];
    $scode=$_POST['s_code'];
    
    if($result=mysqli_query($conn,"insert into subject(teacher_id,class,s_name,code) values('$teacher','$class','$sname','$scode')")){
        echo "success";
    }
    else{
        echo "something went wrong";
    }
}

?>