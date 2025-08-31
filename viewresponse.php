


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


       
    


<link rel="stylesheet" type="text/css" href="CSS/myStyle.html" media='all'/>

</head>
<body>

<div id="container" >
    

  <div id="header"><!--<div align="right" id="search"> <form name="fs" action="search.php" method="post" onSubmit="return formValidator();"><table align="right"> <tr><td ></td>
                                <td bgcolor="#6FFFFF"><td bgcolor="aqua"><input type="text" id="property" name="housenumber" placeholder="house number" ><input type="submit" name="search" value="search" ><br> </td> </tr></table> </form>    </div>>-->
  
      
      
                  <font color ="white" size="5px" class="" style=""><h3 align="center"> GONDAR CITY HOUSE RENTAL SYSTEM</h3></font></td></tr></table>
      
      
      
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
                
              
                     <li><a href="customer.php">Home</a></li>
    <li><a href="crenting.php">Renting House</a></li>
                  <li><a href="viewresponse.php">View Response</a></li>
                
                   <li><a href="feedback.php"> Send Feedback</a></li>
                   
                     <li><a href="location.php"> View Location</a></li>
                   
            <li><a href="viewnewscus.php"> View News</a></li>

                     <li><a href="viewreportcus.php"> View Report</a></li>
                   
                     
				   
           </ul>			   
           
	 
  </div> 	   

  <div id="main_body">

 

 
<?php
//session_start();
$user = $_SESSION['log']['email'];
include('configration.php');
$con = mysqli_connect('localhost', 'root', '','house');
$sql1= "select * from response where customeremail='$user'";
$result= mysqli_query($con,$sql1);
while($row = mysqli_fetch_array($result)){  
?>
 <form name="fs" action=" viewresponse.php" method="GET" onsubmit='return formValidator()'><table align="center" border="1">

   <tr>
      <td colspan="2" align="center">
          <h3>View Response </h3>
      </td>
    </tr>
  
       
    
	<tr>
      <td > landlord Name </td>
      <td ><label>
        <input name="fname"  id="fname" value="<?php echo $row['landlordfirstname']; ?>" readonly='true' />
      </label></td>
    </tr>
    <tr>
      <td width="" align="right">house number </td>
      <td width=""><label>
        <input name=""  id="lname" value="<?php echo $row['housenumber'];?>" readonly='true'/>
      </label></td>
    </tr>
    <tr>
      <td align="right">message </td>
      <td><label>
        <input name=""   value="<?php echo $row['message']?>"readonly='true'/>
      </label></td>
    </tr>
    <tr>
      <td align="right">your  email </td>
      <td><label>
        <input  value="<?php echo $row['customeremail']?>" readonly='true' />
      </label></td>
    </tr>
    <tr>
      <td align="right">price </td>
      <td><label>
        <input value="<?php echo $row['price']?>" readonly='true'/>
      </label></td>
    </tr>
    <tr>
      <td align="right"> date</td>
      <td><label>
        <input  value="<?php echo $row['time']?>" readonly='true'/>
      </label></td>
    </tr>
   
    <tr>
      <td colspan="2" align="center"><label>
              
              <a href="customer.php"> OK</a> 
      </label></td>
    </tr>
  </table>
</form>
   <?php
   }
   
   ?>
     	
  </div>
 
  <div id="login">
  <div id="" align="right" ><a href="logout.php"><img src="images/logout.png" width="90" hight="80"/></a>
         <a href="changepassform.php"><img src="images/change.png." width="115" hight="200"/></a></div></div>
  </div>
 
 <div id="footer">
     
     
		

 
     <center><font color="white">Gondar city house management and reservation system |
         &copy;2010 Gondar town - All Rights Reserved</font></center>

 </div>
  

 
 

  
 </div>


    </body>
</html>


