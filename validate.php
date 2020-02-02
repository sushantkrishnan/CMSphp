
<?php
require_once "connect.php";
$uname=$_POST['login'];
$pass=$_POST['password'];
if($conn->query("SELECT * from login where USERNAME='$uname'")==TRUE && $pass=="admin")
{
  header("Location:admin.php");
}
else if($conn->query("SELECT * from login where USERNAME='$uname'")==TRUE && $pass=="employee")
{
  header("Location:employee.php?login=$uname");
}
else if($conn->query("SELECT * from login where USERNAME='$uname'")==TRUE && $pass=="manager")
{
  header("Location:manager.php?login=$uname");
}
else if($conn->query("SELECT * from login where USERNAME='$uname'")==TRUE && $pass=="customer")
{
  header("Location:customer.php?login=$uname");
}
else{
  header("Location:index.php");
}
 ?>
