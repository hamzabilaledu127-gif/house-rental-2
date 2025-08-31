
     

<?php

if(isset($_POST['update']))
    {
    $con = mysqli_connect('localhost', 'root', '','house');
    include('configration.php');
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$keb=$_POST['kebele'];
$room=$_POST['room'];
$hid=$_POST['housenumber'];
$price=$_POST['price'];
$floor=$_POST['floor'];

$st=$_POST['res'];
$sql="update  register set fname='$fn',lname='$ln', email='$email',phone='$phone',kebele='$keb',room='$room',housenumber='$hid',price='$price',floor='$floor',status='$st'  where housenumber='$hid'";


if(mysqli_query($con,$sql))
{

 include("landlord.php");
//echo '<center><strong>Password is changed succesfully</strong></center>';
echo "<script type='text/javascript'>alert('Succsesfully updated')</script>";
     }
	 
     else{
     
 
include("updatehouse.php");
echo "<script type='text/javascript'>alert('There is error ')</script>";
}

    	
}
//or die('Error,query failed');

?>
<?php
if(isset($_POST['search']))
{
    // id to search
    $id = $_POST['housenumber'];
    
    // connect to mysql
    $con = mysqli_connect("localhost", "root", "","house");
    
    // mysql search query
    $query = "SELECT `fname`, `lname`, `email``phone`, `kebele`, `room`, `housenumber`,`price`, `floor`, `Status` FROM `register` WHERE `housenumber` = $id LIMIT 1";
    
    $result = mysqli_query($con,($foo = null)
    
    	//this->foo = $foo;
    , $query);
    
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
         $phone = $row['phone'];
        $kebele = $row['kebele'];
        $room = $row['room'];
         $housenumber = $row['housenumber'];
        $price = $row['price'];
        $floor = $row['floor'];
         $Status = $row['Status'];
       }
      }  
      
    
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
            $fname = "";
            $lname = "";
        $email = " ";
         $phone = " ";
        $kebele = " ";
        $room = " ";
         $housenumber = " ";
        $price = " ";
        $floor = " ";
         $Status = " ";
    } 
    
    
   // mysqli_free_result($result);
    mysqli_close($connect);
    

}
// in the first time inputs are empty{
      else{
       $fname = "";
            $lname = "";
        $email = " ";
        $phone = " ";
        $kebele = " ";
        $room = " ";
         $housenumber = " ";
       $price = " ";
       $floor = " ";
        $Status = " "; 
}


?>


   
  