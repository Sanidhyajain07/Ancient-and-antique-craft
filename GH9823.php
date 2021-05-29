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
	<br><br>
	    <div id="menu">
      <ul>
	  <br>
        <li><a href="index.php">Home</a></li>
        <li><a href="index2.php">Products</a></li>
		<li><a href="gall.php">Gallery</a></li>
  		<li><a href="index3reg.php">Registration</a></li>
        <li><a href="index9about.php">About Us</a></li>
		<li><a href="index8contact.php">Contact Us</a></li>
		<li></li>
      </ul>
    </div>
	 <img src="images/b1.jpg" width="240px" height="10px">
    <!-- end menu -->
   
  </div>
  <!-- end sidebar -->
  <div id="content">
    <div><img src="images/rajasthan-handicraft-rajasthan.jpg" alt="" width="740" height="220" /></div>
    <div class="boxed">
    <h1 class="title2"><center>Welcome to Ancient and Antique Craft</center></h1><br><br>
    
	<center><div class="boxed orange">
        <br>
	    <img src="images/Glass-Handicraft_250x250.jpg" height="250" width="250"><br><br>Product Name:Roman Glass<br><br>Specifications:
Size:4.5 Inches<br>
Style: Designing on glass<br>
Origin: Egypt<br>
Care: Don't wash, use dry cotton cloth to remove dirt.<br><b>Price: Rs-2500/-</b><br><b> Cash on Delivery: During 6 - 7 Days</b></b><br>
<br>
		<a href="myorders.php">
    <input type="submit" name="submit" value="Confirm">
    </a> 
  <a href="index14galleryglass.php">
	    <input type="reset" name="reset" value="Cancel">
    </a>

    </div>
	</center>
   
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



</body>
</html>

<?php
     session_start();
     session_register('variable_name');
     $_SESSION['variable_name']=variable_value;
?>