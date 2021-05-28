<html>
<head>
<title>Ancient and Antique Craft</title>
<link href="default.css?v=<?php echo time();?>" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="page">
  <div id="sidebar">
    <div id="logo">
      <h1><a href="#"></a></h1>
      <h2><a href="index.php">Designed By Team:- SellVintage</a></h2>
    </div>
    <!-- end header -->
    <div id="menu">
      <ul>
        <li class="first"><a href="index.php">Home</a></li>
        <li><a href="index2.php">Products</a></li>
		<li><a href="index7gallery.php">Gallery</a></li>
  		<li><a href="index3reg.php">Registration</a></li>
        <li><a href="index8contact.php">Contact us</a></li>
        <li><a href="index9about.php">About us</a></li>
      </ul>
    </div>
    <!-- end menu -->
    <div id="login">
      <h2 class="title1">Customer Login</h2>
      <form id="form1" method="post" name="f1" action="index7gallery.php">
		<table style="font-family:'Times New Roman', Times, serif; color:#FFFFFF">
		<tr><td><h2 style="color:#FFFFFF">Username:</h2></td></tr><tr><td>
        <input type="text" name="username" style="border-radius: 20px; text-align:center; height:25px;"/></td></tr>
        <tr><td><h2 style="color:#FFFFFF">Password:</h2></td></tr>
		<tr><td><input name="pass" type="password"  style="border-radius: 20px; text-align:center;  height:25px"/></td></tr>
		<tr><td align="center"><input type="submit" name="submit" value="Sign In" /></td></tr>
          
		  <tr><td align="center" colspan="2"><a href="forgot.php">Forgot Password</a> </td></tr>
		  </table>
      </form>
    </div>
  </div>
  <!-- end sidebar -->
  <div id="content">
    <div><img src="images/rajasthan-handicraft-rajasthan.jpg" alt="" width="740" height="220" /></div>
    <div class="boxed">
      <h1 class="title2"><center>Welcome to Ancient and Antique Craft</center></h1>
     
	 
	 
	 <font face="Times New Roman, Times, serif" color="#000099" size="+3"><center>Password Reset</center></font><br><br>

<form name="forgot"  method="post">
<table align="center" width="690" bgcolor="#FFDBB7" height="100" style="color:#333333">
<tr><td align="center" colspan="2"><img src="images/userpic.gif"></td></tr>
<tr><td colspan="2"><h2 align="center">Forgot Password Form</h2></td></tr>
<tr><td align="center">Email Id</td></tr>
<tr><td align="center"><input type="text" name="email" placeholder="Enter Email-Id" style="border-radius: 20px; text-align:center;  height:25px" size="25"/></td></tr>
<tr><td align="center">New Password</td></tr>
<tr><td align="center"><input type="text"  name="password" placeholder="Enter New Password" style="border-radius: 20px; text-align:center;  height:25px" size="25"/></td></tr>
<tr><td colspan="2" align="center"><a href=""><input type="submit" name="submit" value="Submit" /></a></td></tr>
<tr>
<?php
if(isset($_POST['submit']))
 {
   $email=$_POST['email'];
   $npwd=$_POST['password'];
   
  require_once('info.php');
   $query="select * from registration where email='$email'";
   $result=mysqli_query($con,$query) or die(error);
   if(mysqli_num_rows($result))
   {
	 $que="update registration set password='$npwd' where email='$email'";
	 $res=mysqli_query($con,$que) or die(error);
	 $res=mysqli_query($con,$que) or die(error);
     echo "<td align=center>Password Reset Successful.<br><a href='index.php'>Click Here to Login Now!!!</a></td>";   
	 }else
	 {
	  echo "<td align='center'>No user exist with this email id.</td>";
	 }
   }
?>	
</td></tr>
</table>
</form> 

    </div>
     
      <div style="clear: both;">&nbsp;</div>
   
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
</body>
</html>

