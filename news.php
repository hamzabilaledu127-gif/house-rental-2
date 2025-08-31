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
 
 include("config/config.php");
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
            <li><a href="viewuser.php">ManageUser </a></li>
       
        <li><a href="viewhouse.php">ManageHouse</a></li>
       <li><a href="accountresponse.php">ReturnRequest</a></li>
  <li class="sub"><a href="#"> View</a>
                          <ul class="sub">
                    <li><a href="accountrequest.php"> ViewRequest</a></li>
                   <li><a href="viewfeedback.php"> ViewFeedback</a></li>
                   </ul></li>
        <li><a href="News.php">PostNews</a></li>
       <li><a href="#".php">View Report </a>
      <ul>
      <li><a href="userreportadmin.php">User Report</a></li><br/>
            <li><a href="#".php">House Report</a>
      <ul>
        <li><a href="totalhouseadmin.php">Total House</a></li><br/>
          <li><a href="freehouseadmin.php">Free House</a></li><br/>
        <li><a href="reservedhouseadmin.php">Reserved House</a></li><br/>
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


	
	  <div id="pagetitle" ><!-- InstanceBeginEditable name="pagetitle" --><b> Administrator Page To Post News</b><!-- InstanceEndEditable --></div>
     	</br>
 <?php
$con = mysqli_connect('localhost','root', '','house');//Records per page?>
<?php
//include("ne.php");
?>  
<script type="text/javascript">
  <!--
  function AllowAlphabet(){
      
          if (!myform.tittle.value.match(/^[a-zA-Z]+$/)  && myform.tittle.value !="")
               {
                    myform.tittle.value="";
                    myform.tittle.focus(); 
                    alert("Please Enter only Alphabet value for Tittle");
               }
    }
  </script> 
      <p>&nbsp;</p>
    <div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680">
    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <font color='#ffff00'face = 'Georgia'><b><br/></b></font></h4>
          <form method="post" action="news.php" name="myform"><br/>
       
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'summary="registering account">
         <tr><td><font size="2px" face = 'oblique'>News_id: </font></td><td> 
         <input name="id" size="32" id="id" type="number" placeholder="id" required onkeyup="AllowNumeric()"></td>
     </tr>
       <tr>
     <td><font size="2px" face = 'oblique'>News_Tittle: </font></td><td>
  <input name="tittle" size="32" id="name" type="text" placeholder="Tittle" required onkeyup="AllowAlphabet()"></td>
     </tr> <tr>
     <td><font size="2px" face = 'oblique'>News_Date:</font></td><td>
  <input name="date" size="32" id="name" type="text"   value="<?php echo date('y-m-d');?>" readonly="true"></td>
     </tr>
     <tr>
     <td ><b><font size="2px" face = 'oblique'>Write Descrption here</font></b></td>
    
     <td><textarea name="comment" id="comment" placeholder="Write Descrption here" cols="34" rows="7" width="200px" required></textarea></center></td>
     </tr>
<tr>
<td>&nbsp;</td>
              <td></td>
<tr>
<td><center><input value="post" name="sent" type="Submit" Onclick="return check(this.form);"/>
<input name="clear" type="reset" Value="Clear"></center></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

</tr>
        </tr> </table></form>  
        
      
         
    </div>
         
     
     
    <?php
 if(isset($_POST['sent']))
 {
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","house");
$conn=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("house", $conn);

$sql="INSERT INTO news (id,tittle ,date, description ,status)
VALUES
('$_POST[id]','$_POST[tittle]','$_POST[date]','$_POST[comment]','1')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo '<img src="images/492.png" > &nbsp;! News has been Post Successfully!';

      echo' <meta content="2;news.php" http-equiv="refresh" />';
}
//mysql_close($conn)
?>

   <?php
  //include("footerIndex.php");
  ?>
  <?php
  //include("config.php");
  ?>


?>
<td class="right_container" valign="top" width="100px" height="100px"">

<table class="right"  style="margin-top:0px;color:#FFFF00;background-color:#c0c0c0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c0c0c0">

<tr>
<td class="right" height="100px" width="50px" border="1px" valign="top" align="center"bgcolor="#c0c0c0 "border="1px" >
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
