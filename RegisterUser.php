<?php

require_once 'DBOperations.php';
$responce = array();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if(isset($_POST['first_name']) and isset($_POST['last_name']) and isset($_POST['contact_num']) and
       isset($_POST['email']) and isset($_POST['username']) and isset($_POST['password']))
	   {
			$db = new DBOperations();
			
			if($db->createUser($_POST['first_name'],$_POST['last_name'],$_POST['contact_num'],
							   $_POST['email'],$_POST['username'],$_POST['password']))
			{
				$response['error'] = false;
				$response['message'] = "User registration unsuccessful.";
			}
			else
			{
				$response['error'] = true;
				$response['message'] = "An error has occured. Please retry.";
			}	
	   }
	   else
	   {
			$response['error'] = true;
			$response['message'] = "Missing values. Please complete all fields.";
	   }
}
else
{
	$response['error'] = true;
	$response['message'] = "Request is invalid";
}

echo json_encode($response);