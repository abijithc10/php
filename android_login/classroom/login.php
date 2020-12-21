<?php
include("db.php");


$data = array();


if(isset($_POST['username']) && isset($_POST['password']))
{
	$user_name  = mysqli_real_escape_string($conn, $_POST['username']);
	$password   = mysqli_real_escape_string($conn, $_POST['password']);



	$login_query = mysqli_query($conn, "select * from login where username='$user_name' and password='$password'");
	
	if(mysqli_num_rows($login_query) > 0)
	{
		$row_data = mysqli_fetch_assoc($login_query);
		$user_data=array('id' => $row_data['login_id'],'roll' => $row_data['roll']);
		$data['success'] = 1;
		$data['message'] = "Logging!";
		$data['data']=$user_data;
		echo json_encode($data);
	}
	else
	{
		$data['success'] = 0;
		$data['message'] = "Invalid username or password!";
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