<?php   
 session_start();
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
            <li><a href="uploadhouse.php">UploadHouse </a></li>
       
        <li><a href="viewhouseemp.php">UpdateHouse</a></li>
       <li><a href="sendresponse.php">SendResponse</a></li>

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
<li><a href="home.php" onclick="islogout()">Logout</a></li> 
    
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
$con = mysqli_connect('localhost','root', '','house');?>
<?php
$ctrl = $_REQUEST['key'];
$query="SELECT * FROM register where housenumber='{$ctrl}'";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
if($count==1){
while($row=mysqli_fetch_array($result)){
$row0=$row[0];
$row1=$row[1];
$row2=$row[2];
$row3=$row[3];
$row4=$row[4];
$row5=$row[5];
$row6=$row[6];
$row7=$row[7];
$row8=$row[8];
$row9=$row[9];
$row10=$row[10];
$row11=$row[11];
$row12=$row[12];

}
?>
  <br><br>
 <table valign='top' align="center" style="width:250px; height:150px;border-radius:16px;border:2px solid #686868">
<tr>
<td></td>
<td align="right"><a href="viewhouseemp.php"><img src="IMG/close.jpg" title="Close"></a></td></tr>
 <tr>
<td><font face="times new roman" color="#336699" size="3"><b>Image:</b></font></td><td><?php echo $row0?></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>FirstName:</b></td><td><?php echo $row1?></td>
</tr>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>LastName:</b></td><td><?php echo $row2?></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Email:</b></td><td><?php echo $row3?></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>PhoneNumber:</b></td><td><?php echo $row4?></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Kebele:</b></td><td><?php echo $row5?></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Number of Room:</b></td><td><?php echo $row6?></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>HouseNumber:</b></td><td><?php echo $row7?></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Price:</b></td><td><?php echo $row8?></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Floor:</b></td><td><?php echo $row9?></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Status:</b></td><td><?php echo $row10?></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Type:</b></td><td><?php echo $row11?></td>
</tr>
<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Date:</b></td><td><?php echo $row12?></td>
<!--<tr>
<td><font face="times new roman" color="#336699" size="3"><b>Photo:</b></td>
<td><img width="100px" height="100px" src="<?php echo $row9;?>"></td>
</tr>-->
</table>
 
 <?php
}
    

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
