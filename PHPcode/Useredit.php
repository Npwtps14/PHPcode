<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="Useredit2.php">
<?PHP
session_start();
$_SESSION['id'] = $_REQUEST['ID'];
$Cid = $_REQUEST['ID'];
include "ConnectDB.php";
$sql = "SELECT * FROM customer WHERE C_id=$Cid";
$qsql = mysqli_query($dbconnect,$sql);
$result = mysqli_fetch_array($qsql);
?>
  <p align="center">Member Edit :   </p>
  <table width="400" border="0" align="center" cellpadding="0"
           cellspacing="0">
    <tr>
      <td height="39">ID : </td>
      <td height="39"><?PHP echo $result['C_id'];?></td>
    </tr>
    <tr>
      <td width="141" height="39">Name :</td>
      <td width="253" height="39">
      <input name="Name" type="text" id="Name"
            value="<?PHP echo $result['CName'];?>" size="40" /></td>
    </tr>
    <tr>
      <td height="39">Username : </td>
      <td><?PHP echo $result['CUser'];?></td>
    </tr>
    <tr>
      <td height="41">Password : </td>
      <td>
      <input type="text" name="Passwd" id="Passwd"
            value="<?PHP echo $result['CPass'];?>" /></td>
    </tr>
    <tr>
      <td height="39">Status : </td>
      <td><?PHP echo $result['CStatus'];?></td>
    </tr>
    <tr>
      <td height="36" colspan="2" align="center">
      <input type="submit" name="button" id="button" value="Submit" />
      <input type="reset" name="Reset" id="Reset" value="Reset" />
    </td>
    </tr>
  </table>
</form>
</body>
</html>
