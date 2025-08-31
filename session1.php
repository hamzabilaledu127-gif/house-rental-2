

<?php
if(isset($_POST['login'])){
$user_name=$_POST["username"];
$password=$_POST["password"];
$con=mysql_connect("localhost","root","");
if(!$c)
print(" not connected to database");
else
{
echo "connected";

}
$s=mysql_select_db("house");
if(!$s){
print(" not select to database");
}
else{
$sql="select username,password from account";
$query=mysql_query($sql,$c);
while($row=mysql_fetch_array($query))
{
$name=$row['username'];
$pass=$row['password'];
if($name==$user_name && $pass==$password)
{
	session_start();
	$_SESSION['username']=$username;
	$_SESSION['login']=true;
header("location:home.php");
}
}
}}
?>