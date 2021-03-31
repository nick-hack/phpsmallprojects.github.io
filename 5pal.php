<html>
<head>
<title> palindrome num </title>
<style>
body{
  text-align: center;
  margin-top: 450px;
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
}
.simplein input{
  padding: 1px 2px;
  display: block;
  text-align: center;
  margin: auto;
  text-transform: uppercase;
}
.simplein h2{
  margin-top:-50px;
  text-transform: uppercase;
}
</style>
</head>
<body>
  <div class = "container-fluid c">
    <div class="simplein">
      <h2> palindrome or not</h2>
  <form action="pal.php" method="get" ><br><br><br>
<input type="text" name="num" placeholder="Enter number"><br>
<button type="submit" name="submit" value="submit">SUBMIT</button>

</form>
</div>
</div>

<?php

if(isset($_GET['submit']))
{
  $num=$_GET['num'];
  $p=$num;
  $rev=0;
  while($num != 0)
  {
    $rev=$rev * 10 + $num % 10;

    $num = (int)($num / 10);
  }
  if($rev==$p)
  {
    echo $p." is palindrome number";
  }
  else
  {
    echo $p." is not palindrome";
  }
}
 ?>
</form>
</body>
</html>
