
<html>
<head>
  <title>Table with database</title>
  <style>
  body {
    font-family:serif;
     letter-spacing: 0.1em;
     color:black;
     font-size:30px;
     background: #ff9966;  /* fallback for old browsers */
     background: -webkit-linear-gradient(to right, #ff5e62, #ff9966);  /* Chrome 10-25, Safari 5.1-6 */
     background: linear-gradient(to right, #ff5e62, #ff9966); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  }
  table {
  border-collapse: collapse;
  width: 100%;
  color:linear-gradient(to right, #232526 0%, #414345 51%, #232526 100%) ;
  font-family:times;
  font-size: 25px;
  text-align: center;
  }
  input[type="submit"]
  {
    background: :black;
    background-color: black;
    padding:10px;
    font-size:25px;
    margin:20px;
    width:10%;
    border:0px transparent;
    border-radius:10px;
    color:white;

  }
  th {
  background-color: black;
  color: white;
  }

  #container{
    height:auto;
    width:95%;
    left: 55%;
    top:16%;
    background:transparent
    border: 40px solid transparent;
    border-radius: 10px;
    text-align:center;
    padding-bottom: 20px;
    padding-top:20px;
    margin-bottom: 80px;
  }
  input[type="text"],input[type="password"]
  {
    padding: 7px 10px;
    font-size:40px;
    margin:10px;
    width:30%;
    outline:0;
    border:0px transparent;
    border-radius: 10px;

      }

   input[type="submit"]:hover
   {
     opacity:0.8;
   }
  </style>
  </head>

  <body>

  <table>
  <tr>
  <th>BranchCode</th>
<th>BranchName</th>
  <th>BranchAddress</th>

  </tr>
  <?php
  require_once "connect.php";
  $sql = "SELECT distinct(b.branchcode),b.branchname,b.branchaddress from stafftable as s, branchtable as b where b.branchcode=s.branchcode";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc())
  {
      echo "<tr><td><div>" . $row["branchcode"] . "</td><td>". $row["branchname"]. "</td><td>".$row["branchaddress"]."</div></td></tr>";
  }

?>
</table>
<br>
<div id="container">
<form action="MBDETmod.php" method="post">
  Enter Branch Code to Modify: <input type="text" name="bid">
  <input type="submit" value="Go" method="post">
</form>
</div>
<input type="submit" value ="Return" onclick='location.href="admin.php"'>

   </body>

  </html>
