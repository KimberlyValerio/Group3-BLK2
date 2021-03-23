<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style type="text/css">
    h1{
      text-align: center;
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
      <h3>Let's learn DIVISION</h3>
      <p> The division is a method of distributing a group of things into equal parts. It is one of the four basic operations of arithmetic, which gives a fair result of sharing. 
        </br>Example:</br>&nbsp;&nbsp;&nbsp;&nbsp;Nancy needs 5 lemons to make a glass of orange juice. If Nancy has 250 oranges, how many glasses of orange juice can she make?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOLUTION: 5/250 = 50 glasses of orange juice<br></p>

        <h3>NOW ITS YOUR TURN</h3>

        <div class="questions">
          <p>Tom had 63 apples. He divides all apples evenly among 9 friends. How many apples did Tom give to each of his friends? </p>
            <form action="" method="post">
              <input type="text" name="num1">
              <input type="submit" name="check1" value="Check">  
        </form>
          <?php
          if(isset($_POST['check1'])){

           $num1 =$_POST['num1'];
           if ($num1 == "7") {
            echo "Your answer is correct";
           }
           elseif ($num1 !="7") {
            echo "Try Again";
           }
          }
          ?>
        </div>

        <div class="questions">
          <p>A bus can hold 108 passengers. If there are 12 rows of seats on the bus, how many seats are in each row? </p>
            <form action="" method="post">
              <input type="text" name="num2">
              <input type="submit" name="check2" value="Check">  
        </form>
          <?php
          if(isset($_POST['check2'])){

           $num2 =$_POST['num2'];
           if ($num2 == "9") {
            echo "Your answer is correct";
           }
           elseif ($num2 !="9") {
            echo "Try Again";
           }
          }
          ?>
        </div>
        <div class="questions">
          <p> If 9975 kg of wheat is packed in 95 bags, how much wheat will each bag contain?</p>
            <form action="" method="post">
              <input type="text" name="num3">
              <input type="submit" name="check3" value="Check">  
        </form>
          <?php
          if(isset($_POST['check3'])){

           $num3 =$_POST['num3'];
           if ($num3 == "105") {
            echo "Your answer is correct";
           }
           elseif ($num3 !="105") {
            echo "Try Again";
           }
          }
          ?>
        </div>

        <div class="questions">
          <p>800 are distributed equally among 20 men. How much money will each person get?</p>
            <form action="" method="post">
              <input type="text" name="num4">
              <input type="submit" name="check4" value="Check">  
        </form>
          <?php
          if(isset($_POST['check4'])){

           $num4 =$_POST['num4'];
           if ($num4 == "40") {
            echo "Your answer is correct";
           }
           elseif ($num4 !="40") {
            echo "Try Again";
           }
          }
          ?>
        </div>

        <div class="questions">
          <p>Mark baked 195 cookies and divided them equally into 13 packs. How many cookies did Mark put in each packet?</p>
            <form action="" method="post">
              <input type="text" name="num5">
              <input type="submit" name="check5" value="Check">  
        </form>
          <?php
          if(isset($_POST['check5'])){

           $num5 =$_POST['num5'];
           if ($num5 == "15") {
            echo "Your answer is correct";
           }
           elseif ($num5 !="15") {
            echo "Try Again";
           }
          }
          ?>
        </div>

    </div>

    <!-- CALCULATOR -->
    <div class="col-sm-3" id="calculator">
      <h2>Find the Dividend !</h2>
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

        var result=parseFloat(field1)/parseFloat(field2);

        if(!isNaN(result)){
            document.getElementById("answer").innerHTML="The dividend of " + field1 + " and " + field2 + " is " + result;
        }
        }
      </script>
    </div>
              
          
</body>
</html>