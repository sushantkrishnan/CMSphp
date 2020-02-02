<?php
$Did=$_POST["Did"];
$CourNo=$_POST["CourNo"];
$CourWeight=$_POST["CourWeight"];
$CourType=$_POST["CourType"];
$branchcode=$_POST["branchcode"];
$sid=$_POST["sid"];
$status=$_POST["status"];
$arrivaltime=$_POST["arrivaltime"];
$did0=$_POST["did0"];
require_once "connect.php";
$sql="UPDATE delivery natural join courier as CourNo set CourNo='$CourNo',CourWeight='$CourWeight',CourType='$CourType',branchcode='$branchcode',sid='$sid',status='$status',arrivaltime='$arrivaltime' where Did='$did0'";
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
