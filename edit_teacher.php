<?php 
require_once('db.php');
if(isset($_GET['getId'])){
$id=$_GET['getId'];
$result=mysqli_query($conn,"select * from teacher join login where teacher.login_id='".$id."' and login.login_id='".$id."'");
while($row=mysqli_fetch_array($result)){
    $techer_id=$row['teacher_id'];
    $login_id=$row['login_id'];
    $name=$row['name'];
    $mobile=$row['mobile'];
    $email=$row['email'];
    $pass=$row['password'];
    $uname=$row['username'];
?>
<!DOCTYPE html>
<html lang="en">
<!-- register24:03-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>REGISTER TEACHER</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<?php include "side/notification.php"; ?>

<?php include "side/sidebar.php"; ?>
    <div class="main-wrapper  account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form action="update_teacher.php?ids=<?php echo $id ?>" method="POST" class="form-signin">
						<div class="account-logo">
                            <a href="index-2.html"><img src="" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" onclick="clearmsg('sp1')" value="<?php echo $name; ?>" name="name" id="t_name" onclick="clearmsg('sp1')">
                            <span id="sp1" style="color: brown;"></span><br>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" onclick="clearmsg('sp2')" value="<?php echo $uname ?>" name="username" id="t_uname">
                            <span id="sp2" style="color: brown;"></span><br>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" onclick="clearmsg('sp3')" value="<?php echo $pass ?>" name="pass" id="t_pass">
                            <span id="sp3" style="color: brown;"></span><br>
                        </div>
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="email" class="form-control" onclick="clearmsg('sp4')" value="<?php echo $email; ?>" name="email" id="t_email">
                            <span id="sp4" style="color: brown;"></span><br>
                        </div>  
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" onclick="clearmsg('sp5')" value="<?php echo $mobile; ?>" name="mobile" id="t_mobile">
                            <span id="sp5" style="color: brown;"></span><br>
                        </div>
                          <div class="form-group checkbox">
                            <label>
                                <input type="checkbox">  i confirm
                            </label>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit" name="sub" onclick="return validation()">REGISTER</button>
                        </div>
                  
                    </form>
<?php }  ?>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
<script>

function validation(){
    var name1=document.getElementById('t_name').value.trim();
    var name2=document.getElementById('t_uname').value.trim();
    var name3=document.getElementById('t_pass').value.trim();
    var name4=document.getElementById('t_email').value.trim();
    var name5=document.getElementById('t_mobile').value.trim();
    
    if(name1==""){
        document.getElementById('sp1').innerHTML="Name Required";
            return false;
            if(name1.length <=2){
                    document.getElementById('sp1').innerHTML="should contain 2 letters";
                    return false;
                }
            if(!isNaN(name1)){
                document.getElementById('sp1').innerHTML="Number not allowed";
                return false;
            }}
           
    
    if(name2==""){
        document.getElementById('sp2').innerHTML="Name Required";
            return false;
            }
            if(name1.length <=2){
                    document.getElementById('sp2').innerHTML="should contain 2 letters";
                    return false;
                }
            if(!isNaN(name2)){
                document.getElementById('sp2').innerHTML="Number not allowed";
                return false;
    }
    if(name3==""){
        document.getElementById('sp3').innerHTML="Password Required";
            return false;
            }
            if (name3.match(/[0-9]/g) && name3.match( 
                        /[^a-zA-Z\d]/g) && name3.length >= 8) {
                    return true; 
            }
            else {
            document.getElementById('sp3').innerHTML="enter strong pass";
            return false;
    }
    if(name4==""){
            document.getElementById('sp4').innerHTML="Email Required";
            return false;
            }
            if((name4.indexOf('@'))<=0){
                document.getElementById('sp4').innerHTML="@ not found";
                return false;
            }
            if((name4.charAt(name4.length-4)!='.') && (name4.charAt(name4.length-3)!='.'))
            {
                document.getElementById('sp4').innerHTML="Invalid";
                return false;
            }
     if(name5==""){
            document.getElementById('sp5').innerHTML="Input Phone";
            return false;
            }
            if((name5.length) != 10){
            document.getElementById('sp5').innerHTML="INVALID";
            return false;
            }
            if(isNaN(name3)){
                document.getElementById('sp5').innerHTML="CHARECTER NOT ALLOWED";
                return false;
            } 
}

    function clearmsg(x)
    {
    document.getElementById(x).innerHTML="";
    }



function trim(s)
    {
    return s.replace(/^\s+|\s+$/, '');
    }


</script>
<!-- register24:03-->
</html>
<?php
}
elseif(isset($_GET['delId'])){
    $id1=$_GET['delId'];
    $table=mysqli_query($conn,"delete from login where login_id='".$id1."'");
    $table=mysqli_query($conn,"delete from teacher where login_id='".$id1."'");
    echo '<script>alert("Deleted");
    window.location="view_teacher.php";</script>';

    
}
else{
    echo "error";
}


?>


