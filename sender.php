      

<?php
if(isset($_POST['register']))
{
 
include('config.php');
$con = mysqli_connect('localhost', 'root', '','house');
$fname=$_POST['fname'];
$hn=$_POST['housenumber'];
$message=$_POST['msg'];
$p=$_POST['price'];
$cfname=$_POST['cemail'];
//$date=$_POST['Day'];
//$month=$_POST['Month'];
$time=date("l,d/M/Y,h:i:sa");
$sql="INSERT INTO response(landlordfirstname,housenumber,message,customeremail,price,time)
VALUES('$fname','$hn','$message','$cfname','$p','$time')";
//'$country','$region','$city','$kebele','$house_number','$phone_number','$email')";

if(mysqli_query($con,$sql))
{
	 //include("reserve.php");
         //include('deletreq.php');
         //include('landlord.php');
//echo '<center><strong>Password is changed succesfully</strong></center>';
echo "<script type='text/javascript'>alert(' your response is  succesfully sent to customer')</script>";

}

else {
	echo "Error on table response".mysqli_error($con);
}

}
?>
