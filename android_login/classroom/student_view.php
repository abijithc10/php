<?php
require_once("db.php");
$data=array();
if(!isset($_POST['name'])){
$view=mysqli_query($conn,"select * from student");
$row_data=mysqli_fetch_array($view);
    $user_data = array('id' => $row_data['student_id'],'name' => $row_data['name'],
    'mobile'=>$row_data['mobile'],'email'=>$row_data['email'],
    'address'=>$row_data['address']);
    $data['name']=$user_data;
    echo json_encode($data);
}
else
{
$data['success'] = 0;
$data['message'] = "No Access!";
echo json_encode($data);
}
?>