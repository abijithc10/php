<?php 
require_once("db.php");

if(isset($_POST['name']))
{
	$name  = mysqli_real_escape_string($conn, $_POST['name']);
    $uname= mysqli_real_escape_string($conn, $_POST['username']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $mobile= mysqli_real_escape_string($conn, $_POST['mobile_no']);
    $address= mysqli_real_escape_string($conn, $_POST['address']);
    $class = mysqli_real_escape_string($conn, $_POST['class']);

	mysqli_query($conn,"insert into login(username,password,roll) VALUES('$uname','$password','3')");

	$login_id = mysqli_insert_id($conn);

	$ins = mysqli_query($conn, "insert into student(login_id,name,email,mobile,address,class) VALUES('$login_id','$name','$email','$mobile','$address','$class')");


	if($ins)
	{
		$data['success'] = 1;
		$data['message'] = "Registration success!";

		echo json_encode($data);
 	}

 	else
 	{
 		$data['success'] = 0;
		$data['message'] = "Error occured while registering!";

		echo json_encode($data);
 	}
}
else
{
	$data['success'] = 0;
	$data['message'] = "No Access!";

	echo json_encode($data);

}

?>