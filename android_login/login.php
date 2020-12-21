<?php
$conn=mysqli_connect('localhost','root','','android_login');


$data = array();

if(isset($_POST['username']) && isset($_POST['password']))
{
	$user_name  = mysqli_real_escape_string($conn, $_POST['username']);
	$password   = mysqli_real_escape_string($conn, $_POST['password']);

	$login_query = mysqli_query($conn, "select * from registration where name='$user_name' and password='$password'");

	if(mysqli_num_rows($login_query) > 0)
	{
		$row_data = mysqli_fetch_assoc($login_query);

		$user_data = array('id' => $row_data['id'],'name' => $row_data['name']);

		$data['success'] = 1;
		$data['message'] = "Login success!";
		$data['data']=$user_data;
		$data['name']=$user_data;
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