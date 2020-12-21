<?php
$conn=mysqli_connect('localhost','root','','android_login');
$data=array();

if(isset($_POST['name']))
{
	$name  = mysqli_real_escape_string($conn, $_POST['name']);

	$password = mysqli_real_escape_string($conn, $_POST['password']); 
	$email=mysqli_real_escape_string($conn,$_POST['email']);

	

	$ins = mysqli_query($conn,"insert into registration(name,password,email) values('$name','$password','$email')");


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