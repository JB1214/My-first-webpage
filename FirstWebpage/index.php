<!--
author: J B
date: June 22, 2019
functionality:
 All pictures were taken by me on my own travels. 
-->
<!DOCTYPE html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width">
<title>Welcome to the Travel Experts</title>
	<!--<link rel="stylesheet" type="text/css" href="html5reset.css" >-->
	<link rel="stylesheet" type="text/css" href="stylesheet.css" >
	
</head>
	
<body>
<?php
include ("header.php");

	function welcome(){
	date_default_timezone_set('America/Denver');
	if(date("H") < 12){
 
     return "<h2 style='color:#c84f2b; display:inline; margin-right:20px'>Good Morning!</h2><img style=' height:35px; width:35px; margin-right:20px' src='Images/morning.png'>";
 
	}else if(date("H") > 11 && date("H") < 18){
 
     return "<h2 style='color:#fbfc90; display:inline''>Good Afternoon!</h2><img style=' height:35px; width:35px' src='Images/afternoon1.png'>";
 
	}else if(date("H") > 17){
 
     return "<h2 style='color: #6f3e1b; display:inline' >Good Evening!</h2> <img style=' height:35px; width:35px' src='Images/evening.png'>";
 
	}
	}
    echo welcome();  
	  
include ("menu.php");?>


  <br/>
 
 <!--content --> 
	<h2 id="travel" style="margin-left: 40%">Travel Destinations</h2>
   
		<script type ="text/javascript">
			var imgArr = ["Images/venice.jpg", "Images/Paris.jpg", "Images/Dominican.JPG", "Images/Banff.JPG"]
			var desArr = ["Venice, Italy: City of Canals", "Paris, France: City of Love", "Punta Cana, DR: gorgeous beaches with many luxury hotels", "Banff, Alberta: situated in the Canadian Rockies"]
			var urlArr = ["https://www.lonelyplanet.com/italy/venice", "https://en.parisinfo.com/", "https://www.fodors.com/world/caribbean/dominican-republic/punta-cana", "https://www.banfflakelouise.com/"]
			document.write("<table id='destinations'>")
			document.write("<tr><th class='page2'>Images</th><th class='page2'>Description</th></tr>")
			for (i = 0; i < imgArr.length; i++) {

		document.write("<tr class='page'>");

		document.write("<td><img class='page' id=" + i + " src='" + imgArr[i] + "'/></td>");

		document.write("<td>" + desArr[i] + "</td>");

		document.write("</tr>");

		document.getElementById(i).addEventListener("click", function () {showDesc(this.id);});
}
		document.write("</table>");

		function showDesc(imgId) {
		var linkPic = urlArr[imgId];

		newWindow = window.open(linkPic);

		setTimeout(function () {newWindow.close(); }, 4000);
		}
			</script>

	
 <br/>
 <br/>
		<?php
include ("footer.php");
?>	 
	</body>
</html>

