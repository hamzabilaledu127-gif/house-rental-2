
<?php session_start(); include "configration.php";
if (!$_SESSION['log']['email']){
header("location:Login.php");
}
?>



<html>
    <head><title>Landlord  page</title>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
         <script src='java script/search.js'></script>
       

    


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
  
  
  
  </div>
 </div><!--news-->


 
 <div id="navbar">
      <ul id="navmenu">
                
                  <li><a href="Employee.php">Home</a></li>
    
                      <li class="sub"><a href="postgovhouse.php"> Upload House</a>
                      <li class=""><a href="sendresponsegov.php">Send Response</a></li>
                      <li><a href="updatehouse.php">Update House</a></li>
                      </li>
                          <li class="sub"><a href="#"> View</a>
                          <ul class="sub">
                    <li><a href="viewrequestgov.php"> View Request</a></li>
                   <li><a href="viewreport.php"> View Report</a></li>
                   <li><a href="vewnews.php"> View News</a></li>
                   <li><a href="deletefeedbackemp.php"> View Feedback</a></li>
                          </ul>
                                     </li>
                  
                
				   
           
                   
                     
				   
           </ul>
					   
           
	 
  </div> 	   

  <div id="main_body">


     <?php
include('configration.php');
$em = $_SESSION['log']['email'];
$con = mysqli_connect('localhost', 'root', '','house');
$sql1= "select * from request where reciever='$em'";
//$sql= "select * from register email='$em'";
$result= mysqli_query($con,$sql1);

?>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
	font-style: italic;
}
.style2 {color: #FFFFFF}
-->
</style>



<?php
while($rows = mysqli_fetch_array($result)){

?><form id="form1" name="form1" method="post" action="">
<table width="696" border="" cellspacing="" cellpadding="0" align="center" bordercolor="#990000">
<tr>
<td width="690">
<tr>
    <td width="19%" height="34" bgcolor="#996633"><img src="images/ss1.jpg" width="100px" height="40px" align="middle"/>  </td>
<td colspan="8" bgcolor="#6699cc"><div align="center" class="style1 style2">your request from customer</div></td>
</tr>
<tr>
<td align="center" bgcolor="#996633"><span class="style2"><strong>First name</strong></span></td>
<td width="29%" align="center" bgcolor="#996633"><span class="style2"><strong>Last name</strong></span></td>
<td width="18%" align="center" bgcolor="#996633"><span class="style2"><strong>Gender</strong></span></td>
<td width="23%" align="center" bgcolor="#996633"><span class="style2"><strong>Phone number</strong></span></td>
<td width="23%" align="center" bgcolor="#996633"><span class="style2"><strong>Email</strong></span></td>
<td width="23%" align="center" bgcolor="#996633"><span class="style2"><strong>House number</strong></span></td>
</tr>

<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['firstname']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['lastname']; ?></td>
<td width="18%" bgcolor="#FFFFFF"><?php echo $rows['gender']; ?></td>
<td width="23%" bgcolor="#FFFFFF"><?php echo $rows['phonenumber']; ?></td>
<td width="23%" bgcolor="#FFFFFF"><?php echo $rows['email']; ?></td>
<td width="23%" bgcolor="#FFFFFF"><?php echo $rows['housenumber']; ?></td>
<td width="5%" rowspan=2 bgcolor=""><a href="sendresponse.php?housenumber=<?php echo $rows['housenumber'];?>"> <img src="images/confirm-button-hi.png" width="50"hight="40"/></a> </td></br><td rowspan="2">  <a href="deleterequest.php?email=<?php echo $rows['email'];?>"><img src="images/delete-button-grey-hi.png" width="90"hight="40"/></a></td></tr>
</tr></table></form>
<?php

// close while loop 
}

// close connection; 
mysqli_close($con);

?> 
</table></td>
</tr>
</table>
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






