<?php

$branchcode= $_POST["bid"];
$branchname=$_POST["bname"];
$branchaddress=$_POST["badd"];
$bid0=$_POST["bid0"];
require_once "connect.php";
$sql="UPDATE  branchtable SET branchcode='$branchcode' ,branchname='$branchname', branchaddress='$branchaddress' where branchcode='$bid0'";
if($conn->query($sql)==TRUE){
  echo "Successfully updated";
}
else{
  echo "Error updating Record".$conn->error;
}
 ?>

 <html>
 Successfully updated
</html>
