
<?php
require_once "connect.php";
$uname=$_GET["login"];
function VBOOK()
{
  header("Location:VBOOK.php");
}
function VEMP()
{
  header("Location:VEMP.php");
}
function VPDEL()
{
  $_COOKIE['login']=$uname;
  header("Location:VPDEL.php");

}
function VBDET()
{
  header("Location:VBDET.php");
}
function VCDET()
{
  header("Location:VCDET.php");

}
function VMDET()
{
  header("Location:VMDET.php");
}
function MBOOK()
{
  header("Location:MBOOK.php");
}
function MEMP()
{
  header("Location:MEMP.php");
}
function MDEL()
{
  header("Location:MDEL.php");
}
function MBDET()
{
  header("Location:MBDET.php");
}
function MCDET()
{
  header("Location:MCDET.php");
}
function CPDEL()
{
  header("Location:CPDEL.php");
}
$action=$_GET['action'];
if($action=="VEMP")
VEMP();
else if($action=="VBOOK")
VBOOK();
else if($action=="VBDET")
VBDET();
else if($action=="VPDEL")
VPDEL();
else if($action=="VCDET")
VCDET();
else if($action=="VMDET")
VMDET();
else if($action=="MBOOK")
MBOOK();
else if($action=="MEMP")
MEMP();
else if($action=="MDEL")
MDEL();
else if($action=="MBDET")
MBDET();
else if($action=="MCDET")
MCDET();

 ?>
