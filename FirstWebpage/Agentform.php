<?php
$dbh = @mysqli_connect("localhost","root","") or die("unable to connect<br/>");

		if (mysqli_select_db($dbh, "travelexperts"))
		{
			print("Selected DB: travelexperts<br />");
		}
		else
		{
			print("can't select DB: travelexperts<br />");
			exit();
		}
	if (isset($_POST['submitted'])) {
		$AgtFirstName = $_POST['AgtFirstName'];
		//$AgtMiddleName = $_POST['AgtMiddleName'];
		$AgtLastName = $_POST['AgtLastName'];
		$AgtBusPhone = $_POST['AgtBusPhone'];
		$AgtEmail = $_POST['AgtEmail'];
		$AgtPosition = $_POST['AgtPosition'];
		$AgencyId = $_POST['AgencyId'];

	}
	
	$sql = "INSERT INTO 'AGENTS' ('AgtFirstName', 'AgtLastName', 'AgtBusPhone', 'AgtEmail', 'AgtPosition', 'AgencyId') VALUES ('NULL' '$AgtFirstName', '$AgtLastName', '$AgtBusPhone', '$AgtEmail', '$AgtPosition', '$AgencyId')";
	//$sql = "INSERT INTO AGENTS (AgtFirstName, AgtMiddleName, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId) VALUES ('Null' '.$_POST['$AgtFirstName']."," "._POST['$AgtMiddleName']."," ._POST['$AgtLastName']."," ._POST['$AgtBusPhone']."," ._POST['$AgtEmail']."," ._POST['$AgtPosition']."," ._POST['$AgencyId'])";
	/* if(mysqli_query($dbh,$sql))
	{
		echo 'Not inserted';
	}
	else
	{
		echo 'Inserted';
	}
		print($sql); */
	$outcome = mysqli_query($dbh, $sql);
		if ($outcome)
		{
		   print("Row was inserted");
		}
		else
		{
		   print("Error inserting row");
		} 
		
	function write_to_log($logstring)
	{
      $handle = fopen("log.txt", "a");
	  fwrite($handle, $logstring . "\n");
	  fclose($handle);
	}
	//redirected to index page after 3 seconds
	header("refresh:10; url=form.html");
	
?>
