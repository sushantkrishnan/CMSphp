<?php

$S_Name=$_POST["sname"];
$S_Phone=$_POST["sphno"];
$S_Add=$_POST["sadd"];
$R_Name=$_POST["rname"];
$R_Phone=$_POST["rphno"];
$R_Add=$_POST["radd"];
$sphno0=$_POST["sphno0"];
$rphno0=$_POST["rphno0"];
require_once "connect.php";
$sql="UPDATE reciever SET R_Name='$R_Name',R_Add='$R_Add' where R_Phone='$rphno0'";
if($conn->query($sql)==TRUE){
  echo "Successfully updated";
}
else{
  echo "Error updating Record".$conn->error;
}
$sql="UPDATE sender SET S_Name='$S_Name',S_Add='$S_Add' where R_Phone='$sphno0'";
if($conn->query($sql)==TRUE){
  echo "Successfully updated";
}
else{
  echo "Error updating Record".$conn->error;
}
$sql="UPDATE reciever SET R_Name='$R_Name',R_Add='$R_Add' where R_Phone='$$rphno0'";
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
