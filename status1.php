<?php
include("configration.php");
?>
<?php	;//Records per page 
if(isset($_GET['status']))
{
	$status=$_GET['status'];
	$query="select * from users where username='$status'";
	$select_status=mysqli_query($query);
	 if (!	$select_status) {
    printf("Error: %s\n", mysqli_error( $con));
    exit();
}
$count=mysqli_num_rows(	$select_status);
if($count !=0){
	while($row=mysqli_fetch_object($select_status))
	{
		$st=$row->status;
	
	if($st=='0')
	{
		$status2=1;
	}
	else
	{
		$status2=0;
	}
	$update=mysqli_query("update account set status='$status2' where username='$status' ");
	if($update)
	{
		header("Location:viewuser.php");
	}
	else
	{
		echo mysqli_error();
	}
	}}
	?>
     
    <?php
}
?>