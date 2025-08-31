


<?php session_start(); include "configration.php";
if (!$_SESSION['log']['email']){
header("location:Login.php");
}
?>



<html>
    <head><title>customer  page</title>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
         <script src='java script/search.js'></script>
<script type='text/javascript'>

function formValidator(){
	// Make quick references to our fields
	//var CustomerId = document.getElementById('cid');
	var FirstName = document.getElementById('fname');
	//var MiddleName=document.getElementById('mname');
	var LastName=document.getElementById('lname');
	var Sex = document.getElementById('gender');
	//var Country = document.getElementById('country');
	//var Region = document.getElementById('region');
	var City = document.getElementById('city');
	//var city= document.getElementById('city');
	var PhoneNumber = document.getElementById('contact');
	var HouseNumber = document.getElementById('property');
	var email = document.getElementById('email');
        	//var room = document.getElementById('room');
                	//var price = document.getElementById('price');
                        	//var floor = document.getElementById('floor');
                        	//var image = document.getElementById('images');
	
	// Check each input in the order that it appears in the form!
	//if(notEmpty(CustomerId, "Please Create and Enter Your Own Customer Id")){
	//if(isAlphanumeric(CustomerId, " Please Enter Numbers and Letters Only for Customer Id")){
	//if(lengthRestriction(CustomerId, 1, 10)){
	     if(notEmpty(FirstName, "Please Enter Your First Name")){
	if(isAlphabet(FirstName, "Please enter only letters for your First Name")){
	if(lengthRestriction(FirstName, 1, 30)){
	    //if(notEmpty(MiddleName, "Please enter your Midle name")){
	//if(isAlphanumeric(MiddleName, "Please enter only letters for your Middle Name")){
	//if(lengthRestriction(MiddleName, 1, 30)){
	    if(notEmpty(LastName, "Please enter your Last Name")){
	if(isAlphanumeric(LastName, "Please enter only letters for your Last Name")){
	if(lengthRestriction(LastName, 1, 30)){
            if(emailValidator(email, "Please enter a valid email address")){
                     if(notEmpty(PhoneNumber, "Please enter your Phone Number")){
    if(isNumeric(PhoneNumber, "Please enter a Number For Your Phone Number")){
	if(lengthRestriction(PhoneNumber, 10, 14)){
             if(notEmpty(City, "Please enter your city")){
    //if(isNumeric(City, "Please enter a Number For Your city")){
	//if(lengthRestriction(City, 0, 20)){
	if(madeSelection(Sex, "You Do select your gender")){
	  
                 if(notEmpty(HouseNumber, "Please enter your House Number")){
    if(isNumeric(HouseNumber, "Please enter a Number For Your House Number")){
	if(lengthRestriction(HouseNumber, 1, 20)){
	    //if(notEmpty(price, "Please enter your price")){
	//if(isAlphanumeric(Region, "Please enter only letters for your Region")){
	//if(lengthRestriction(Region, 1, 20)){
	    //if(notEmpty(floor, "Please enter your floor")){
	//if(isAlphanumeric(City, "Please enter only letters for your City")){
	//if(lengthRestriction(City, 1, 20)){
	       //if(notEmpty(image, "Please browse your image")){
	
	
		
							return true;
						}}}}   }}}}
	}}}}  }}
}              
	
	return false;
	
}

function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return true;
}

function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters ");
		elem.focus();
		return false;
	}
}

function madeSelection(elem, helperMsg){
	if(elem.value == "Select Sex"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}</script>


       
    


<link rel="stylesheet" type="text/css" href="CSS/myStyle.html" media='all'/>

</head>
<body>

<div id="container" >
    

  <div id="header">
  
      
      
                <font color ="white" size="5px" class="" style=""><h3 align="center">GONDAR CITY HOUSE RENTAL SYSTEM</h3></font></td></tr></table>
      
     
      <div id="newline">
      </div>
	</div><!--header-->
   
 <div id="news">
     <div id="news_image" align="center">
        
  </div>
<div id="footer_icon">
  
   <table cellspacing="20" >
  <tr>
 
  <td> <a href="http://www.facebook.com"><img src="images/facebook.png" width="25" height="25"></td>
          <td><a href="http://www.gmail.com"><img src="images/gmail.jpg" width="25" height="25"></a></td>
  
          <td> <a href="http://www.youtube.com"><img src="images/youtube.ico" width="25" height="25"></a></td>
   <br>
  </tr>
  </table>
  
  </div>
 </div><!--news-->


 
 <div id="navbar">
      <ul id="navmenu">
                
              
                      <li><a href="customer.php">Home</a></li>
		<li><a href="crenting.php">Renting House</a></li>
                	<li><a href="viewresponse.php">View Response</a></li>
                
                   <li><a href="feedback.php">Feedback</a></li>
                   
                     
				   
           </ul>			   
           
	 
  </div> 	   

  <div id="main_body">
 <form name="form1" id="f1" action="sendrequ.php" method="post" enctype="multipart/form-data" onsubmit='return formValidator();'>
  <table width="240px" hight="180px" border="" align="center">
    <tr>
      <td align="center"colspan="2" bgcolor="cyan" hight="5px"
<h1 class="">Send Request </h1>
     </td>
    </tr>
    
    <tr>
      <td width="240" align="right" hight="10px" bgcolor="#CCFFFF">First Name </td>
      <td width="150px" bgcolor="#CCFFFF">
        <input name="fname" type="text" id="fname" />
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCFFFF">Last Name </td>
      <td bgcolor="#CCFFFF">
        <input name="lname" type="text" id="lname" />
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCFFFF">Customer Email </td>
      <td bgcolor="#CCFFFF">
        <input name="email" type="text" id="email" />
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CCFFFF">Phone Number </td>
      <td bgcolor="#CCFFFF"><label>
        <input name="contact"  type="text" id="contact" />
      </label></td>
    </tr>
      
   
    <tr><td align="center" bgcolor="#CCFFFF" colspan="2">Gender :
        male<input type="radio" name="gender"  value="m"id="gender">

        female<input type="radio" name="gender"  value="f" id="gender"></td>
        </tr>
         <?php
include('configration.php');
$con = mysqli_connect('localhost', 'root', '','house');
$hn=$_GET['housenumber'];

   $sql1= "select * from register where housenumber='$hn'";
$result= mysqli_query($con,$sql1);
while($row = mysqli_fetch_array($result)){
   ?>

         <tr>
      <td align="right" bgcolor="#CCFFFF">Landlord email </td>
      <td bgcolor="#CCFFFF"><label>
              <input name="lemail"  type=text id="email" value="<?php echo $row['email'];?>"readonly="true" />
      </label></td>
    </tr>
        
      <tr>
      <td align="right" bgcolor="#CCFFFF">house number </td>
      <td bgcolor="#CCFFFF"><label>
              <input name="housenumber"  type=text id="property" value="<?php echo $row['housenumber'];?>" readonly="true" />
      </label></td>
    </tr>
      
         <?php
}
?>	
 
 
    
    <tr>
      <td colspan="2" align="center" bgcolor="#CCFFFF">
        <input name="register" type="submit" id="submit" value="submit" />
      </td>
    </tr>
    
    
  </table>
      <center><span>Your future home that you choose will be reserved for you.</span></center>
</form>

  </div>
 
  <div id="login">
   <div id="" align="right" ><a href="logout.php"><img src="images/logout.png" width="90" hight="80"/></a></div>
  </div>
 
 <div id="footer">
     
     
		

 
     <center><font color="white">Gondar city house management and reservation system |
         &copy;2010 Gondar town - All Rights Reserved</font></center>

 </div>
  
	
 

  
 </div>


    </body>
</html>


