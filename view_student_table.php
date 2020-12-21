<?php require_once("db.php");
$result=mysqli_query($conn,"select * from student");

?>

<!DOCTYPE html>
<html lang="en">


<!-- tables-datatables23:59-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
      
      <?php include "side/sidebar.php"; ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Online Class details</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                        
                                
								<div class="table-responsive">
									<table class="datatable table table-stripped ">
                                    <thead>
                                       
                                        <tr>
                                            <th>Student id</th>
                                            <th>Login_id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Address</th>
                                            <th>Class</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php while($row=mysqli_fetch_array($result)){
                                            $stud_id=$row['student_id'];
                                            $name=$row['name'];
                                            $email=$row['email'];
                                            $mobile=$row['mobile'];
                                            $login_id=$row['login_id'];
                                            $address=$row['address'];
                                            $class=$row['class'];
                                            
                                                ?>
                                       
                                            <td><?php echo $stud_id;?></td>
                                            <td><?php echo $login_id;?></td>
                                            <td><?php echo $name;?></td>
                                            <td><?php echo $email;?></td>
                                            <td><?php echo $mobile;?></td>
                                        
                                            <td><?php echo $address;?></td>
                                            <td><?php echo $class;?></td>
                                        </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "side/notification.php"; ?>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- tables-datatables23:59-->
</html>