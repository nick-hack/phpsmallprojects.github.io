<html>
<head>
  <title> Even or odd</title>

  <style>
  body{
    text-align: center;
    margin-top: 500px;
  }
  .c{
    margin-top:-250px;
    margin-left:550px;
    border: 5px solid black;
    width:250px;
    height:250px;
    box-sizing:border-box;
    text-align: center;
    letter-spacing: 1px;
    border-radius: 25px;
    padding:5px 5px;
    position: absolute;
  }
  .evenodd input{
    padding: 1px 2px;
    display: block;
    text-align: center;
    margin-top:50px;
  }
  .simplein h2{
    margin-top:-40px;
  }

</style>
</head>
<body>
  <div class="container-fluid c">
    <div class= "evenodd">
      <h2>Even or Odd</h2>
    <form action="" method=post >
    <input type="text" name=num1 placeholder="Enter the number"><br>
    <button type="submit" name="sum" value="">SUBMIT</button>

  </div>
</div>
</form>

<?php


if(isset($_POST['sum']))
{

  $no=$_POST['num1'];
  if(($no%2)==0)
  {
    echo "<br>This number is even : ".$no;
  }
    else
  {
    echo "<br>This number is odd : ".$no;
  }
}

 ?>

</body>

</html>
