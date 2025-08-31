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
<font color="#33ddaa"size="+2"><p align="left"valign="bottom"><img src="IMG/h4.png"  height="79%" width="77%"/></p></font>

</td>


<table width="950px" border="0px">
<tr>
<td width="950" height="29" background-color="606060" margin-top="-15">
	<div id="topnav" >
            <li><a href="renting.php">RentingHouse </a></li>
       
			  <li><a href="feedback.php">SendFeedback</a></li>
		  
             <li class="sub"><a href="#"> View</a>
                          <ul class="sub">
                    <li><a href="location.php"> ViewLocation</a></li>
                   <li><a href="viewresponse.php"> ViewResponse</a></li>
                    <li><a href="viewnews.php"> ViewNews</a></li>
                   <li><a href="viewreport.php"> ViewReport</a></li>
                   </ul></li>
<li><a href="home.php" onclick="islogout()">Logout</a></li> 
    
	  </div>
	  </td>

</tr>
</table>
</table>





<table style="margin-top:-12px" width="950px" border="0"color:#606060 cellpadding="0" cellspacing="0"background-color:#606060 "  ><!--content table -->
<tr >
     <td class="left_container"  height="100" width="100px" valign="top" style="background-color:#C0C0C0 " bgcolor="#C0C0C0 ">


<td  bgcolor="	#ffffff "valign="top"height="150px" width="325px" margin-top="0px" border="0px" align-top="0px"><!--center -->

<div id="pagetitle"><!-- InstanceBeginEditable name="pagetitle" --><b> Fill the form bellow To Take an Item:</b><!-- InstanceEndEditable --></div>
      </br><div id="contentarea1">
 <FORM ACTION="itemrequest.php" METHOD="POST" enctype="multipart/form-data">
<font face="timesnewroman">

<fieldset><legend>All fields are  required:</legend>
<center>
<table  bgcolor="#ffffff" style="border:0px solid black;width:400px;border-radius:15px">

</tr>
<tr>
<input name="txtid" value="<?php echo $username ?>" type="hidden" size"20" pattern="\w{4,15}" required="required" placeholder="Enter user Number"></input>
</tr>
<tr>
<td>House Number :</td><td><input name="housenumber" type="number" size"20"  required="required" placeholder="Enter housenumber"></input></td>
</tr>
<tr>
<td>Reason :</td><td><input name="reason" type="text" size"20" required="required" placeholder="Enter reason"></input></td>
</tr>


</tr>

<tr><td colspan=2 align=center>
<input type="submit" value="Request" name="add"/> <input type="reset" value="Reset"/>
</td></tr>
</table> </center></fieldset></form>
<?php
 if(isset($_POST['add']))
 {
     $emp_id=$_POST['txtid'];
         $number=$_POST['housenumber'];
  $sql="select * from account where username='$emp_id'";
  $re=mysqli_query($sql);
  while($row=mysql_fetch_array($re)){
  $fname=$row['firstname'];
  $lname=$row['lastname'];
  $phone=$row['phone'];
  $email=$row['email'];
   $rdate=date("d/m/Y");
$sql="insert into request (firstname,lastname,username,email,,reason,request_date)
  values('$fname','$lname','$emp_id','$email','$_POST[txtcode]','$_POST[reason]','$rdate')";  
     $result=mysql_query($sql); 
        $result = mysql_query("update item set status='reserved' WHERE item_code='{$code}'") or die(mysql_error());  
if(!$result){
    print "<img src='IMG/error.png' align='center' width='25px' height='25px'><font face='arial' color='red' size='2'> Invalid Entry!!</font>";
   echo' <meta content="5;itemrequest.php" http-equiv="refresh" />'; 
}

else{ 
      
  echo'  <p align="center"><font color="green" size="2"><img width="30px" height="30px" src="IMG/tick.png">&nbsp;&nbsp; Successfuly Request!</font></p>';
$query="SELECT * FROM request where emp_id='{$emp_id}'";
$result=mysql_query($query);

$count=mysql_num_rows($result);
if($count==1){
 echo'<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content">';
while($row=mysql_fetch_array($result)){

$fn=$row['firstname'];
$ln=$row['lastname'];
$emp=$row['emp_id'];
$code=$row['item_code'];
$reason=$row['reason'];
}
    
   
echo" Confirmation Detail";
echo'<br>';echo'<br>';
echo"First Name:&nbsp;&nbsp;&nbsp;".$fn."<br>";
echo"Last Name:&nbsp;&nbsp;&nbsp;".$ln."<br>";
echo"Employee Id:&nbsp;&nbsp;&nbsp;".$emp."<br>";
echo"Item code:&nbsp;&nbsp;&nbsp;".$code."<br>";
echo"reason:&nbsp;&nbsp;&nbsp;".$reason."<br>";
 $update = mysql_query("update item set status='reserved' WHERE item_code='{$code}'") or die(mysql_error());
   echo' <meta content="20;itemrequest.php" http-equiv="refresh" />';  
    
    
    }
    
    
    
  }  
 }
}
mysql_close($con);
?>
  
</div>
</td><!--center end-->
<td class="right_container" valign="top" width="100px" height="100px"">

<table class="right"  style="margin-top:0px;color:#FFFF00;background-color:#c0c0c0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c0c0c0">

<tr>
<td class="right" height="100px" width="100px" border="1px" valign="top" align="center"bgcolor="#c0c0c0 "border="1px" >
<br><br><br><br>

<fieldset style=" border-color:#45565C; height:160px;">


<img src="IMG/dell.jpg" height="150px" width="67px" name="demo" align="center">
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
