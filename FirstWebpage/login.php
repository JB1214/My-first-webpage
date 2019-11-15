<!--
author: J B
date: June 22, 2019
functionality:
 
-->
<!DOCTYPE html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width">
<title>Login Page</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css" >
</head>
      
<style>

         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
<body>
<?php
include ("header.php");
include ("menu.php");
?>
    <br/>
	<br/>
<?php
  	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
	  
      $textfile = fopen("userlogins.txt", "r") or die("Unable to open file!");
	  $originalUser=false;
      $datauser["username"] = $_POST['username'];
      $datauser["password"] = $_POST['password']; 
		$user = Array();
		$word = Array();
		while(!feof($textfile)) {
				
		$storestring =  fgets($textfile); 
		//echo $storestring;
			
		$newdata = explode(",",$storestring);
			
								
		array_push($user,$newdata[0]);
		array_push($word,$newdata[1]);
		}	
		$hashtable = Array_combine($user,$word);
		//	 print_r($hashtable);
		
		fclose($textfile);
	
	
		foreach($hashtable as $key=>$value){

			if($key==$datauser["username"] && rtrim($value)==$datauser["password"]) {	

				$originalUser=true;
				
			}
		}
	   
		 if ($originalUser){
			 session_start();

			 $_SESSION['username'] = $datauser["username"];
			
			 // use localhost:8080 because it did not work without it 
			 header("Location: http://localhost:8080/2019Course/Assign12/register.php");
			 exit;
		 } 
		 elseif($originalUser==false) {
		 echo "Incorrect Username or Password!!!";
		 }
	}
   
?>
	

      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :<br/></label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>
	<pre>
	
	
	
	</pre>
	<?php
		include ("footer.php");
	?>	 
   </body>
</html>