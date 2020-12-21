<?php 
require_once("db.php");

if(isset($_POST['class']))
{
    $class  = mysqli_real_escape_string($conn, $_POST['class']);
    $subject=mysqli_real_escape_string($conn,$_POST['subject']);
    $description=mysqli_real_escape_string($conn,$_POST['desc']);
    $link=mysqli_real_escape_string($conn,$_POST['link']);


$ins=mysqli_query($conn,"insert into onlineclass(online_cname,subject_id,description,link) VALUES('$class','$subject','$description','$link')");



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