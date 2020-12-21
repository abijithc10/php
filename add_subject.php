<?php require_once('db.php');

$result=mysqli_query($conn,"select * from teacher");


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
                    <form action="add_subjectprocess.php" method="POST" class="form-signin">
						<div class="account-logo">
                            <a href="index-2.html"><img src="" alt=""></a>
                        </div>
                        <div class="form-group">
                        
                                    <label>TEACHER </label>
                        <select  class="form-control" name="s_teacher" onchange="getValue(myselect1)" id="select">
                            <option value disabled selected>*Select Teacher   </option>
                           <?php  
                           if($result){
                                    while($row=mysqli_fetch_array($result)){
                                        $name=$row['name'];
                                        $value=$row['teacher_id'];
                                        echo "<option value='".$value."'>$name<br></option>";
                                    }}
                           ?></select></div>
                                        <div class="form-group">
                        <label>CLASS</label>
                            <select class="form-control" name="s_class" id="subject">
                            <option value disabled selected>Select Subject</option>
                                <option value="KERALA">BSC.CS</option>
                                <option value="KARNATAKA">BCA</option>
                                <option value="TAMILNADU">BBA</option>
                            <span id="sp3" style="color: brown;"></span><br>
                            </select>     </div> 
                       
                           
                        
                        <div class="form-group">
                            <label>SUBJECT NAME</label>
                            <input type="text" class="form-control" name="s_name">
                        </div>
                        
           
                            <div class="form-group">
                            <label>SUBJECT CODE</label>
                            <input type="text" class="form-control" name="s_code">
                            </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit" name="sub">REGISTER</button>
                        </div></div>
                  
                    </form>
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
    function getValue(myselect1){
        var selectedvalue=myselect1.value;
    }





</script>


<!-- register24:03-->
</html>