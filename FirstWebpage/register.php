<!--
author: J B
date: June 22, 2019
functionality:

-->
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
       
<script type="text/javascript">

	
   function ValidateForm()                                    
{ 
    var firstname = document.forms["Form1"]["First Name"];  
	var lastname = document.forms["Form1"]["Last Name"];              
    var email = document.forms["Form1"]["email"];    
    var phone = document.forms["Form1"]["Phone"];  
    var province =  document.forms["Form1"]["Province"];  
    var postalcode = document.forms["Form1"]["Postal Code"];  
    var address = document.forms["Form1"]["Address"]; 
	var city = document.forms["Form1"]["City"]; 
   
    if (firstname.value == "")                                  
    { 
        alert("Please enter your first name"); 
        firstname.focus(); 
        return false; 
    } 
	  if (lastname.value == "")                                  
    { 
        alert("Please enter your last name"); 
        lastname.focus(); 
        return false; 
    }
   
    if (address.value == "")                               
    { 
        alert("Please enter your address"); 
        address.focus(); 
        return false; 
    } 
	if (city.value == "")                               
    { 
        alert("Please enter your city"); 
        city.focus(); 
        return false; 
    } 
	 if (province.selectedIndex < 1)                  
    { 
        alert("Please enter your province"); 
        province.focus(); 
        return false; 
    } 
	  if (postalcode.value == "")                        
    { 
        alert("Please enter your postal code"); 
        postalcode.focus(); 
        return false; 
    }
	  if (phone.value == "")                           
    { 
        alert("Please enter your telephone number"); 
        phone.focus(); 
        return false; 
    } 
       
    if (email.value == "")                                   
    { 
        alert("Please enter a valid e-mail address"); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        alert("Please enter a valid e-mail address"); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        alert("Please enter a valid e-mail address"); 
        email.focus(); 
        return false; 
    } 
        
    return true; 
}

	function focusFunc(textId)	{
	if(textId == "fnameT")
		{
		var fnameP = document.getElementById("fname");
		fnameP.innerHTML = "Please enter first name";
		fnameP.style.color = "blue";
		}
		else if(textId == "initial")
		{
		var initialP = document.getElementById("initial1");
		initialP.innerHTML = "Please enter first initial of middle name";
		initialP.style.color = "blue";
		}
		else if(textId == "lnameT")
		{
		var lnameP = document.getElementById("lname");
		lnameP.innerHTML = "Please enter last name";
		lnameP.style.color = "blue";
		}		
		else if(textId == "stradd")
		{
		var straddP = document.getElementById("stradd1");
		straddP.innerHTML = "Please enter street address";
		straddP.style.color = "blue";
		}
		else if(textId == "cities")
		{
		var citiesP = document.getElementById("cities1");
		citiesP.innerHTML = "Please enter city of residence";
		citiesP.style.color = "blue";
		}
		else if(textId == "postal")
		{
		var postalP = document.getElementById("postal1");
		postalP.innerHTML = "Please enter postal code ex. H1H 2H3";
		postalP.style.color = "blue";
		}
		else if(textId == "phone")
		{
		var phoneP = document.getElementById("phone1");
		phoneP.innerHTML = "Please enter daytime phone number";
		phoneP.style.color = "blue";
		}
		else if(textId == "email")
		{
		var emailP = document.getElementById("email1");
		emailP.innerHTML = "Please enter email address";
		emailP.style.color = "blue";
		}
	}
		
		function blurFunc(textId)	{
		if(textId == "fnameT")
		{
		var fnameP = document.getElementById("fname");
			fnameP.innerHTML = "";
		}
		else if(textId == "initial")
		{
		var initialP = document.getElementById("initial1");
			initialP.innerHTML = "";
		}
		else if(textId == "lnameT")
		{
		var lnameP = document.getElementById("lname");
			lnameP.innerHTML = "";
		}		
		else if(textId == "stradd")
		{
		var straddP = document.getElementById("stradd1");
			straddP.innerHTML = "";
		}
		else if(textId == "cities")
		{
		var citiesP = document.getElementById("cities1");
			citiesP.innerHTML = "";
		}
		else if(textId == "postal")
		{
		var postalP = document.getElementById("postal1");
			postalP.innerHTML = "";
		}
		else if(textId == "phone")
		{
		var phoneP = document.getElementById("phone1");
			phoneP.innerHTML = "";
		}
				else if(textId == "email")
		{
		var emailP = document.getElementById("email1");
			emailP.innerHTML = "";
		}
		}

    </script>
    
</head>

<body>
<?php
include ("header.php");
include ("menu.php");
?>
     
   <form id="regform" style="padding: 10px" action="SaveAgent.php" method="post">
		First Name:<input type="text" name="AgtFirstName"/><br>
		Middle Initial: <input type="text" name="AgtMiddleName"/><br>
		Last Name: <input type="text" name="AgtLastName"/><br>
		Phone:<input type="text" name="AgtBusPhone"/><br>
		Email:<input type="text" name="AgtEmail"/><br>
		Position:<input type="text" name="AgtPosition"/><br>
		Agency ID: <select name="AgencyId" />
 					<p  style ="display:inline";></p><br/>
						<option>1</option>
						<option>2</option>
						
					</select>
		<input type="hidden" name="submitted" value="true"/><br/>
		<input type="submit" value="Submit"/>
		

	</form>
	
   <!-- form
       <p id="instruct">Please complete the registration form to allow our company to call you about your next vacation destination.</p>
	

    <form name="Form1" action="functions2.php" method="post"> 
     <table id="regform">
				<tr>
				<td class="words">First Name</td>
				<td class="words2"> <input required id="fnameT" type="text" name="First Name" class="Name" value="" pattern="[a-z]{1,15}" onFocus="focusFunc(this.id)" onBlur="blurFunc(this.id);"/>
 					<p id="fname"; class="form10"></p><br/></td>
			</tr>
            <tr>
				<td class="words">Middle Initial</td>
				<td class="words2"> <input id="initial" type="text"  name="Middle Initial" value="" pattern="[A-Z]"} onFocus="focusFunc(this.id)" onBlur="blurFunc(this.id);"/>
 					<p id="initial1"; class="form10"></p><br/></td>
			</tr>
			<tr>
				<td class="words">Last Name</td>
				<td class="words2"> <input required id="lnameT" type="text" name="Last Name" class="Name" value="" pattern="[a-z]{1,15}" onFocus="focusFunc(this.id)" onBlur="blurFunc(this.id);"/>
 					<p id="lname"; class="form10"></p><br/></td>
			</tr>
            <tr>
				<br/><td> Street Address </td>
				<td><input required type="text" id="stradd" name="Address" value="" onFocus="focusFunc(this.id)" onBlur="blurFunc(this.id);"/>
 					<p id="stradd1"; class="form10"></p><br/></td>
			</tr>
			<tr>
				<td>City</td>
				<td> <input required type ="text" id="cities" name="City" value="" onFocus="focusFunc(this.id)" onBlur="blurFunc(this.id);"/>
 					<p id="cities1"; class="form10" ></p><br/></td>
			</tr>
			<tr>
				<td>Province</td>
				<td> 
					<select id="prov" name="Province" size="1" required value="" onFocus="focusFunc(this.id)" onBlur="blurFunc(this.id);"/>
 					<p  style ="display:inline";id="prov1";></p><br/>
						<option></option>
                        <option>AB</option>
						<option>BC</option>
						<option>SK</option>
						<option>MB</option>
						<option>ON</option>
						<option>QC</option>
						<option>NB</option>
						<option>NL</option>
						<option>NS</option>
						<option>PE</option>
						<option>YT</option>
						<option>NT</option>
						<option>NU</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Postal Code</td>
				<td> <input id="postal" required maxlength = "7" type ="text" name="Postal Code" value=""  pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" title="H1H 1H1" onFocus="focusFunc(this.id)" onBlur="blurFunc(this.id);"/>
 					<p id="postal1"; class="form10"></p><br/></td>
				</td>
			</tr>
			<tr>
				<td> Phone </td>
				<td><input id="phone" required maxlength = "12" type="text" name="Phone" placeholder="000-000-0000" "value="" onFocus="focusFunc(this.id)" onBlur="blurFunc(this.id);"/>
 					<p id="phone1"; class="form10" ></p><br/></td>
			</tr>
			<tr>
				<td>Email</td>
				<td> 
                <input type="text" id="email" size=65 name="email" required value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" onFocus="focusFunc(this.id)" onBlur="blurFunc(this.id);"/> 
                <p id="email1" style="margin-left: 170px" class="form10"></p><br/></td>
			</tr>

			<tr>	
				<td>
					<p>Choose destinations that interest you</p> </td>
                    <td id="choice">
                    <input type="checkbox" name ="destination" value="Canada" unchecked="unchecked"/>Canada
                    <input type="checkbox" name ="destination" value="Europe" unchecked="unchecked"/>Europe
                    <input type="checkbox" name ="destination" value="South America" unchecked="unchecked"/>South America 
					<input type="checkbox" name ="destination" value="Europe" unchecked="unchecked"/>Europe
					<input type="checkbox" name ="destination" value="Asia" unchecked="unchecked"/>Asia
					<input type="checkbox" name ="destination" value="Central America" unchecked="unchecked"/>Central America
					<input type="checkbox" name ="destination" value="Australia" unchecked="unchecked"/>Australia
					<input type="checkbox" name ="destination" value="USA" unchecked="unchecked"/>USA
					
					
				</td>
			</tr>
		 		 
</table>		
			  <div align="center">
                 
                <input type="submit" value="Submit" name="Submit" onClick="return confirm('Do you want to submit this form?')?checkValidateForm():'';"/>    
        <input type="reset" value="Reset" name="Reset" onClick="return confirm('Do you want to reset the form?')" />   
     
			  </div>               			  
	  </form>  -->	

<pre>


</pre>

	<?php
include ("footer.php");
?>	 
	</body>
</html>