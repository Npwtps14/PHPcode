<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type"
       content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?PHP
include "ConnectDB.php";// เรียกใช้งาน ConnectDB.php
$sql = mysqli_query($dbconnect,"SELECT * FROM customer");
?>
<p align="center">แสดงข้อมูลทั้งหมด
           (<a href="Memreg.php">เพิ่มสมาชิก</a>)</p>
<table align="center" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center">รหัส</td>
    <td align="center">ชื่อ</td>
    <td align="center">แก้ไข</td>
    <td align="center">ลบ</td>
  </tr>
<?PHP
while($result = mysqli_fetch_array($sql))
{
  echo "<tr>";
  echo "<td align=\"center\" width=\"20\" >".$result['C_id']."</td>";
  echo "<td align=\"center\" width=\"100\">".$result['CName']."</td>";
  echo "<td align=\"center\" width=\"60\">
       <a href='Useredit.php?ID=".$result['C_id']."'>แก้ไข</a></td>";
  echo "<td align=\"center\" width=\"60\">
       <a href='Userdel.php?ID=".$result['C_id']."'>ลบ</a></td>";
  echo "</tr>";
	}
	mysqli_close($dbconnect);
?>
</table>
<p>&nbsp;</p>
<p align="center"><a href="job3.php">Logout</a></p>
</body>
</html>
