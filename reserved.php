

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

              
            </select></th><input type="submit" name="search" value="search" ><br> </td> </tr></table> </form>    </div>
  
      
      
                    <font color ="white" size="5px" class="" style=""><h3 align="center"> GONDAR CITY HOUSE RENTAL SYSTEM</h3></font>
      
     
      
  
    
     
      <div id="newline">
      </div>
	</div><!--header-->
   
 <div id="news">
     <div id="news_image" align="center">
        
  </div>
<div id="footer_icon">
  
   <table cellspacing="20" >
  
 
  
  
  </div>
 </div><!--news-->


 
 <div id="navbar"> 
      <ul id="navmenu">
                  
              
                     <li><a href="homepage.php">Home</a></li>
                    <li id="current"><a href="housedatabase.php">Renting House</a></li>
                    <li><a href="Login.php" target="_parent">Upload House</a></li>
                    <li><a href="aboutus.php" target="_parent">About Us</a></li>
                        <li><a href="reserved.php" target="_parent">Reserved House</a></li>
                
                   
                     
				   
           
				   
      </ul>
	 
  </div> 	   

  <div id="main_body">
     <div id="">
  
  
<?php
$con = mysqli_connect('localhost','root', '','house');//Records per page
$per_page=2;

if (isset($_GET["page"])) {

$page = $_GET["page"];

}

else {

$page=1;

}

// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;

//Selecting the data from table but with limit
$query = "SELECT * FROM register LIMIT $start_from, $per_page";
$result = mysqli_query ($con, $query);
while ($row = mysqli_fetch_assoc($result)) {

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
             
              
		echo "</font>   </td></tr></table>";
                 echo" <td bgcolor='' size='0px'><img src='images/reserv.jpg' style=height:30px; width:10px ></td></table></div></td></tr>";
               
            
 
}


}
$query = "select * from register";
$re = mysqli_query($con, $query);

// Count the total records
$total_records = mysqli_num_rows($re);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo "<strong><center><a href='reserved.php?page=1'>".'Privious Page'."</a> ";

for ($i=1; $i<=$total_pages; $i++) {

echo "<a href='reserved.php?page=".$i."'>".$i."</a> ";
};
// Going to last page
echo "<td bgcolor='red'><a href='reserved.php?page=$total_pages'>".'Next Page'."</a></td></center></strong> ";




//Now select all from table


?>


      </div>
  
      
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


















































