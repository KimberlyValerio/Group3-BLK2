<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style type="text/css">
    h1,h2{
      text-align: center;x
    }
    .questions{
      padding: 10px;
      border-style: solid;
      border-width: 1px;
      color: black;
      border-radius: 5px;
      margin-bottom: 20px;
    }
    .box{
    padding: 50px;
    border: 1px solid gray;
    border-radius: 20px;
    background: rgba(255,255,255,.2);
    max-width: 600px;
    margin: auto;
    margin-top: 50px;
    font-size: 18px;
    font-weight: bold;
    justify-content: center;
    color: black;
  }
  ul{
      list-style-type: none;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <h1>KIDS MATH-TYNICS</h1>

    <!-- NAVIGATION -->

    <div class="col-sm-3" id="nav" >
      <h2>CATEGORY</h2>
     <ul>
          <li><a href="Page1.php">HOME</a></li>
          <li><a href="addition.php">ADDITION</a></li>
          <li><a href="subtraction.php">SUBTRACTION</a></li>
          <li><a href="mul.php">MULTIPLICATION</a></li>
          <li><a href="div.php">DIVISION</a></li>
        </ul>
    </div>

    <!-- QUESTIONAIRES -->
    <div class="col-sm-6">
      <h3>Let's learn SUBTRACTION</h3>
      <p> Subtraction, subtract means to take away from a group or a number of things. When we subtract, the number of things in the group reduce or become less.
        </br>Example:</br>&nbsp;&nbsp;&nbsp;&nbsp;Mark has a book which contains 200 pages. He has already read 99 pages. How many pages are unread?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOLUTION: 200 - 99 = 101 unread pages<br></p>

        <h3>NOW ITS YOUR TURN</h3>

        <div class="questions">
          <p> 7 candles were burning on a cake. Jake blew 3 of them out. How many were left burning?</p>
            <form action="" method="post">
              <input type="text" name="num1">
              <input type="submit" name="check1" value="Check">  
        </form>
          <?php
          if(isset($_POST['check1'])){

           $num1 =$_POST['num1'];
           if ($num1 == "4") {
            echo "Your answer is correct";
           }
           elseif ($num1 !="4") {
            echo "Try Again";
           }
          }
          ?>
        </div>

        <div class="questions">
          <p>A shopkeeper bought 200 eggs and sold 100 eggs. How many eggs were left unsold?</p>
            <form action="" method="post">
              <input type="text" name="num2">
              <input type="submit" name="check2" value="Check">  
        </form>
          <?php
          if(isset($_POST['check2'])){

           $num2 =$_POST['num2'];
           if ($num2 == "100") {
            echo "Your answer is correct";
           }
           elseif ($num2 !="100") {
            echo "Try Again";
           }
          }
          ?>
        </div>
        <div class="questions">
          <p>Dora got $325 from her father and $289 from her mother. How much money does she have now?</p>
            <form action="" method="post">
              <input type="text" name="num3">
              <input type="submit" name="check3" value="Check">  
        </form>
          <?php
          if(isset($_POST['check3'])){

           $num3 =$_POST['num3'];
           if ($num3 == "$614"||"614") {
            echo "Your answer is correct";
           }
           elseif ($num3 !="614") {
            echo "Try Again";
           }
          }
          ?>
        </div>

        <div class="questions">
          <p>An animal care society tested 20 pet animals. 7 were infected by diseases. Find the number of healthy pet animals that participated in the medical tests?</p>
            <form action="" method="post">
              <input type="text" name="num4">
              <input type="submit" name="check4" value="Check">  
        </form>
          <?php
          if(isset($_POST['check4'])){

           $num4 =$_POST['num4'];
           if ($num4 == "13") {
            echo "Your answer is correct";
           }
           elseif ($num4 !="13") {
            echo "Try Again";
           }
          }
          ?>
        </div>

        <div class="questions">
          <p>In an annual celebration, 10 students participated. Of them, 6 were boys. Find the number of girls who participated.</p>
            <form action="" method="post">
              <input type="text" name="num5">
              <input type="submit" name="check5" value="Check">  
        </form>
          <?php
          if(isset($_POST['check5'])){

           $num5 =$_POST['num5'];
           if ($num5 == "4") {
            echo "Your answer is correct";
           }
           elseif ($num5 !="4") {
            echo "Try Again";
           }
          }
          ?>
        </div>

    </div>

    <!-- CALCULATOR -->
    <div class="col-sm-3" id="calculator">
      <h2>Find the Difference. !</h2>
      <div class="box">
      <h1 id="answer"></h1>
      Input a number<input type="text" id="num1">
      <br> <br>
      Input a number<input type="text" id="num2">
      <br>
      <br>

      <button onclick="calculate()">Calculate</button>

      <script>
          
      function calculate() {
        var field1=document.getElementById("num1").value;
        var field2=document.getElementById("num2").value;

        var result=parseFloat(field1)-parseFloat(field2);

        if(!isNaN(result)){
            document.getElementById("answer").innerHTML="The difference. of " + field1 + " and " + field2 + " is " + result;
        }
        }
      </script>
    </div>
              
          
</body>
</html>