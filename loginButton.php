<?php 
	require_once('connection.php');

	if(isset($_POST['logIn']))
	{
		$emailID = $_POST['emailID'];
		$passwordID = $_POST['passwordID'];

		$sql = "SELECT Email FROM users WHERE email = :emailID";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':emailID', $emailID);
   		$result=$stmt->execute();
   		$result = $stmt->fetch(PDO::FETCH_ASSOC);
   		if($result === false)
   		{
   			echo "You are not in the system";
   		}
   		else
   		{
   			echo"Done deal";
   			//header('Location: .php');
   		}

	}

?>