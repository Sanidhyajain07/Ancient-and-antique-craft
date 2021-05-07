<?PHP 
	session_start();
	include 'info.php';
	$username=$_POST['user'];
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


$query="select * from admin where username='".$username."' and password='".$password."'";
$res=mysql_query($query);
$res1=mysql_fetch_array($res);
if($res1!="")

  
{
$_SESSION['username']=$res1[username];

header('Location: information.php');
}
	 
else
{
header('Location: index.php');
}
}
	}
	
?>
