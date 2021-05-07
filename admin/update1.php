<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>
<form action="update.php" method="post">

<table width="600">
  <tr>
    <td>Name</td>
    <td>Email</td>
    <td>Password</td>

    <td>city</td>
    <td>State</td>
    <td>Contact no</td>
    
  </tr>
 <?php
  include 'menus.php';
  include 'comman.php';
$id=$_GET['id'];

$sql="SELECT * FROM signup WHERE id='$id'";
$result=mysqli_query($sql);
$row=mysqli_fetch_array($result);
{
	
?>
<tr>

<td align="center"><input name="nam" type="text" id="nam" value="<?php echo $row['name'];?>"></td>
<td align="center"><input name="email" type="text" id="email" value="<?php echo  $row['email'];?>" size="15"></td>
<td><input name="password" type="text" id="password" value="<?php echo $row['password'];?>" size="15"></td>
<td><input name="city" type="text" id="city" value="<?php echo  $row['city'];?>" size="15"></td>
<td><input name="state" type="text" id="state" value="<?php echo $row['state'];?>" size="15"></td>
<td><input name="contact" type="text" id="contact" value="<?php echo $row['contact'];?>" size="15"></td>

</tr>
<tr><td><input name="id" type="hidden" id="id" value="<?php echo $row['id'];?>"></td></tr>

<tr>
<td align="center"><input type="submit" name="submit" value="update"></td>


</tr>
<?php
}
?>

</table>
</form>
</td>
</tr>
</table>
</body>
</html>