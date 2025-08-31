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
<HTML>
<html lang="en-US" xml:lang="en-US" xmlns=""/>
<head>
<title>House Rental </title>
<link rel="shortcut icon" href="favicon.ico" type="imagese/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="Keywords" content="XML,tutorial,HTML,DHTML,CSS,XSL,XHTML,JavaScript,ASP,ADO,VBScript,DOM,W3C,authoring,programming,learning,beginner's guide,primer,lessons,school,howto,reference,free,examples,samples,source code,demos,tips,links,FAQ,tag list,forms,frames,color tables,Cascading Style Sheets,Active Server Pages,Dynamic HTML,Internet database development,Webbuilder,Sitebuilder,Webmaster,HTMLGuide,SiteExpert" />
<meta name="Description" content="HTML XHTML CSS JavaScript XML XSL ASP SQL ADO VBScript Tutorials References Examples" />
<link rel="stylesheet" type="text/css" href="index's_file/globalcss.css" />
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "../https@ssl.\default.htm" : "../www./default.htm");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3855518-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new images();
demo1.src="imag/1.jpg"
demo2 = new images();
demo2.src="imag/2.jpg"
demo3 = new images();
demo3.src="imag/3.jpg"


demo4 = new images();
demo4.src="imag/4.jpg"
demo5 = new images();
demo5.src="imag/5.jpg" 
demo6= new images();
demo6. src="imag/6.jpg"
demo7=new images();
demo7.src="imag/7.jpg"
}
function timeimgs(numb) {  // Reusable timer
thetimer = setTimeout("imgturn('" +numb+ "')", 3000);
}

function imgturn(numb) {   // Reusable imagese turner
if (document.images) {

if (numb == "7") {         // This will loop the imagese
document["demo"].src = eval("demo7.src");
timeimgs('1');
}

else {
document["demo"].src = eval("demo" + numb + ".src");

timeimgs(numb = ++numb);
}
}
}

</script>

</head>
<body onLoad="timeimgs('1');">


</style>
<center>
<table  width="950" height="100" border=0px id="table1"bgcolor=""#000000"">
<tr>
<td align="center">


<table width="950px" border="0" cellpadding="0" cellspacing="0" 
style="margin-bottom:-10px;margin-top:-4px;background-color:#787878;border-bottom:0px color="#606060 ">
<tr border="0px">
<td width="529px" valign="middle" style="height:90px;text-align:left">
<img align="left" border="0" src="img/h2.jpg" width="215" height="120" alt= HOUSE RENTAL" title="Gondar City House Rental System" />
&nbsp;
<font color="#33ddaa"size="+2"><p align="left"valign="bottom"><img src="IMG/h4.png"  height="50%" width="70%"/></p></font>

</td>


<table width="950px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" margin-top="-15">
	<div id="topnav" >
            <li><a href="uploadhouse.php">UploadHouse </a></li>
       
        <li><a href="viewhouseemp.php">UpdateHouse</a></li>
       <li><a href="sendresponseemp.php">SendResponse</a></li>

        <li class="sub"><a href="#"> View</a>
                          <ul class="sub">
                    <li><a href="viewrequestemp.php"> ViewRequest</a></li>
                   <li><a href="viewfeedbackemp.php"> ViewFeedback</a></li>
                    <li><a href="viewnewsemp.php"> ViewNews</a></li>
                   </ul></li>
                        <li><a href="#".php">View Report </a>
      <ul>
      <li><a href="userreportemp.php">User Report</a></li><br/>
            <li><a href="#".php">House Report</a>
      <ul>
        <li><a href="totalhouseemp.php">Total House</a></li><br/>
          <li><a href="freehouseemp.php">Free House</a></li><br/>
        <li><a href="reservedhouseemp.php">Reserved House</a></li><br/>
      </ul></li></li></ul>
<li><a href="Logout.php" onclick="islogout()">Logout</a></li> 
    
    
    
	  </div>
	  </td>

</tr>
</table>
</table>





<table style="margin-top:-12px" width="950px" border="0"color:#606060 cellpadding="0" cellspacing="0"background-color:#606060 "  ><!--content table -->
<tr >
     <td class="left_container"  height="100" width="100px" valign="top" style="background-color:#C0C0C0 " bgcolor="#C0C0C0 ">


<td  bgcolor="	#ffccff "valign="top"height="150px" width="325px" margin-top="0px" border="0px" align-top="0px"><!--center -->


	
	  <div id="pagetitle" ><!-- InstanceBeginEditable name="pagetitle" --><b> Gondar city house rental System</b><!-- InstanceEndEditable --></div>
     	</br>

 <?php
$con = mysqli_connect('localhost','root', '','house');//Records per page?>
   <center></center><!-- InstanceBeginEditable name="pagetitle" --><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fill the form bellow To Send Your Request:</b><br></center><!-- InstanceEndEditable --></div>
      </br>
 <FORM ACTION="sendresponseemp.php" METHOD="POST" enctype="multipart/form-data">
<font face="timesnewroman">

<fieldset><legend>All fields are  required:</legend>
<center>
<table  bgcolor="#ffccff" style="border:0px solid black;width:400px;border-radius:15px">

<tr>
<td>Sender Name :</td><td><input name="senderfirstname" type="text" size"20"  required   Pattern="[A-Za-z]{3,20}"  title=" it must be charcter"></input></td>
</tr>
 <tr>
<td>House Number :</td><td><input name="housenumber" type="number" size"20"  title="it must be number" required Pattern="[0-9]{1,13}"></input></td>
</tr>

         <tr>
      <td >enter your message </td>
      <td bgcolor=""><label>
              <textarea colspan="2" cols="22" rows="2" name="msg" value=" " required></textarea><br>
      </label></td>
         </tr>

<tr>
<td>Price :</td><td><input name="price" type="number" size"20" title="it must be number" required Pattern="[0-9]{2,13}"></input></td>
</tr>

<tr><td colspan=2 align=center>
<input type="submit" value="Response" name="add"/> <input type="reset" value="Reset"/>
</td></tr>
</table> </center></fieldset></form>
<?php
 if(isset($_POST['add']))
 {
 $username=$_POST['senderfirstname'];
        // $code=$_POST['message'];
         $code2=$_POST['price'];
  $sql="select * from register where fname='{$username}'";
  $result=mysqli_query($con,$sql);
    if (!$result) {
    printf("Error: %s\n", mysqli_error( $con));
    exit();
}
  while($row=mysqli_fetch_array($result)){
  $username=$row['fname'];
  //$email=$row['email'];
   $code3=$_POST['housenumber'];
  //$emp_id=$row['emp_id'];
  $sql2="select * from request1 where housenumber='{$code3}' ";
  $re2=mysqli_query($con,$sql2);
  while($row=mysqli_fetch_array($re2)){
  $code3=$row['housenumber'];
  $email=$row['email'];
  $time=date("l,d/M/Y,h:i:sa");
$sql="insert into response (senderfirstname,housenumber,message,customeremail,price,time)
  values('$_POST[senderfirstname]','$_POST[housenumber]','$_POST[msg]','$email','$_POST[price]','$time')";  
     $result=mysqli_query($con,$sql); 
        $result = mysqli_query($con,("update register set status='reserved' WHERE housenumber='{$code3}'")) or die(mysqli_error());  
if(!$result){
    print "<img src='IMG/error.png' align='center' width='25px' height='25px'><font face='arial' color='red' size='2'> Invalid Entry!!</font>";
   echo' <meta content="5;sendresponseemp.php" http-equiv="refresh" />'; 
}

else{ 
      
  echo'  <p align="center"><font color="green" size="2"><img width="30px" height="30px" src="IMG/tick.png">&nbsp;&nbsp; Successfuly Sent!</font></p>';
$query="SELECT * FROM response where customeremail='{$email}'";
$result=mysqli_query($con,$query);
if (!$result) {
    //printf("Error: %s\n", mysqli_error( $con));
    exit();
}
$count=mysqli_num_rows($result);
if($count==1){
 echo'<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content">';
while($row=mysqli_fetch_array($result)){

$fn=$row['senderfirstname'];
$hn=$row['housenumber'];
$ms=$row['message'];
$em=$row['customeremail'];
$pr=$row['price'];
$ti=$row['time'];
}
    
   
echo" Confirmation Detail";
echo'<br>';echo'<br>';
echo"First Name:&nbsp;&nbsp;&nbsp;".$fn."<br>";
echo"HousNumber:&nbsp;&nbsp;&nbsp;".$hn."<br>";
//echo"Employee Id:&nbsp;&nbsp;&nbsp;".$emp."<br>";
echo"Message:&nbsp;&nbsp;&nbsp;".$ms."<br>";
echo"Customeremail:&nbsp;&nbsp;&nbsp;".$em."<br>";
echo"Price:&nbsp;&nbsp;&nbsp;".$pr."<br>";
echo"Time:&nbsp;&nbsp;&nbsp;".$ti."<br>";
 $update = mysqli_query($con,("update register set status='reserved' WHERE housenumber='{$hn}'")) or die(mysqli_error());
   echo' <meta content="20;sendresponseemp.php" http-equiv="refresh" />';  
    
    
    }
    
    
    }
  }  
 }
}
//mysql_close($con);
?>
  
</div>
</td><!--center end-->

<td class="right_container" valign="top" width="100px" height="100px"">

<table class="right"  style="margin-top:0px;color:#FFFF00;background-color:#c0c0c0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c0c0c0">

<tr>
<td class="right" height="100px" width="100px" border="1px" valign="top" align="center"bgcolor="#c0c0c0 "border="1px" >
<br><br><br><br>

<fieldset style=" height:160px;">


<img src="IMG/dell.jpg" height="120px" width="80px" name="demo" align="center">
</fieldset>


<br/><br/><br/><br/><br/><br/><br/><br><br/><br/>
</td>
</tr>
</table>
</td>
</tr></table><!--content table end-->

<table width="953px" height="42px" border="1" background-color="#282828">
<tr width="953"style="margin-bottom:1px;margin-top:1px;background-color:#606060  ;border:0px solid #ffffff" border="0px" cellpadding="10" cellspacing="0">
<td valign="top" align="center">

<font color="#fef943" face="arial">&copy; 2018 @ Gondar City House Rental System.</font>
</td></tr></table>
</td></tr></table>
</center>
</body>
</html>
