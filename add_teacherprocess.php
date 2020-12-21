<?php require_once('db.php');

if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $uname=$_POST['username'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $result=mysqli_query($conn,"insert into login(username,password,roll) values('$uname','$pass','2')");
    $last=mysqli_insert_id($conn);

    if($table=mysqli_query($conn,"insert into teacher(name,email,mobile,login_id) values('$name','$email','$mobile','$last')")
    ){
       echo '<script>alert("Registered");
       window.location="add_teacher.php";</script>';
    }
    else{
        echo "error";
    }
}



?>