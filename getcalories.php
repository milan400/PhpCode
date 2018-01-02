<?php

require 'init.php';

$type = $_GET['item_type'];

if($type=='fruit')
{
	$sql = "select * from fruit";
	$response = array();
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	{
		array_push($response, array('name'=>$row['name'],'calories'=>$row['calories'],
		'image_path'=>$row['image_path']));

	}

	echo json_encode($response);
}
else if($type=='vegetable')
{
	$sql = "select * from vegetable";
	$response = array();
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	{
		array_push($response, array('name'=>$row['name'],'calories'=>$row['calories'],
			'image_path'=>$row['image_path']));

	}

	echo json_encode($response);
	
}
mysqli_close($con);

?>