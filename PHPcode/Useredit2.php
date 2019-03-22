<?PHP
session_start();
$CName = $_REQUEST['Name'];
$CPasswd = $_REQUEST['Passwd'];
include "ConnectDB.php";
$sql = "UPDATE customer SET CName = '$CName' , CPass = '$CPasswd'
     WHERE C_id = ".$_SESSION['id'];
$result = mysqli_query($dbconnect,$sql);
if ($result)
{
	echo "Record Updated";
	echo "<meta http-equiv='refresh' content='2;url=showall.php' />";
}
else
{
	echo "Update Error";
	echo "<meta http-equiv='refresh' content='2;url=showall.php' />";
}
?>
