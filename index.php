<html>
<head>
  <style>
  body {
    background-image: linear-gradient(to right, #232526 0%, #414345 51%, #232526 100%);
    font-family:serif;
     letter-spacing: 0.1em;
     color:white;
     font-size:50px;

  }
  #container{
    position:absolute;
    height:auto;
    width:35%;
    left: 35%;
    top:16%;
    background:rgba(0,0,0,0.1);
    border: 1px solid transparent;
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
    width:60%;
    outline:0;
    border:0px transparent;
    border-radius: 10px;

      }

   input[type="submit"]
   {
     background: :black;
     background-color: black;
     padding:10px;
     font-size:25px;
     margin:10px;
     width:60%;
     border:0px transparent;
     border-radius:10px;
     color:white;
   }
   input[type="submit"]:hover
   {
     opacity:0.8;
   }
  </style>
  <body>
<div id="container">

<form action="validate.php" method="post">
 Username: <input type="text" name="login"><br>
 Password: <input type="password" name="password"><br>
 <input type="submit" value="Submit" method="post">
</form>
</body>
</html>
