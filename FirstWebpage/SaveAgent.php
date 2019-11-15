<?php
/*$dbh = @mysqli_connect("localhost","root","") or die("unable to connect<br/>");

		if (mysqli_select_db($dbh, "travelexperts"))
		{
			print("Selected DB: travelexperts<br />");
		}
		else
		{
			print("can't select DB: travelexperts<br />");
			exit();
		}*/
	if (isset($_POST['submitted'])) {
		
	include("functions.php");
		
		$form = Array (
			'$AgtFirstName' => $_POST['AgtFirstName'],
			//'$AgtMiddleName' => $_POST['AgtMiddleName'],
			'$AgtLastName' => $_POST['AgtLastName'],
			'$AgtBusPhone' => $_POST['AgtBusPhone'],
			'$AgtEmail' => $_POST['AgtEmail'],
			'$AgtPosition' => $_POST['AgtPosition'],
			'$AgencyId' => $_POST['AgencyId']);
		
		$table = "agents";
		
	$outcome = build_sql_insert($table, $form);
		print($outcome);
	}
	
	
	//$sql = "INSERT INTO 'AGENTS' ('AgtFirstName', 'AgtMiddleName', 'AgtLastName', 'AgtBusPhone', 'AgtEmail', 'AgtPosition', 'AgencyId') VALUES ('NULL' '$AgtFirstName', '$AgtMiddleName', '$AgtLastName', '$AgtBusPhone', '$AgtEmail', '$AgtPosition', '$AgencyId')";
	//$sql = "INSERT INTO AGENTS (AgtFirstName, AgtMiddleName, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId) VALUES ('Null' '.$_POST['$AgtFirstName']."," "._POST['$AgtMiddleName']."," ._POST['$AgtLastName']."," ._POST['$AgtBusPhone']."," ._POST['$AgtEmail']."," ._POST['$AgtPosition']."," ._POST['$AgencyId'])";

	 
	/*	
	function write_to_log($logstring)
	{
      $handle = fopen("log.txt", "a");
	  fwrite($handle, $logstring . "\n");
	  fclose($handle);
	} */
	//redirected to index page after 3 seconds
	//header("refresh:10; url=form.html");
	
?>
