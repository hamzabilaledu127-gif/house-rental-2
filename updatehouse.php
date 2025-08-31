
   
<?php session_start(); include "configration.php";
if (!$_SESSION['log']['email']){
header("location:Login.php");
}
?>
<html>
    <head><title>landlord  page</title>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
         <script src='java script/lsearch.js'></script>



    


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
                   <li><a href="report.php"> View Report</a></li>
                   <li><a href="vewnews.php"> View News</a></li>
                   <li><a href="deletefeedbackemp.php"> View Feedback</a></li>
                   
                          </ul>
                                     </li>
                
                    
		
                   
                     
				   
           </ul>			   
           
	 
  </div> 	   

  <div id="main_body">

   
 
<?php
include('configration.php');
//session_start();
$con = mysqli_connect('localhost', 'root', '','house');
$user = $_SESSION['log']['email'];
$sql1= "select  from register where email='$user'";
$result= mysqli_query($con,$sql1);
//while($row = mysql($result)){
     //  $s=$row['image'];
//echo"<tr><td><table><tr><td>";
  //echo '<a><img src="'.$s.'" style="height:250px; width:220px" ></a></td><td>';
?>
<form id="form1" name="form1" method="post" action="updateh1.php">
  <table  border="" hight="100px" bgcolor="white" align="center">

   <tr>
      <td colspan="2" bgcolor="#CCFFFF" ><div align="center">
          <h3>Update house information </h3>
      </div></td>
    </tr>
    <tr>
        <td >
       
    
	<tr>
      <td  bgcolor="#CCFFFF" >First Name </td>
      <td  bgcolor="#CCFFFF" ><label>
        <input name="fname" type="text" id="fname" value="" />
      </label></td>
    </tr>
    <tr>
      <td width="" align="right"  bgcolor="#CCFFFF" >last Name </td>
      <td  bgcolor="#CCFFFF" width=""><label>
        <input name="lname" type="text" id="lname" value="" />
      </label></td>
    </tr>
    <tr>
      <td align="right"  bgcolor="#CCFFFF" >Email </td>
      <td  bgcolor="#CCFFFF" ><label>
        <input name="email" type="text" id="email" value=""/>
      </label></td>
    </tr>
    <tr>
      <td align="right"  bgcolor="#CCFFFF" >phone </td>
      <td  bgcolor="#CCFFFF" ><label>
        <input name="phone" type="text" id="phone" value="" />
      </label></td>
    </tr>
    <tr>
      <td align="right"  bgcolor="#CCFFFF" >Kebele </td>
      <td  bgcolor="#CCFFFF" ><label>
        <input name="kebele" type="text" id="kebele" value="" />
      </label></td>
    </tr>
    <tr>
      <td align="right"  bgcolor="#CCFFFF" > Number of  Room </td>
      <td  bgcolor="#CCFFFF" ><label>
        <input name="room" type="text" id="room" value=""/>
      </label></td>
    </tr>
    <tr>
      <td align="right"  bgcolor="#CCFFFF" >House  Number  </td>
      <td  bgcolor="#CCFFFF" ><label>
        <input name="housenumber" type="text" id="housenumber" value=""/>
      </label></td>
    </tr>
    <tr>
      <td align="right"  bgcolor="#CCFFFF" > Price </td>
      <td  bgcolor="#CCFFFF" ><label>
        <input name="price" type="text" id="price" value=""/>
      </label></td>
    </tr>
    <tr>
      <td align="right"  bgcolor="#CCFFFF" > Floor</td>
      <td bgcolor="#CCFFFF" ><label>
        <input name="floor" type="text" id="floor" value=""/>
      </label></td>
    </tr> 
   
    <tr><td align="center" bgcolor="#CCFFFF" colspan="2">Status:
        Reserved<input type="radio" id="reserv" name="res" value="" >

        Unreserved<input  type="radio" id="reserv" name="res" value="" ></td>
        </tr>
    <tr>
      <td  bgcolor="#CCFFFF" align="left"><label>
        <input name="update" type="submit" id="update" value="Update" />
      </label>
    
      <td  bgcolor="#CCFFFF" align="center"><label>
        <input name="cancel" type="reset" id="cancel" value="cancel" />

      </label>
         <td  bgcolor="#CCFFFF" align="right"><label>
        <input name="search" type="submit" id="search" value="search" />
          </label></td></td></td>
  </table>
</form>
   ?>
     


  </div>
 
  <div id="login">
     <div id="" align="right" ><a href="logout.php"><img src="images/logout.png" width="90" hight="80"/></a>
           <a href="changepassform.php"><img src="images/change.png." width="115" hight="200"/></a></div>
  </div>
 
 <div id="footer">
     
     
		
<center><font color="white">Gondar city house management and reservation system |
         &copy;2010 Gondar town - All Rights Reserved</font></center>
 
     <div align ="left" ><a href="help.html" ><font color="lightcyan"> </font></a> </div>

 </div>
  

 
  
 </div>


    </body>
</html>


    