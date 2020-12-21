<?php
include('db.php');


if(isset($_POST['user_id'])){

	$id=$_POST['user_id'];
	$login=mysqli_query($conn,"select * from login where login_id='".$id."'");

	$row_data=mysqli_fetch_array($login);
	

	if(mysqli_num_rows($row_data) > 0){

	$user_data = array('id' => $row_data['login_id'],'roll'=>$row_data['roll']);
    $data['success'] = 1;
	$data['message'] = "Auto Logged";
	$data['data']=$user_data;
    echo json_encode($data);
   }

	else
	{
		$data['success'] = 0;
		$data['message'] = "Sign in to continue";
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