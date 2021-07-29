<?php 
	session_start();
	require_once('connection.php');
	if(isset($_POST['register']))
	{
		$FnameID = $_POST['FnameID'];
		$LnameID = $_POST['LnameID'];
		$emailID = $_POST['emailID'];
		$passwordID = $_POST['passwordID'];

		$sql = "INSERT INTO users(Fname, Lname, Email, Passwords) VALUES (:FnameID, :LnameID,:emailID, :passwordID)";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':FnameID', $FnameID);
		$stmt->bindValue(':LnameID', $LnameID);
		$stmt->bindValue(':emailID', $emailID);
		$stmt->bindValue(':passwordID', $passwordID);
   		$stmt->execute();
   		if($stmt === false)
   		{
   			echo "You are not in the system";
   		}
   		else
   		{
   			echo"Done deal";
   		}
   	}
?>