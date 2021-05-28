<html>
<head>
<title>Ancient and Antique Craft</title>
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="page">
  <div id="sidebar">
    <div id="logo">
      <h1><a href="#"></a></h1>
      <h2><a href="index.php">Designed By Team:- SellVintage</a></h2>
    </div><br><br>
    <!-- end header -->
	 <img src="images/nb4.png" width="240px" height="350px">
    <!-- end menu -->
   
  </div>
  <!-- end sidebar -->
  <div id="content">
    <div><img src="images/rajasthan-handicraft-rajasthan.jpg" alt="" width="740" height="220" /></div>
    <div class="boxed">
    <h1 class="title2"><center>Welcome to Ancient and Antique Craft</center></h1><br><br>
    <center><h3><font size="+3" color="#800000"><b>Contact Record Display</b></font></h3></center>
	<div class="boxed orange">
    
	<?php

     require_once('../info.php');
	  
	   $query="SELECT * FROM contact";
	   $result = mysqli_query($con, $query) or die("query failed".mysqli_error($con));
	   
	   echo "<br><table width='400px' bgcolor='#ffffff' align='center' cellspacing='20px' cellpadding='20px'>";
	   
	   echo "<tr>";
	   echo "<th> Name</th><th>Phone No</th><th>Email</th><th>Address</th><th>Message</th>";
	   echo "</tr>";
	   
	   
	   while($row = mysqli_fetch_array($result))
	    {
		echo "<tr>";
		echo "<td>", $row['name'], "</td><td>" , $row['phone'], "</td><td>" , $row['email'], "</td><td>" ,$row['address'], "</td><td>", $row['message'];
		echo "</tr>";
		}
   
      echo "</table>";
       
       mysqli_close($con);	   
	  ?> <br>
	
	
    </div>
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
