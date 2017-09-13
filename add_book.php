<?php
require_once 'DBOperations.php';
$responce = array();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if(isset($_POST['textbook_title']) and isset($_POST['textbook_edition']) and isset($_POST['textbook_isbn']) and
       isset($_POST['textbook_price']) and isset($_POST['textbook_comments']) ))
	   {
			$db = new DBOperations();
			
			if($db->createUser($_POST['textbook_title'],$_POST['textbook_edition'],$_POST['textbook_isbn'],
							   $_POST['textbook_price'],$_POST['textbook_comments']))
			{
				$result['error'] = false;
				$result['message'] = "Textbook added .";
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

//add int dbOperations
function createUser($textbook_title,$textbook_edition,$textbook_isbn, $textbook_price,$textbook_comments)
	{
		
		$qry = $this->conn->prepare("INSERT INTO 'textbook'('TEXTBOOK_TITLE','TEXTBOOK_EDITION','TEXTBOOK_ISBN','TEXTBOOK_PRICE',
														'TEXTBOOK_COMMENTS')
									VALUES(NULL,?,?,?,?,?);");
		$qry->bind_param("ssssss",$textbook_title,$textbook_edition,$textbook_isbn,$textbook_price,$textbook_comments);
		
		if($qry->execute())
			return true;
			
		else
			return false;
	}
?>