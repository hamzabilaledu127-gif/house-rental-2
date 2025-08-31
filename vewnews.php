




<?php session_start(); include "configration.php";
if (!$_SESSION['log']['email']){
header("location:Login.php");
}
?>


<html>
    <head><title>Employee  page</title>
       
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
    
                      <li class="sub"><a href="posthouse.php"> Upload House</a>
                      <li class=""><a href="sendresponsegov.php">Send Response</a></li>
                      <li><a href="updatehouse.php">Update House</a></li>
                      </li>
                          <li class="sub"><a href="#"> View</a>
                          <ul class="sub">
                    <li><a href="viewrequestgov.php"> View Request</a></li>
                   <li><a href="viewreport.php"> View Report</a></li>
                   <li><a href="vewnews.php"> View News</a></li>
                   <li><a href="deletefeedbackgov.php"> View Feedback</a></li>
                          </ul>
                                     </li>
                  
                
				   
           
                   
                     
				   
           </ul>
					   
           
	 
  </div> 	   

  <div id="main_body">
  
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="house"; // Database name 
$tbl_name="news"; // Table name
$con = mysqli_connect('localhost', 'root', '','house');
// Connect to server and select database.
 mysqli_connect("$host", "$username", "$password") or die("cannot connect"); 
 mysqli_select_db($con,"$db_name")or die("cannot select DB");

// select record from mysql 
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($con,$sql);

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


<table width="696" border="1" cellspacing="1" cellpadding="0" align="center" bordercolor="#990000">
<tr>
<td width="690"><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
    <td width="19%" height="34" bgcolor="#996633"><img src="images/lab contact.gif" width="84" height="30" align="middle"/>  </td>
<td colspan="8" bgcolor="#6699cc"><div align="center" class="style1 style2">recorded all news information </div></td>
</tr>
<tr>
<td align="center" bgcolor="#996633"><span class="style2"><strong>id</strong></span></td>
<td width="29%" align="center" bgcolor="#996633"><span class="style2"><strong>tittle</strong></span></td>
<td width="18%" align="center" bgcolor="#996633"><span class="style2"><strong>date</strong></span></td>
<td width="23%" align="center" bgcolor="#996633"><span class="style2"><strong>description</strong></span></td>
<td width="23%" align="center" bgcolor="#996633"><span class="style2"><strong>status</strong></span></td>

</tr>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['tittle']; ?></td>
<td width="18%" bgcolor="#FFFFFF"><?php echo $rows['date']; ?></td>
<td width="23%" bgcolor="#FFFFFF"><?php echo $rows['description']; ?></td>
<td width="23%" bgcolor="#FFFFFF"><?php echo $rows['status']; ?></td>

<td width="11%" bgcolor=""><a href='Employee.php'><font color="blue">OK<font></a></td>
<td width="11%" bgcolor="brown"><a href="delnews.php?id=<?php echo $rows['id']; ?>"><img src="images/delete-button-grey-hi.png" width="90"hight="40"/></a></td>
</tr>

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





