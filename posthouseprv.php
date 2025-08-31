<html>
    <head><title>posthouse page</title>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
         <script src='java script/search.js'></script>
<link rel="stylesheet" type="text/css" href="CSS/myStyle.html" media='all'/>
<script type='text/javascript'>

function formValidator(){
	// Make quick references to our fields
	//var landlordId = document.getElementById('lid');
	var FirstName = document.getElementById('fname');
	//var MiddleName=document.getElementById('mname');
	var LastName=document.getElementById('lname');
	//var Sex = document.getElementById('sex');
	//var Country = document.getElementById('country');
	//var Region = document.getElementById('region');
	//var City = document.getElementById('city');
	var Kebele = document.getElementById('kebele');
	var PhoneNumber = document.getElementById('contact');
	var HouseNumber = document.getElementById('property');
	var email = document.getElementById('email');
        	//var room = document.getElementById('room');
                	var price = document.getElementById('price');
                        	var floor = document.getElementById('floor');
                        	var image = document.getElementById('images');
                            var type = document.getElementById('type'); 
                              var date = document.getElementById('date');
	
	// Check each input in the order that it appears in the form!
	//if(notEmpty(CustomerId, "Please Create and Enter Your Own Customer Id")){
	//if(isAlphanumeric(CustomerId, " Please Enter Numbers and Letters Only for Customer Id")){
	//if(lengthRestriction(CustomerId, 1, 10)){
       // if(notEmpty(landlordId, "Please Enter Your id number")){
	    // if(notEmpty(FirstName, "Please Enter Your First Name")){
	if(isAlphabet(FirstName, "Please enter only letters for your First Name")){
	if(lengthRestriction(FirstName, 3, 30)){
	    //if(notEmpty(MiddleName, "Please enter your Midle name")){
	//if(isAlphanumeric(MiddleName, "Please enter only letters for your Middle Name")){
	//if(lengthRestriction(MiddleName, 1, 30)){
	    if(notEmpty(LastName, "Please enter your Last Name")){
	if(isAlphanumeric(LastName, "Please enter only letters for your Last Name")){
	if(lengthRestriction(LastName, 3, 30)){
            if(emailValidator(email, "Please enter a valid email address")){
                     if(notEmpty(PhoneNumber, "Please enter your Phone Number")){
    if(isNumeric(PhoneNumber, "Please enter a Number For Your Phone Number")){
	if(lengthRestriction(PhoneNumber, 10, 14)){
             if(notEmpty(Kebele, "Please enter your Kebele")){
    if(isNumeric(Kebele, "Please enter a Number For Your Kebele")){
	if(lengthRestriction(Kebele, 1, 3)){
	//if(madeSelection(Sex, "You Do Not Fill Sex Or Country")){
	   // if(notEmpty(room, "Please enter your room number")){
	////if(isNumeric(room, "Please enter a Number For Your room Number")){
	if(lengthRestriction(room, 1, 20)){
                 if(notEmpty(HouseNumber, "Please enter your House Number")){
    if(isNumeric(HouseNumber, "Please enter a Number For Your House Number")){
	if(lengthRestriction(HouseNumber, 1, 20)){
	    if(notEmpty(price, "Please enter your price")){
	//if(isAlphanumeric(Region, "Please enter only letters for your Region")){
	//if(lengthRestriction(Region, 1, 20)){
	    if(notEmpty(floor, "Please enter your floor")){
	//if(isAlphanumeric(City, "Please enter only letters for your City")){
	//if(lengthRestriction(City, 1, 20)){
	       if(notEmpty(image, "Please browse your image")){
           if(notEmpty(type, "Please enter  type of house")){
            if(isNumeric(type, "Please enter only letters for type of house")){
	
	
		
		//					return true;
						}}}}}   }}}}
	}}}}  }}}}}}}
	          
	
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

    

  
<style>

input    {
width:170px;
display:block;
border: 1px solid blue;
height: 22px;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}


</style>

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

  </div>
 </div><!--news-->
 <div id="navbar">
      <ul id="navmenu">
                       <li><a href="landlord.php">Home</a></li>
    
                      <li class="sub"><a href="posthouseprv.php"> Upload House</a>
                    
                      </li>
                   <li><a href="updatehouseprv.php">Update House</a></li>
                   <li><a href="viewrequest.php"> View Request</a></li>
                   <li><a href="deletefeedback.php"> View Feedback</a></li>
                     <li><a href="Sendresponse.php"> Sendresponse</a></li> 
                   
                          </ul>
                                     </li>
                		   
           </ul>			   
  </div> 	   

  <div id="main_body">
 <div id="s">
<form name="form1" id="f1" action="Houseregistration.php" method="post" enctype="multipart/form-data" onsubmit='return formValidator();'>
  <table  align="center">
      <br>
      <br>
      <tr>
      <td>First Name </td>
      <td >
        <input name="fname" type="text" id="fname" />
      
    </tr>
    <tr>
      <td>Last Name </td>
      <td>
        <input name="lname" type="text" id="lname" />
     </td>
    </tr>
    <tr>
      <td >Email </td>
      <td>
        <input name="email" type="text" id="email" />
      </td>
    </tr>
    <tr>
      <td >Phone Number </td>
      <td >
        <input name="contact"  type="text" id="contact" />
      </td>
    </tr>
         <tr>
      <td >kebele </td>
      <td >
        <input name="kebele" type="text" id="kebele" />
      </td>
    </tr>
      
    
         <tr>
      <td >House Number </td>
      <td >
        <input name="housenumber" type="text" id="property" />
      </td>
    </tr>
         <tr>
      <td>Price </td>
      <td >
        <input name="price" type="text" id="price" />
      </td>
    </tr>
         <tr>
      <td >Floor </td>
      <td>
        <input name="floor" type="text" id="floor" />
      </td>
        </tr>
        
         <tr>
      <td a>upload image</td>
      <td >
        <input name="images" type="file" id="images" />
     </td>
    </tr>
    <tr>
      <td >House Type</td>
      <td>
        <input name="type" type="text" id="type" /></td></tr>
       <tr> 
      
        
<td><font size="2px" face = 'oblique'>Date:</font></td><td>
  <input name="date" size="32" id="name" type="text"   value="<?php echo date('y-m-d');?>" readonly="true"></td>

     </td>
    </tr>


        <tr>
      <td colspan="2" align="center"><label>
        <input name="submit" type="submit" id="submit" value="Register" />
      </label></td>
    </tr>
    
    
  </table>
</form>

  </div>
  
   
  </div>
 
  <div id="login">        
      <div id="" align="right" ><a href="logout.php"><img src="images/logout.png" width="90" hight="80"/></a>
           <a href="changepassform.php"><img src="images/change.png." width="115" hight="200"/></a></div>
  </div>
 
 <div id="footer">
     <center><font color="white">Gondar city house management and reservation system |
         &copy;2010 Gondar town - All Rights Reserved</font></center>
 </div>
  
 
 </div>
    </body>
</html>



