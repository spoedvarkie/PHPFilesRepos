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
			$result['message'] = "Book advert found";
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
echo json_encode($response);

//place in DBOperations 
function getAdvert($textBookID)
	{
		// get book details
		$qryTxtBook = $this->conn->prepare("SELECT 'TEXTBOOK_TITLE','TEXTBOOK_EDITION','TEXTBOOK_PRICE' 
											FROM 'textbook' 
											WHERE 'TEXTBOOK_ID'=?;");
		$qryTxtBook->bind_param($textBookID);
		
		while ($Bookrows = mysql_fetch_array($qryTxtBook))
		{
			$title = $Bookrows['TEXTBOOK_TITLE'];
			$ed = $Bookrows['TEXTBOOK_EDITION'];
			$price = $Bookrows['TEXTBOOK_PRICE'];
			
			
			echo "$TEXTBOOK_TITLE$<br>$TEXTBOOK_EDITION<br>$TEXTBOOK_PRICE<br><br>";	

			
			//get details of author that wrote the book
			$qryAuthor = $this->conn->prepare("SELECT 'AUTHOR_INITIALS','AUTHOR_L_NAME'
											FROM 'author' 
											WHERE 'AUTHOR_ID'=?;");
			$qryUser->bind_param($textBookID);
			
			$Authorrows = mysql_fetch_array($qryAuthor);
			
			$author_initial =$Authorrows['AUTHOR_INITIALS'];
			$author_l_name = $Authorrows['AUTHOR_L_NAME'];
			
				
			echo "$AUTHOR_INITIALS<br>$AUTHOR_L_NAME<br><br>";								
		}			
	}

?>

