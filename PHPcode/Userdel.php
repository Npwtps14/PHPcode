<?PHP
$Cid = $_REQUEST['ID'];
include "ConnectDB.php";
$dsql = "DELETE FROM customer WHERE C_id=$Cid";
$sql = mysqli_query($dbconnect,$dsql);
if ($sql)
{
	echo "Record Deleted.";
	echo "<meta http-equiv='refresh' content='2;url=showall.php' />";
}
else
{
	echo "Delete Error";
	echo "<meta http-equiv='refresh' content='2;url=showall.php' />";
}
?>
