<html>
<head>
<title>Handicraft World</title>
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="page">
  <div id="sidebar">
    <div id="logo">
      <h1><a href="index.php">Handicraft World</a></h1>
      <h2><a href="#">Designed By:- Dipesh Kumawat</a></h2>
    </div><br><br>
    <!-- end header -->
	 <img src="images/b4.png" width="240px" height="350px">
    <!-- end menu -->
   
  </div>
  <!-- end sidebar -->
  <div id="content">
    <div><img src="images/rajasthan-handicraft-rajasthan.jpg" alt="" width="740" height="220" /></div>
    <div class="boxed">
    <h1 class="title2"><center>Welcome to Handicraft World</center></h1><br><br>
    <center><h3><font size="+3" color="#800000"><b>Registration Display</b></font></h3></center><br>
	<center>
    
	<?php

     require_once('../info.php');
	  
	   $query="SELECT * FROM registration";
	   $result= mysql_query($query) or die("query failed".mysql_error());
	   
	   echo "<table bgcolor='#ffffff' align='center' cellspacing='16px' cellpadding='20px'>";
	   
	   echo "<tr>";
	   echo "<th> User Name</th><th>Gender</th><th>Phone No</th><th>Email</th><th>Address</th><th>Password</th>";
	   echo "</tr>";
	   
	   
	   while($row = mysql_fetch_array($result))
	    {
		echo "<tr>";
		echo "<td>", $row['username'], "</td><td>" ,$row['gender'], "</td><td>" , $row['phone'], "</td><td>" , $row['email'], "</td><td>" ,$row['address'], "</td><td>", $row['password'];
		echo "</tr>";
		}
   
      echo "</table>";
       
       mysql_close($con);	   
	  ?> <br>
	
	
    </center>
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
