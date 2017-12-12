<?php
    $con = mysqli_connect("localhost","guest_registration","", "guest_registration") or
       die("Failed to connect to database " . mysqli_error());
       	
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
	
		mysql_query($SQLstring);
		echo "Registration successful";
	}

    mysqli_close($con);
?>
