<?php

  $sid=$_POST["sid"];
  $staffname=$_POST["staffname"];
  $staffphone=$_POST["staffphone"];
  $staffaddress=$_POST["staffadd"];
  $branchcode=$_POST["branchcode"];
  $branchname=$_POST["branchname"];
  $emptype=$_POST["emptype"];
  $sid0=$_POST["sid0"];
require_once "connect.php";
$sql="UPDATE stafftable natural join branchtable as branchcode set sid='$sid',staffname='$staffname',staffphone='$staffphone',staffadd='$staffaddress',branchcode='$branchcode',branchname='$branchname',emptype='$emptype' where sid='$sid0'";
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
