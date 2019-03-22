<?PHP
$CName = $_REQUEST['Name'];
$CUname = $_REQUEST['Uname'];
$CPasswd = $_REQUEST['Passwd'];
$CStatus = $_REQUEST['Status'];
include "ConnectDB.php";
$sql = "SELECT * FROM customer WHERE Cuser='$CUname'";
$qsql = mysqli_query($dbconnect,$sql);
$result = mysqli_fetch_array($qsql);
if ($result)
{
	echo "Username is used"	;
	echo "<meta http-equiv='refresh' content='2;url=showall.php' />";
}
else
{
	$insql =  "INSERT INTO customer VALUES (NULL,'$CName', '$CUname', '$CPasswd','$CStatus')";
	$qinsql = mysqli_query($dbconnect,$insql);
	if($insql)
	{
		echo "Insert Complete";
		echo "<meta http-equiv='refresh' content='2;url=showall.php' />";
	}
	else
	{
		echo "Error";
		echo "<meta http-equiv='refresh' content='2;url=showall.php' />";
	}
}
?>
