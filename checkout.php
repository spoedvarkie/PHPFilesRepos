<?php

require_once 'DBOperations.php';
$responce = array();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if(isset($_POST['textBookID']))
	{
		$db = new DBOperations();
		
		if($db->getAdvert($_POST['textBookID']))
		{
			$result['error'] = false;
			$result['message'] = "Checkout complete";
		}
		else
		{
			$result['error'] = true;
			$result['message'] = "An error has occured. Please retry.";
		}
	}
	else
	{
		$result['error'] = true;
		$result['message'] = "Missing values. Please complete all fields.";
	}
}
else
{
	$result['error'] = true;
	$result['message'] = "Request is invalid";
}
echo json_encode($result);

//place in DBOperations.php
function checkout($textBookID)
	{
		// get book details
		$qryTxtBook = $this->conn->prepare("DELETE FROM 'textbook' 
											WHERE 'TEXTBOOK_ID'=?;");
		$qryTxtBook->bind_param($textBookID);
		
		
	}
?>