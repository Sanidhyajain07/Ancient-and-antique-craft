


<?php
	
	/*-- we included connection files--*/
	include "info.php";

	$db = mysqli_connect("localhost", "root", "", "handicraft") or die("Could not connect to database." .mysqli_error());
	// mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
	$image_query = mysqli_query($db,"select Type,Productname,filename from products");
	while($rows = mysqli_fetch_array($image_query))
	{
		$Type = $rows['Type'];
		$Productname = $rows['Productname'];
		$filename = $rows['filename'];
	?>
	
	<div class="img-block">
	
	
	<img src="<?php echo $filename; ?>" alt="" title="<?php echo $Productname; ?>" class="img-responsive" width="300" height="300"/>
	
	<p><strong><?php echo "Product Type:"," ",$Type,", ","Productname:"," ",$Productname; ?></strong></p>
	</div>
	
	<?php
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>ALL Products</title>
</head >

<body background="images/Background.jpg">
</body>
</html>
