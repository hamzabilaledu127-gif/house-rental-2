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
<meta charset="utf-8">
<title>የቤት ኪራይ </title>
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
           <li><a href="viewhousedetailcusam.php">ቤት ተከራይ </a></li>
      
        <li><a href="feedbackam.php">አስተያየት ስጥ</a></li>
             <li class="sub"><a href="#"> እይ</a>
                          <ul class="sub">
                   <li><a href="viewresponsecusam.php">ግብረ መልስ ተመልከት</a></li>
                    <li><a href="viewnewscusam.php"> አዳዲስ ነገሮችን ተመልከት</a></li></ul></li>
         <li><a href="#".php">መረጃ ተመልከት </a>
      <ul>
      <li><a href="userreportam.php">የተጠቃሚወች መረጃ</a></li><br/>
            <li><a href="#".php">የቤቶች መረጃ</a>
      <ul>
        <li><a href="totalhouseam.php">ጠቅላላ ቤት</a></li><br/>
          <li><a href="freehouseam.php">ያልተከራየ ቤት</a></li><br/>
        <li><a href="reservedhouseam.php">የተከራየ ቤት</a></li><br/>

      </ul></li></li></ul>
             <li><a href="leavehouserequestam.php">የቤት መልቀቂያ ጥያቄ</a></li>

<li><a href="Logoutam.php" onclick="islogout()">ዉጣ</a></li>
	  </div>
	  </td>

</tr>
</table>
</table>





<table style="margin-top:-12px" width="950px" border="0"color:#606060 cellpadding="0" cellspacing="0"background-color:#606060 "  ><!--content table -->
<tr >
     <td class="left_container"  height="100" width="100px" valign="top" style="background-color:#C0C0C0 " bgcolor="#C0C0C0 ">


<td  bgcolor="	#ffccff "valign="top"height="150px" width="325px" margin-top="0px" border="0px" align-top="0px"><!--center -->


	
	  <div id="pagetitle" ><!-- InstanceBeginEditable name="pagetitle" --><b> የተጠቃሚ ገጽ</b><!-- InstanceEndEditable --></div>
     	</br>
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="house"; // Database name 
$tbl_name="news"; // Table name
$con = mysqli_connect('localhost', 'root', '','house');
// Connect to server and select database.
 mysqli_connect("$host", "$username", "$password") or die("cannot connect"); 
 mysqli_select_db($con,"$db_name")or die("cannot select DB");

// select record from mysql 
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($con,$sql);

?>
<style type="text/css">
<!--
.style1 {
  font-size: 24px;
  font-weight: bold;
  font-style: italic;
}
.style2 {color: #FFFFFF}
-->
</style>


<table width="696" border="1" cellspacing="1" cellpadding="0" align="center" bordercolor="#990000">
<tr>
<td width="690"><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
    <td width="19%" height="34" bgcolor="#996633"><img src="images/lab contact.gif" width="84" height="30" align="middle"/>  </td>
<td colspan="8" bgcolor="#6699cc"><div align="center" class="style1 style2">የአዳዲስ ነገሮች መረጃ </div></td>
</tr>
<tr>
<td align="center" bgcolor="#996633"><span class="style2"><strong>መታወቂያ</strong></span></td>
<td width="29%" align="center" bgcolor="#996633"><span class="style2"><strong>ርዕስ</strong></span></td>
<td width="18%" align="center" bgcolor="#996633"><span class="style2"><strong>ቀን፡</strong></span></td>
<td width="23%" align="center" bgcolor="#996633"><span class="style2"><strong>መግለጫ</strong></span></td>
<td width="23%" align="center" bgcolor="#996633"><span class="style2"><strong> ሁኔታ</strong></span></td>

</tr>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['tittle']; ?></td>
<td width="18%" bgcolor="#FFFFFF"><?php echo $rows['date']; ?></td>
<td width="23%" bgcolor="#FFFFFF"><?php echo $rows['description']; ?></td>
<td width="23%" bgcolor="#FFFFFF"><?php echo $rows['status']; ?></td>

<td width="11%" bgcolor=""><a href='customer.php'><font color="blue">OK<font></a></td>

</tr>

<?php

// close while loop 
}

// close connection; 
mysqli_close($con);

?> 
</table></td>
</tr>
</table>
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

<font color="#fef943" face="arial">ኮፒራይት&copy  | መብቱ በህግ የተጠበቀ ነው።  2010 የጎንደር ከተማ ቤቶች ኪራይ. 
      በ ጎንደር  ዩኒቨርሲቲ ኮምቲውተር ሳይንስ 4ኛ ዓመት  <a font='yellow' href=g.html> <p>ቡድን 7  ተማሪዎች</a>የተሰራ</font>
</td></tr></table>
</td></tr></table>
</center>
</body>
</html>
