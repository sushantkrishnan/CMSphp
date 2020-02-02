<?php

$BID=$_POST["bid"];
$CourNo=$_POST["cno"];
$S_Phone=$_POST["spno"];
$R_Phone=$_POST["rpno"];
$BookingDate=$_POST["bdate"];
$Deltype=$_POST["dtype"];
$bid0=$_POST["bid0"];
require_once "connect.php";
$sql="UPDATE  bookingtable SET BID='$BID' ,CourNo='$CourNo', S_Phone='$S_Phone',R_Phone='$R_Phone',BookingDate='$BookingDate',Deltype='$Deltype' where BID='$bid0'";
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
