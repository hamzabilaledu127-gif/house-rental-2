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
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="house"; // Database name 
$tbl_name="register"; // Table name 
$con = mysqli_connect('localhost', 'root', '','house');
// Connect to server and select databse.
mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");

// get value of id that sent from address bar 
$id=$_POST['housenumber'];

// Delete data in mysql from row that has this id 
$sql="update register set status='reserved' WHERE housenumber='$id'";
$result=mysqli_query($con,$sql);

// if successfully deleted


// close connection 
mysqli_close($con);

?>
