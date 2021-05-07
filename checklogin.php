<?PHP 
	session_start();
	include 'info.php';
	$username=$_POST['uname'];
    $password=$_POST['pass'];
	if(isset($_POST['submit']))
	{
		
if($username=="")
{
	header('location:index.php');
	
}
 if($password=="")
{
	header('location:index.php');
	
}
 else
 {
$query="select * from registration where username='".$username."' and password='".$password."'";
$res=mysql_query($query);
$res1=mysql_fetch_array($res);
if($res1!="")

  
{
$_SESSION['uname']=$res1[username];

header('Location: index7gallery.php');
}
	 
else
{
header('Location: index.php');
}
}
	}
	
?>
