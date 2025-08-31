
  



<html>
    
    <head><title>home  page</title>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        
         <script src='java script/search.js'></script>
       

    


<link rel="stylesheet" type="text/css" href="CSS/myStyle.html" media='all'/>
 
</head>

<body>

<div id="container" >
    

  <div id="header"><div align="right" id="search"> <form name="fs" action="search.php" method="post" onSubmit="return formValidator();"><table align="right"> <tr><td ></td>
                                <td bgcolor="#6FFFFF">
     <select name="kebele">                                                  
              <option disabled="disabled">kebele</option>
             <option>1</option>
              <option>2</option>

              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>

              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>

              
            </select></th><input type="submit" name="search" value="search" ><br> </td> </tr></table> </form>    </div>
  
      
      
                 <font color ="white" size="5px" class="" style=""><h3 align="center"> GONDAR CITY HOUSE RENTAL SYSTEM</h3></font>
      
      
     
    
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
                  
              
               <li><a href="homepage.php">HOME</a></li>
                    <li><a href="housedatabase.php">RENTING</a></li>
                    <li><a href="Login.php">UPLOAD HOUSE</a></li>
                    <li><a href="aboutus.php" target="_parent">ABOUT US</a></li>
                   
                
                   
                     
				   
           
				   
      </ul>
	 
  </div> 	   

  <div id="main_body">
 
<?php
if(isset($_POST['search']))
{
    $con = mysqli_connect('localhost', 'root', '','house');
    $s=$_POST['kebele'];
$mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_database = "house";
    $prefix = "";
    $bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
  //  mysqli_select_db($con, $bd) or die("Could not select database");
    

$sql1= "SELECT * FROM register WHERE kebele='$s' ORDER BY fname LIMIT 2";
$result = mysqli_query($con,$sql1);
 if (mysqli_num_rows($result)>0){
   
 while($row = mysqli_fetch_array($result))
   {
    

 if($row['status']=='reserved'){  
echo"<div id='s'>";

echo "<table align='center'><tr><td>  ";

  $s=$row['image'];
echo"<tr><td><table><tr><td>";
  echo '<a href="" ><img  alt="Send Request" src="'.$s.'" style="height:200px; width:250px"  ></a></td><td><font size=3px>First Name:- ';
             
          
	echo $row['fname'];
           
	echo "<br/> Last Name:-      "; 
  
        echo $row['lname'];
        echo "<br/> email:-  ";
        echo $row['email'];
        echo "<br/>Phone Number:-   ";
		echo $row['phone'];
		echo "<br/> kebele:-  ";
		echo $row['kebele'];
		//echo "<br/> Number of room:-   ";
		//echo $row['room'];
		echo "<br/>house number:-    ";
		echo $row['housenumber'];
		echo "<br/>Price:-   ";
		echo $row['price'];
		echo "<br/>Floor:-    ";

	        echo $row['floor'];
          echo "<br/>type:-    ";

          echo $row['type'];
          echo "<br/>date:-    ";

          echo $row['date'];
             
              
		echo "</font>   </td></tr></table>";
                               echo" <td bgcolor='' size='0px'><img src='images/reserv.jpg' style=height:30px; width:10px ></td></table></div></td></tr>";
               
            
 
}
else{
    echo"<div id='s'>";

echo "<table align='center'><tr><td>  ";

  $s=$row['image'];
echo"<tr><td><table><tr><td>";
  echo '<a href="" ><img  alt="Send Request" src="'.$s.'" style="height:200px; width:250px"  ></a></td><td><font size=3px>First Name: ';
             
          
	echo $row['fname'];
           
	echo "<br/> Last Name:-"; 
  
        echo $row['lname'];
        echo "<br/> email:-  ";
        echo $row['email'];
        echo "<br/>Phone Number:-   ";
		echo $row['phone'];
		echo "<br/> kebele:-  ";
		echo $row['kebele'];
		echo "<br/> Number of room:-   ";
		echo $row['room'];
		echo "<br/>house number:-    ";
		echo $row['housenumber'];
		echo "<br/>Price:-   ";
		echo $row['price'];
		echo "<br/>Floor:-   ";

	        echo $row['floor'];
          echo "<br/>type:   ";
           echo $row['type'];
            echo "<br/>date:   ";
           echo $row['date'];
             
              
		echo "</font>   </td></tr></table> ";
                           echo" <td bgcolor='' size='4px'>
                 <a href='Login.php'><img src='images/se.png' style=height:30px; width:10px ></a></td></td></tr>
                </table></div>";
}       
}
 }
        else {
            echo "<h1 style='color:red'> there is no recored data</h1>";
        }

 
}
?>
   

     
  
      
  </div>
 
  <div id="login">
      <table align="right"><tr><td><a href="Login.php"><img src ="images/log.jpg" width="90px"  hight="80" alt="Login"/></a></td></tr>

          <tr><td><a href="caccount.php" target="_parent"><img src="images/create.png" width="100px"  hight="90"/></a></td></tr></table>
  </div>
 
 <div id="footer">
     
     
		

 
      <center><font color="white">Gondar city house management and reservation system |
         &copy;2010 Gondar town - All Rights Reserved</font></center>

 </div>
  
	
 
    </body>
</html>



















































