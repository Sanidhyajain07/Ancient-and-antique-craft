<html>
<head>
	<title>Search Results :: admin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h1 align="center"><u>SEARCH RESULTS</u></h1>
<table id="result">

<?php
if(isset($_POST['submit']))
{
	$id=$_POST['serial']; 
	 
	$con=mysql_connect("localhost","root","") or die('Unable to Connect');
	mysql_select_db('handicraft',$con)  or die('Unable to Connect !');

	$query="SELECT id,username,phone,email,address FROM registration WHERE id='".$_POST['serial']."'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);

	//echo "<table id='result'>";

	echo "<tr>";
   echo "<td>ID</td>";
	echo "<td>NAME</td>";
	echo "<td>PHONE NO</td>";	
	echo "<td>EMAIL ID</td>";
	echo "<td>ADDRESS</td>";
	
	echo "</tr>";

	if ($count==1)
	{
		while($row=mysql_fetch_row($result))
		{
			$nam=$row[0];
			$phn=$row[1];
			$em=$row[2];
            $adds=$row[3];
             $id=$row[4];
			//echo "found passserialno   ".$passserial;

			echo "<tr>";
			echo "<td>".$nam."</td>";
			echo "<td>".$phn."</td>";
			echo "<td>".$em."</td>";
			echo "<td>".$adds."</td>";
			echo "<td>".$id."</td>";
			echo "</tr>";
		}
			//echo "</table>";

	}
	else
	{

		echo "OOPS, SORRY NO MATCH FOUND FOR".$id;

	}

	mysql_close($con);

}	
?>
</table>
</body>
</html>