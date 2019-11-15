<!--
author: J B
date: June 22, 2019
functionality:

-->
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width">
<title>Links</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css" >
</head>
<body>
<?php
	include ("header.php");
	include ("menu.php");
	include ("variables.php");
		echo "<table border =\"1\" style='border-collapse: collapse align: centre; margin-left: 45%; margin-top: 25px'>";
		echo "<tr>\n";
		echo "<th> Destinations</th>";
		echo "<th> Tourism Websites</th>";
		echo "</tr>\n";
	  
	 
	  foreach ($trips as $key => $value)
	  {
		echo "<tr> \n";	
		echo "<td>$key </td>";
		echo "<td><a href=".$value.">$value</a></td>";
		echo "</tr>";
		}
		echo "</table>";
?>
    <br/>
    	

			
<br/>
 
</br> 
<pre>


</pre>
<?php
include ("footer.php");
?>	 

</body>
</html>
