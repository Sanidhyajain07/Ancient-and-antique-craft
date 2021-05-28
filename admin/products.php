
<?php
error_reporting(0);
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$Type = $_POST['type'];  
    $Name = $_POST['name']; 
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "images/".$filename;
		
	$db = mysqli_connect("localhost", "root", "", "handicraft");

		// Get all the submitted data from the form
		$sql = "INSERT INTO products (filename,Type,Productname) VALUES ('$folder','$Type','$Name')";

		// Execute query
		mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	}
}
$result = mysqli_query($db, "SELECT * FROM products");
while($data = mysqli_fetch_array($result))
{

	?>
<img src="<?php echo $data['Filename']; ?>">

<?php
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
</head >
<body background="images/Background.jpg">
<div id="content">
	<form method="POST" action="" enctype="multipart/form-data">
<center><div>
		<tr><td><h3 style="color:#000000">Type:</h3></td></tr><tr><td>
        <input type="text" name="type" style="border-radius: 20px; text-align:center; height:25px;"/></td></tr>
        <tr><td><h3 style="color:#000000">Productname:</h3></td></tr>
		<tr><td><input name="name" type="text"  style="border-radius: 20px; text-align:center;  height:25px"/></td></tr></div>

	<br><input type="file" name="uploadfile" value=""/></br>
	
	<div>
		<br><button type="submit" name="upload">UPLOAD</button></br>
	</div>

</form>
</center>
<center><br><br><a href="allproducts.php">
     <button type="submit">View All Products</button> 
   </a></br></center>
</div>
</body>
</html>
