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
<input type="submit" value="View Pending Deliveries" onclick='location.href="sql.php?action=VPDEL"'>
<input type="submit" value="View Employees" onclick='location.href="sql.php?action=VEMP"'>
<input type="submit" value="View Customer Details" onclick='location.href="sql.php?action=VCDET"'>
<input type="submit" value="Update Details" onclick='location.href="sql.php?action=MEMP"'>
</body>
</html>
