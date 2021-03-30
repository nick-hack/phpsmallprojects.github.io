<html>
<head>
  <title> celsius to fahrenheit </title>
  <style>
  body{
    text-align: center;
    margin-top: 400px;
    margin-right: 100px;
  }
  .c {
    margin-top:-250px;
    margin-left:450px;
    border: 5px solid black;
    width:500px;
    height:250px;
    box-sizing:border-box;
    text-align: center;
    letter-spacing: 1px;
    border-radius: 25px;
    padding:10px 20px;
    position: absolute;
    text-transform: uppercase;
  }
  .simplein input
  {
    padding: 1px 2px;
    display: block;
    text-align: center;
    margin: auto;
    text-transform: uppercase;
  }
  .simplein h2
  {
    margin-top:-10px;
  }
  .simplein input::placeholder
  {
    text-decoration-color: black;
  }



</style>
</head>

<body>
  <div class="container c">
    <div class="simplein">
      <h2> celsius to fahrenheit</h2><br>
    <form action="" method="post" >
  <input type="text" name="num1" placeholder="Enter number"><br>
    <button type="submit" name="submit" value="submit">SUBMIT</button>
</div>
</div>


<?php

if(isset($_POST['submit']))
{
    $c = $_POST['num1'];
    $f;

$f=(float)(($c*9/5)+32);

echo $c."celsius = ". $f ."fahrenheit";
}
 ?>
</form>
</body>
</html>
