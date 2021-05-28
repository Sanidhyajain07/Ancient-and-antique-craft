<html>
<head>
<title>Ancient and Antique Craft</title>
<link href="default.css?v=<?php echo time();?>" rel="stylesheet" type="text/css" />
<style>
		  
input[type="text"],input[type="password"],select
{
	border: 0px;
	border-radius: 20px;
	width: 250px;
	height: 25px;
	text-align: center;
}


input[type="button"]
{
border: 0px;
	border-radius: 20px;
	width: 150px;
	height: 25px;
	text-align: center;
}

input[type="date"],select
{
    border-radius: 20px;
	width: 200px;
	height: 30px;
	text-align: center;
	border: 0px;
}

textarea
{
    border-radius: 20px;
	width: 250px;
	border: 0px;
	text-align: center;
}

select
{
    border-radius: 20px;
	width: 200px;
	border: 0px;
	text-align: center;
}
  
input[type="submit"]
{
	background:#007900;
	border: 1px solid #000;
	border-radius: 30px;
	width: 100px;
	height: 30px;
	text-align: center;
}
		  
</style>
<script language="javascript">
function f_uname(f2)
{
  
   var a=f2.uname.value;
    var k=1; 
   for(i=0;i<a.length;i++)
	{
		if(a.charAt(i)>='a' && a.charAt(i)<='z' || a.charAt(i)>='A' && a.charAt(i)<='Z' || a.charAt(i)==" ")
			k++;
	}


   if(k-1==a.length && a.length!=0) 
   {          
         f2.um.value="Correct";
		 f2.um.style.color='green';
		 
	}	 
  else
   {     
   		 f2.um.value="Wrong";
		 f2.um.style.color='red';
	}
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
	{
	  f2.um6.value="Correct";
	  f2.um6.style.color='green';
	}
      
  else
  {
		 f2.um6.value="Wrong";
		 f2.um6.style.color='red';
}
}

function f_add(f2)
{
  
   a=f2.add.value; 
   if(a!="")
   {
    f2.um7.value="Correct";
		 f2.um7.style.color='green';
   }
         
  else
       {
	    f2.um7.value="Wrong";
		 f2.um7.style.color='red';
	   }
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
          {
		   f2.um8.value="Correct";
		 f2.um8.style.color='green';
		  }
     else
	 {
	  f2.um8.value="Wrong";
		 f2.um8.style.color='red';
	 }
}
	 
 
function f_pass(f2)
{
  
   a=f2.pass.value; 
   if(a!="")
         {
        f2.um9.value="Correct";
		 f2.um9.style.color='green';
         
         } 
  else
       {       
        f2.um9.value="Wrong";
		 f2.um9.style.color='red';
       }
}


var a,b,c,d;
var p,q,r,s;

    function gen(f2)
    {
  
      a=parseInt(Math.random(2)*4%100);
      b=parseInt(Math.random(2)*4%100);
      c=parseInt(Math.random(2)*4%100);
      d=parseInt(Math.random(2)*4%100);

      p=a+".png";
      q=b+".png";
      r=c+".png";
      s=d+".png";
      
      f2.img1.src=a+".png";
      f2.img2.src=b+".png";
      f2.img3.src=c+".png";
      f2.img4.src=d+".png";
    }

 function verify(f2)
    { 
      var ch=f2.t2.value;
      var val;
      var w,x,y,z;

      if(p=="0.png")
          w='0';
        if(p=="1.png")
          w='1';   
        if(p=="2.png")
          w='2';
        if(p=="3.png")
          w='3';
        if(p=="4.png")
          w='4';


        if(q=="0.png")
          x='0';
        if(q=="1.png")
          x='1';   
        if(q=="2.png")
          x='2';
        if(q=="3.png")
          x='3';
        if(q=="4.png")
          x='4';

        if(r=="0.png")
          y='0';
        if(r=="1.png")
          y='1';   
        if(r=="2.png")
          y='2';
        if(r=="3.png")
          y='3';
        if(r=="4.png")
          y='4';


        if(s=="0.png")
          z='0';
        if(s=="1.png")
          z='1';   
        if(s=="2.png")
          z='2';
        if(s=="3.png")
          z='3';
        if(s=="4.png")
          z='4';
 
      val=w+x+y+z;

      if(val==ch)
      {
        f2.cmsg.style.color='green';
        f2.cmsg.value="Matched";
      }else
      {
        f2.cmsg.style.color='red';
        f2.cmsg.value="Wrong";
      }

    }   
  
</script>
</head>
<body onLoad="gen(f2);">
<div id="page">
  <div id="sidebar">
    <div id="logo">
      <h1><a href="#"></a></h1>
      <h2><a href="index.php">Designed By Team:- SellVintage</a></h2>
    </div>
    <!-- end header --><br><br><br>
    <div id="menu"><br><br><br><br>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index2.php">Products</a></li>
		<li><a href="gall.php">Gallery</a></li>
  		<li><a href="index3reg.php">Registration</a></li>
        <li><a href="index9about.php">About Us</a></li>
		<li><a href="index8contact.php">Contact Us</a></li>
		<li></li>
      </ul>
    </div>
    <!-- end menu -->
    
  <img src="images/b1.jpg" width="240px" height="100px"> 
    
  </div>
  <!-- end sidebar -->
  <div id="content">
    <div><img src="images/rajasthan-handicraft-rajasthan.jpg" alt="" width="740" height="220" /></div>
    <div class="boxed">
      <h1 class="title2"><center>Welcome to Ancient and Antique Craft</center></h1><br>
     <h2><font color="#B35900"><center>REGISTRATION FORM</center></font></h2>
	 
<!-- table begin-->
<br>
<center>
<form name="f2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table cellspacing="7px" cellpadding="20" background="bg.jpg" bgcolor="#F45000"  style="color:#FFFFFF" width="500px" height="300px" align="center">
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="uname" placeholder="Enter Your User name Name" onKeyPress="f_uname(f2)" onKeyUp="f_uname(f2)" maxlength="15" onBlur="f_uname(f2);"><input type="text" name="um" disabled style="border: 0px; background: none;height: 20px; width: 70px; color:green;"></td></tr>

<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> Male :</b><input type="radio" name="g" value="male" checked="checked">
<b> Female :</b>  <input type="radio" value="female" name="g"></td></tr>


<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone No.</td><td><input type="text" name="phone" placeholder="Enter Your Phone No" onBlur="f_phone(f2);"   onKeyPress="f_phone(f2)" onKeyUp="f_phone(f2)" maxlength="10">
<input type="text" name="um6" disabled style="border: 0px; background: none;height: 20px; width: 70px; color:green;">
</td></tr>
 

<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email-Id </td><td><input type="text" name="email" maxlength="20" placeholder="Enter Your Email -Id " onBlur="f_email(f2);" onKeyPress="f_email(f2)" onKeyUp="f_email(f2)">
<input type="text" name="um8" disabled style="border: 0px; background: none;height: 20px; width: 70px; color:green;">
</td></tr>

<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password</td><td><input type="password" name="pass" maxlength="8" placeholder="Enter Your Password" onBlur="f_pass(f2);" onKeyPress="f_pass(f2)" onKeyUp="f_pass(f2)">
<input type="text" name="um9" disabled style="border: 0px; background: none;height: 20px; width: 70px; color:green;">
</td></tr>

<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address</td>
<td><textarea rows="3" name="address" placeholder="  Enter Your Address"  onBlur="f_add(f2);" onKeyPress="f_add(f2)" onKeyUp="f_add(f2)"></textarea>
<input type="text" name="um7" disabled style="border: 0px; background: none;height: 20px; width: 70px; color:green;">
</td></tr>

<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Image</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;
  <img width="50" height="50" name="img1">
      
      <img width="50" height="50" name="img2">
      
      <img width="50" height="50" name="img3">
      
      <img width="50" height="50" name="img4">

      &nbsp;&nbsp;<input type="text" name="cmsg" value="" disabled style="border: 0px; background: none;height: 20px; width: 70px;">

</td></tr>

<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspVerify</td><td><input type="text" name="t2" placeholder="Enter Image" onFocus="verify(f2)" onBlur="verify(f2)" onKeyPress="verify(f2)" onKeyUp="verify(f2)"></td></tr>

<tr><td align="center" colspan="2"><hr><input type="button" name="b1" value="Try Another Image"  onClick="gen(f2);"><hr></td></tr>

<tr><td colspan="2"><center><input type="submit"  size="20" value="submit" name="submit" ><hr></center></td></tr> 

</table>
</form>
</center>
<!-- table end-->      
    </div>
      </div>
  <!-- end content -->
  <div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<div id="footer">
<footer style="background-color:black">
  <br>
  <p style="text-align:center;color:white">Copyright &copy; 2021 - All Rights Reserved - <a href="#" style="color:#FFFFFF;">ANCIENT AND ANTIQUE CRAFT</a></p>
</footer>  
</div>

<?php
if(isset($_POST['submit']))
{
$username= $_POST['uname'];    
$password = $_POST['pass'];
$gender = $_POST['g'];    
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
    

 $con = mysqli_connect("localhost","root","","handicraft") or die('Unable to Connect');
	   $dbselect = mysqli_select_db($con, 'handicraft')  or die('Unable to Connect !');
	   $query='insert into registration(username,password,gender,email,phone,address) values ("'.$_POST['uname'].'","'.$_POST['pass'].'","'.$_POST['g'].'","'.$_POST['email'].'","'.$_POST['phone'].'","'.$_POST['address'].'") ';

if(mysqli_query($con,$query))
{
	echo "<script> alert('$uname , Successfully Completed Registration Form One Record Inserted');</script><br>";
	
}
	 
 else
 {
 die('Error in query:$query .'.mysqli_error($con));
 }
mysqli_close($con);
 
	   }

?>

</body>
</html>
