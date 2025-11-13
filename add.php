<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <style>
    #container{
      width: 70%;
      margin: auto;
      text-align: center;
      border: 2px solid black;
      padding: 20px;
      box-shadow: 5px 10px #888888;
    }
  </style>

  }
</head>
<body>
  <div id="container">
    <h1>PHP Addition and Subtraction</h1>
    <?php 
    
  $b=10;
  $res = $a + $b;
  echo ("$a + $b =  $res");
  $c=8;
  $d=32;
  $sub = $d - $c;
  echo ("$d-$b = $sub");
?>
</div>
</body>
</html>