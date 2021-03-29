<html>
<head>
  <title> Calculator</title>
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
      <h2> Airthmatic Opration </h2>
      <form action="" method="get" >
    <input type="text" name="num1" placeholder="Enter first no"><br>
    <input type="text" name="num2" placeholder="Enter second no"><br>

    <select name="op">
      <option value="add">ADD</option>
      <option value="sub">SUB</option>
      <option value="mul">MUL</option>
      <option value="div">DIV</option>
      <option value="mod">MOD</option>
    </select>

    <button type="submit" name="submit" value="submit">SUBMIT</button><br><br>
  </div>

  </form>



  <?php

    if(isset($_GET['submit']))
    {
      $num1 = $_GET['num1'];
      $num2 = $_GET['num2'];

      $ope = $_GET['op'];

      switch($ope)
      {
        case "add": $result=$num1 + $num2;
                    echo "result is ".$result;
                    break;
        case "sub": $result=$num1 - $num2;
                    echo "result is ".$result;
                    break;
        case "mul": $result=$num1 * $num2;
                    echo "result is ".$result;
                    break;
        case "div": $result=$num1 / $num2;
                    echo "result is ".$result;
                    break;
        case "mod":  $result=$num1 % $num2;
                    echo "result is ".$result;
                    break;
        default :
                    echo "sorry doesn't exist";
      }

}

   ?>
</body>

</html>
