
<?php   
 session_start();
 //include("config/config.php");
 //echo "User".$_SESSION['user'];
 if(isset($_SESSION['username']))
 {
  $username=$_SESSION['username'];
 } else {
 ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
<?php   
 
 //include("config/config.php");
?>
<?php if(isset($_POST['register'])){
include('configration.php');
$con = mysqli_connect('localhost', 'root', '','house');
//$cid=$_POST['cid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gen=$_POST['gender'];
//$city=$_POST['city'];
$phone=$_POST['contact'];
$em=$_SESSION['log']['email'];
//$_SESSION['email']=$email;
$eme=$_POST['lemail'];
$hn=$_POST['housenumber'];
$sql="INSERT INTO request( firstname,lastname,gender,phonenumber,email,reciever,housenumber)
VALUES('$fname','$lname','$gen','$phone','$em','$eme','$hn')";
//'$country','$region','$city','$kebele','$house_number','$phone_number','$email')";

if(mysqli_query($con,$sql))
{
    //session_destroy();
    //unset($em);
    include('crenting.php');
    echo "<script type='text/javascript'>alert(' your request is succesfully sent to landlord')</script>";
     }
	

else {
	echo "Error on table request ".mysqli_error($con);
}
}
//or die('Error,query failed');
mysqli_close($con);

?>
