<html>
<head>
  <title> simple interest </title>
  <head>
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

    }
    .simplein h2{
      margin-top:-50px;
    }



    </style>
    <body>
    <div class = "container-fluid c">
      <div class="simplein">
        <h2> Simple Interest</h2>
      <form action="simple.php" method=post>
        <input type="text" name="num1" placeholder="Enter first number" ><br>
        <input type="text" name="num2" placeholder="Enter second number"><br>
        <input type="text" name="num3" placeholder="Enter third number"><br>
        <button type="submit" name="sum" value="submit">SUBMIT</button>
        <button type="Reset" value="Reset">RESET</button>


</div>
</div>
        <?php

        if(isset($_POST['sum']))
        {

          $p=$_POST['num1'];
          $t=$_POST['num2'];
          $r=$_POST['num3'];

          $si;

          $si=($p*$t*$r)/100;


          echo "simple interest : ".$si;
}




        ?>
</form>
    </body>

</html>
