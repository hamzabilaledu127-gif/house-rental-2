

<?php
$session_start = \session_start();
if(isset($_POST['register']))
{
include("configration.php");
$con = mysqli_connect('localhost', 'root', '','house');
$uname=ucwords(trim(($_POST["un"])));

$email=$_POST["email"];
$utype=$_POST["type"];
$password=$_POST["p"];
//$ssn=$_POST["ssn"];
$result = mysqli_query($con,"SELECT * FROM account WHERE email='$email'");
$data = mysqli_num_rows($result);
if(($data)==0){
$sql="insert into account(username,email,usertype,password,status) values('$uname','$email','$utype','$password','1')";
if(mysqli_query($con,$sql))
{
include("homepage.php");
echo "<script type='text/javascript'>alert('your account succesfully created')</script>";
}
else{
include("caccount.php");
echo "<script type='text/javascript'>alert('user name is already register ')</script>";
}


}else{
include("caccount.php");
echo " <font color='red'><script type='text/javascript'>alert('This email  is already registered, Please try another emaail')</script></font>";
}
mysqli_close($con);

	  }
?>










	 







	 
	