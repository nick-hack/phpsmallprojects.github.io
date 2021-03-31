<html>
<head>
<title>prime or not</title>
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
      <h2> prime number</h2>
  <form action="" method="post" ><br><br><br>
<input type="text" name="num1" placeholder="Enter number"><br>
  <button type="submit" name="submit" value="submit">SUBMIT</button>
</div>
</div>
<?php
  if(isset($_POST['submit']))
  {
      $in=$_POST['num1'];
      for($i=2;$i<=$in-1;$i++)
      {
      if($in%$i==0)
      {
      $value=True;
    }
  }
  if($value && $value)
  {
    echo $in. " prime no";
  }
  else {
    echo $in. " not prime";
  }
  }
 ?>
</form>
</body>
</html>
