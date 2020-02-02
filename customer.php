<html>
<body>
  <style>
  body{

      background-image: linear-gradient(to right, #232526 0%, #414345 51%, #232526 100%);
      font-family: monospace, serif;
       letter-spacing: 0.05cm;
       color:white;
       font-size:20px;
  }
  input[type="submit"]
  {
    background: :black;
    background-color: black;
    padding:10px;
    font-size:25px;
    margin:20px;
    width:30%;
    border:0px transparent;
    border-radius:10px;
    color:white;
  }
  </style>
<input type="submit" value="View Pending Outgoing Deliveries" onclick='location.href="VPDEL.php?login=<?php echo $_GET["login"];?>&id=1"'>
<input type="submit" value="View Pending Incoming Deliveries" onclick='location.href="VPDEL.php?login=<?php echo $_GET["login"];?>&id=2"'>
<input type="submit" value="Delivery History" onclick='location.href="VPDEL.php?action=VPDEL&login=<?php echo $_GET["login"];?>&id=3"'>
<input type="submit" value="Update Details" onclick='location.href="MCDET.php"'>

</body>
</html>
