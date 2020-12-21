<?php
$conn=mysqli_connect('localhost','root','','android_login');


$data = array();
if(isset($_POST['user_id'])){

    $id=$_POST['user_id'];

    $login=mysqli_query($conn,"select * from registration where id='$id'");
	$row_data=mysqli_fetch_array($login);
    $user_data = array('id' => $row_data['id'],'name' => $row_data['name'],'email' => $row_data['email']);
   if(mysqli_num_rows($login) > 0){
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