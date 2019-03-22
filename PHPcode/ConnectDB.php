<?PHP
/* mysqli_connect("ชื่อServer","ชื่อผู้ใช้ของ mysql",
"รหัสผ่านของ mysql","ชื่อ database")*/
$dbconnect = mysqli_connect("localhost","root","","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
