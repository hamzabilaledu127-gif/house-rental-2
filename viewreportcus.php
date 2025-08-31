<?php session_start(); include "configration.php";
if (!$_SESSION['log']['email']){
header("location:Login.php");
}
?>


<html>
    <head><title>Admin page</title>
       
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
                            <li><a href="customer.php">Home</a></li>
    <li><a href="crenting.php">Renting House</a></li>
                  <li><a href="viewresponse.php">View Response</a></li>
                
                   <li><a href="feedback.php"> Send Feedback</a></li>
                   
                     <li><a href="location.php"> View Location</a></li>
                   
            <li><a href="viewnewscus.php"> View News</a></li>

                     <li><a href="viewreportcus.php"> View Report</a></li>
                          </ul>
                                     </li>    
				   
           </ul>
	 
  </div> 	   

  <div id="main_body">
 <div id="s">
  
   <?php
$con = mysqli_connect('localhost','root', '','house');//Records per page?>
<?php
  $yr = strftime('%Y');
  //$s=$_REQUEST[" "];
  $sql1= "SELECT * FROM register ";
  $result=mysqli_query($con,$sql1);
  if (!$result) {
    printf("Error: %s\n", mysqli_error( $con));
    exit();
}
  $fetch=mysqli_fetch_array($result);
  $num = mysqli_num_rows($result);
  
$sql2= "SELECT * FROM register WHERE  type='private house' ";
 $result2=mysqli_query($con,$sql2);
  if (!$result2) {
    printf("Error: %s\n", mysqli_error( $con));
    exit();
}
  $u5 = mysqli_num_rows($result2);
  $fetch=mysqli_fetch_array($result2);
  
$sql3= "SELECT * FROM register WHERE  type='goverment house'";
 $result3=mysqli_query($con,$sql3);
  if (!$result3) {
    printf("Error: %s\n", mysqli_error( $con));
    exit();
}
  $u51 = mysqli_num_rows($result3);
  $fetch1=mysqli_fetch_array($result3);

  $sql4= "SELECT * FROM register WHERE  status='reserved'";
 $result4=mysqli_query($con,$sql4);
  if (!$result4) {
    printf("Error: %s\n", mysqli_error( $con));
    exit();
}
  $u52 = mysqli_num_rows($result4);
  $fetch2=mysqli_fetch_array($result4);

  $sql5= "SELECT * FROM register WHERE  status=''";
 $result5=mysqli_query($con,$sql5);
  if (!$result5) {
    printf("Error: %s\n", mysqli_error( $con));
    exit();
}
  $u53 = mysqli_num_rows($result5);
  $fetch3=mysqli_fetch_array($result5);
  ?>
  <!--************************************************************************************************************************************-->
  
  
  <table align="center" border="1"cellpadding="0"  cellspacing="0" style="width:70%">
            <tr>
              <td height="85" colspan="3"  >
                <center>
                  
                  </font><font size="+0" style="letter-spacing:0px;" face=georgia> <hr/>
                  SYSTEM ADMINISTRATOR DAILY REPORT<br/> </font>
                </center></td>
            </tr>
            <tr>
              <td width="15%"  height="43" align=center>Daily Copy</td>
              <td >&nbsp;</td>
              <td align=center>Date:
                <?php   echo date("d-m-Y");   ?></td>
            </tr>
           
            <tr>
              <td colspan="3"><i>
                <hr>
        <p style="padding-left:10em;">  Total Number of houses  =>
        <?php echo $num;?></p>
         <hr/>
                </i></td>
            </tr>
               <tr>
              <td colspan="3"><i>
                <hr>
        <p style="padding-left:10em;">  Number of private house  =>
        <?php echo $u5;?></p>
         <hr/>
                </i></td>
            </tr>
      
     <tr>
              <td colspan="3"><i>
                <hr>
        <p style="padding-left:10em;">  Number of govrmental house =>
        <?php echo $u51;?></p>
         <hr/>
                </i></td>
            </tr>
      <tr>
              <td colspan="3"><i>
                <hr>
        <p style="padding-left:10em;">  Number of Reserved house =>
        <?php echo $u52;?></p>
         <hr/>
                </i></td>
            </tr>
       <tr>
              <td colspan="3"><i>
                <hr>
        <p style="padding-left:10em;">  Number of Unreserved house =>
        <?php echo $u53;?></p>
         <hr/>
                </i></td>
            </tr>
       
       
       
       
            <tr>
              <td height="44" colspan="3" align="center"><p><font face='monotype corsiva' size=4>Thank You!</p></td>
            </tr>
          </table>
        
 </div>
  
   <?php
  //include("footerIndex.php");
  ?>
  <?php
  include("configration.php");
  


?>
 
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






















