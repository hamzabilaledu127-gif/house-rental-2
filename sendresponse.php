
  

<?php session_start(); include "configration.php";
if (!$_SESSION['log']['email']){
header("location:Login.php");
}
?>


<html>
    <head><title>landlord  page</title>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
         <script src='java script/search.js'></script>


       
    


<link rel="stylesheet" type="text/css" href="CSS/myStyle.html" media='all'/>

</head>
<body>

<div id="container" >
    

  <div id="header">
      
      
                  <font color ="pink" size="5px" class="" style=""><h3 align="center"> WOLDIA HOUSE RENTAL SYSTEM</h3></font></td></tr></table>
      
      
      
     
      
  
    
     <div id="banner_image">
       <div id="slider-wrapper">
	   
   <script language="JavaScript">              
var i = 0; var path = new Array(); 

// LIST OF IMAGES 
path[0] = "images/a2.jpg"; 
path[1] = "images/a3.jpg"; 
path[2] = "images/a7.jpg"; 
path[3] = "images/a4.jpg"; 
path[3] = "images/a5.jpg"; 
path[4] = "images/a6.jpg"; 
path[5] = "images/a7.jpg"; 
path[6] = "images/a8.jpg"; 

function swapImage() 
{ 
document.slide.src = path[i]; 
if(i < path.length - 1) i++; 
else i = 0; 
setTimeout("swapImage()",2300); 
} 
window.onload=swapImage; 
   </script> 
          <img class="img_slider" name="slide" src="images/a3.jpg"/>
		</div>
	  </div>
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
  <td><a href="http://www.gmail.com"><img src="images/gmail.jpg" width="25" height="25"></td>
  
   <td> <a href="http://www.youtube.com"><img src="images/youtube.ico" width="25" height="25"></td>
   <br>
  </tr>
  </table>
  
  </div>
 </div><!--news-->


 
 <div id="navbar">
      <ul id="navmenu">
                
                      <li><a href="landlord.php">Home</a></li>
		
                   <li><a href="posthouse.php">Upload House</a></li>
                   <li><a href="updatehouse.php">Update House</a></li>
                          <li class="sub"><a href="#"> View</a>
                          <ul class="sub">
                   <li><a href="viewrequest.php"> View Request</a></li>
                   <li><a href="viewfeedback.php"> View Feedback</a></li>
                   
                          </ul>
                                     </li>
                
                    
		
                   
                     
				   
           </ul>			   
           
	 
  </div> 	   

  <div id="main_body">
      <div id="s">
  <?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password S
$db_name="house"; // Database name 
$tbl_name="register"; // Table name 
$con = mysqli_connect('localhost', 'root', '','house');
// Connect to server and select databse.
mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");

// get value of id that sent from address bar 
$id=$_GET['housenumber'];

// Delete data in mysql from row that has this id 
//$em=$_SESSION['log']['email'];


$sql= "select * from request where housenumber='$id'";
$sql1= "select * from register where housenumber='$id'";
$result= mysqli_query($con,$sql1);
$result2= mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)){
          // $s=$row['image'];
//echo"<table><tr><td>";
 //echo '<a><img src="'.$s.'" style="height:100px; width:150px" ></a></td><tr>';   
  ?>
      <form name="form1" id="f1" action="sendr.php" method="POST" enctype="multipart/form-data" onsubmit='return formValidator();'>
  <table width="px" hight="px"border="1" align="center">
    <tr>
      <td colspan="2" bgcolor="cyan" align="center">
        <h3 class="">Send Response </h3>
      </td>
    </tr>
    <tr>
      <td width="px" align="right" bgcolor="#CCFFFF">Landlord First Name </td>
      <td width="" bgcolor="#CCFFFF">
        <input name="fname" type="text" id="fname" value="<?php echo $row['fname'];?>" readonly="true" />
      </td>
  
       <tr>
        <td align="right" bgcolor="#CCFFFF">house number </td>
      <td bgcolor="#CCFFFF"><label>
              <input name="housenumber" type="text" id="property" value="<?php echo $row['housenumber'];?>" readonly="true" />
      </label></td>
    </tr>
    <tr>
         <tr>
      <td align="right" bgcolor="#CCFFFF">enter your message </td>
      <td bgcolor="#CCFFFF"><label>
              <textarea colspan="2" cols="16" rows="2" name="msg" value=" "></textarea><br>
      </label></td>
         </tr>
          <tr>
      <td align="right" bgcolor="#CCFFFF">Price</td>
      <td bgcolor="#CCFFFF"><label>
        <input name="price"  type="text" id="price" value="<?php echo $row['price'];?>"readonly="true"/>
      </label></td>
    </tr>
         <?php
         while($row = mysqli_fetch_array($result2)){
         ?>
         <tr>
      <td width="" align="right" bgcolor="#CCFFFF">Customer email </td>
      <td width="" bgcolor="#CCFFFF"><label>
        <input name="cemail" type="text" id="em" value="<?php echo $row['email'];?>" readonly="true"/>
      </label></td>
    </tr>
     
         <?php }?>
      
    
    
    <tr>
      <td colspan="2" align="center" bgcolor="#CCFFFF"><label>
        <input name="register" type="submit" id="submit" value="sebmit" />
      </label></td>
    </tr>
    
    
  </table>
     
</form>
      <?php }
?>
      </div>
  
   
  </div>
 
  <div id="login">
      <div id="" align="right" ><a href="logout.php"><img src="images/logout.png" width="90" hight="80"/></a></div>
  </div>
 
 <div id="footer">
     
     
		

 
      <center><font color="white">woldia house management and reservation system |
         &copy;2016 woldia town - All Rights Reserved</font></center>


 </div>
  
 
 

  
 </div>


    </body>
</html>

  