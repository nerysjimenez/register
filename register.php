<?php
    $con = mysql_connect("localhost","guest_registration","", "guest_registration") or
       die("Failed to connect to database " . mysql_error());
       	
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$id = $_POST["id"];
	$comments = $_POST["comments"];
	$title = $_POST["title"];
	$sex = $_POST["sex"];
	
	$sql = "SELECT * FROM guest_registration WHERE personal_id LIKE '" . $id . "';";
	
	if($result = mysql_query($sql) && mysql_num_rows($result) > 0)
		echo "Guest already exist";
	else
	{
		$SQLstring = "INSERT INTO guest_registration VALUES(" .
              $id . ",'" . $title . "','" . $fname .
              "'," . $lname . ",'" . $sex . ",'" . $comments .
              "');";  
	
		if($result = mysql_query($SQLstring) && mysql_num_rows($result) > 0)
			echo "Registration successful";
		else 
			echo "There was an error inserting the data";
	}

    mysql_close($con);
?>
