<?php

include('info.php');

$id=$_POST["id"];
$a=$_POST["nam"];
$b=$_POST["email"];
$c=$_POST["password"];

$e=$_POST["city"];
$f=$_POST["state"];
$g=$_POST["contact"];
if($_POST['submit'])
{
	$sql1="UPDATE signup SET name='".$a."',email='".$b."',password='".$c."',city='".$e."',state='".$f."',contact='".$g."' WHERE id='".$id."'";
$r=mysqli_query($sql1);

if($r)
{
echo "update successful";
echo "<br/>";
echo "<a href='member.php'>back to main page</a>";

}
else
{
echo "ERROR";
}
}
?>

