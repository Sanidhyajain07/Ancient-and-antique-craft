<html>
<head>
<title>Ancient and Antique Craft</title>
<link href="default.css?v=<?php echo time();?>" rel="stylesheet" type="text/css" />

<script type="text/javascript">
function f_name(f2)
{
  
   var a=f2.name.value;
    var k=1; 
   for(i=0;i<a.length;i++)
	{
		if(a.charAt(i)>='a' && a.charAt(i)<='z' || a.charAt(i)>='A' && a.charAt(i)<='Z' || a.charAt(i)==" ")
			k++;
	}


   if(k-1==a.length && a.length!=0) 
             
         f2.name.style.background='green';
		 
  else
         f2.name.style.background='red';
}

function f_phone(f2)
{
   a=f2.phone.value;
    var k=1;
 
    for(i=0;i<a.length;i++)
	{
		if(a.charAt(i)>=0 && a.charAt(i)<=9)
			k++;
	}
    if(k-1==a.length && a.length==10)   
         f2.phone.style.background='green';
  else
         f2.phone.style.background='red';
}

function f_add(f2)
{
   a=f2.add.value; 
   if(a!="")
         f2.add.style.background='green';
  else
         f2.add.style.background='red';
}

function f_email(f2)
{
  a=f2.email.value;
  var k=0;
  for(i=0;i<a.length;i++)
	{
		if(a.charAt(i)=='@' || a.charAt(i)=='.')
		{	
			k=1;
			break;
		}
	}

     if(k==1)
          f2.email.style.background='green';
     else
         f2.email.style.background='red';
}

function f_msg(f2)
{
   a=f2.msg.value; 
   if(a!="")
         f2.msg.style.background='green';
  else
         f2.msg.style.background='red';
}
</script>
</head>
<body>
<div id="page">
  <div id="sidebar">
    <div id="logo">
      <h1><a href="index.php">Ancient and Antique Craft</a></h1>
      <h2><a href="#">Designed By:- SellVintage</a></h2>
    </div>
	<br>
    <!-- end header -->
    <div id="menu"><br>
	<br>
	<br>
	<br>
      <ul>
        <li class="first"><a href="index.php">Home</a></li>
        <li><a href="index2.php">Products</a></li>
		<li><a href="gall.php">Gallery</a></li>
  		<li><a href="index3reg.php">Registration</a></li>
        <li><a href="index9about.php">About Us</a></li>
		<li><a href="index8contact.php">Contact Us</a></li>
          <LI></LI>
      </ul>
    </div>
    <!-- end menu -->
    <img src="images/b1.jpg" width="240px" height="130px">
  </div>
  <!-- end sidebar -->
  <div id="content">
    <div><img src="images/rajasthan-handicraft-rajasthan.jpg" alt="" width="740" height="220" /></div>
    <div class="boxed">
      <h1 class="title2"><center>Welcome to Ancient and Antique Craft</center></h1>
     
    </div>
	   
	  <div class="boxed orange">
	  <div class="col-one">
       <h2 class="title3" align="center">Contact Us:</h2><br>
		<br>
		 <font face="arial"><p><b><font color="#000000">Contact Us:</font><br></b>
	  <b style="color:#333333">E-Mail Address:</b><br>SellVitage@gmail.com<br>
	  <b style="color:#333333">Address:</b><br>Udaipur Rajasthan<br>
	  <b style="color:#333333">Mobile:</b><br>+91-96607 81281<br>+91-89499 06215<br>+91-7023151906<br>
		</font>
		</div>
		
<div class="col-one">
<h2 class="title3" align="center">Customer Feedback</h2>
<form name="f2" action="" method="post">
<table height="200px" style="color:#FFFFFF" width="400px"  cellspacing="10px" cellpadding="60px">
<tr><td>Name:</td>
<td>&nbsp;&nbsp;&nbsp;<input type="text" name="name" onBlur="f_name(f2);" placeholder="Enter Your Name"  style="border-radius:20px; text-align:center; width:220px; height:30px;"/></td></tr>

<tr><td>Phone No:</td>
<td>&nbsp;&nbsp;&nbsp;<input type="text" name="phone" onBlur="f_phone(f2);"  style="border-radius:20px; width:220px; height:30px; text-align:center;" placeholder="Enter Your Phone No"/></td></tr>

<tr><td>Email-Id</td>
<td>&nbsp;&nbsp;&nbsp;<input type="email" name="email" onBlur="f_email(f2);"  style="border-radius:20px; text-align:center;width:220px; height:30px;" placeholder="Enter Your Email-Id"/></td></tr>

<tr><td>Address:</td>
<td>&nbsp;&nbsp;&nbsp;<textarea name="add"  rows="3" cols="29" onBlur="f_add(f2);"  style="border-radius:20px; text-align:center;" placeholder= "Enter Your Address"></textarea></td></tr>

<tr><td>Message:</td>
<td>&nbsp;&nbsp;&nbsp;<textarea name="msg" rows="3" placeholder="    Enter Your Message"  cols="29" style="border-radius:20px; text-align:center;" onBlur="f_msg(f2);"></textarea></td></tr>
<tr><td>  </td><td>&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<input type="submit" name="submit"  value="Send"></td></tr>
</table>
</form>	  
</div>
      <div style="clear: both;">&nbsp;</div>
    </div>
  </div>
  <!-- end content -->
  <div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<div id="footer">
  </div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$Name = $_POST['name'];    

$Email = $_POST['email'];

$Phone = $_POST['phone'];

$Address = $_POST['add'];

$Message=$_POST['msg'];

   
  require_once('info.php');
   $query='insert into contact(name,email,phone,address,message) values ("'.$_POST['name'].'","'.$_POST['email'].'","'.$_POST['phone'].'","'.$_POST['add'].'","'.$_POST['msg'].'") ';

if(mysqli_query($con,$query))
{
	echo "<script> alert('$name , Successfully Completed Feedback Form One Record Inserted');</script><br>";
	
}
	 
 else
 {
 die('Error in query:$query .'.mysqli_error($con));
 }
mysqli_close($con);
 
	   }
?>
