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
      <h3>Let's learn MULTIPLICATION</h3>
      <p>Multiplication ,multiply means to add equal groups. When we multiply, the number of things in the group increases. The two factors and the product are parts of a multiplication problem. ... Here is another example of a multiplication fact that shows multiplication is also repeated addition.
        </br>Example:</br>&nbsp;&nbsp;&nbsp;&nbsp;Anna has 5 egg cartons. Each carton has 12 eggs. How many eggs does she have in total?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOLUTION: 5 egg cartons X 12 eggs = 60 eggs in total <br></p>

        <h3>NOW ITS YOUR TURN</h3>
        <h2>PROBLEM</h2>
        <p>Andrew is having his friends over for game night. So he decided to prepare snacks and games.</p>

        <div class="questions">
          <p> He started by making mini sandwiches. If he has 4 friends coming over and he made 3 sandwiches for each one of them, how many sandwiches did he make?</p>
            <form action="" method="post">
              <input type="text" name="num1">
              <input type="submit" name="check1" value="Check">  
        </form>
          <?php
          if(isset($_POST['check1'])){

           $num1 =$_POST['num1'];
           if ($num1 == "12") {
            echo "Your answer is correct";
           }
           elseif ($num1 !="12") {
            echo "Try Again";
           }
          }
          ?>
        </div>

        <div class="questions">
          <p> He also made some juice from fresh oranges. If he used 2 oranges per glass of juice and he made 6 glasses of juice, how many oranges did he use?</p>
            <form action="" method="post">
              <input type="text" name="num2">
              <input type="submit" name="check2" value="Check">  
        </form>
          <?php
          if(isset($_POST['check2'])){

           $num2 =$_POST['num2'];
           if ($num2 == "12") {
            echo "Your answer is correct";
           }
           elseif ($num2 !="12") {
            echo "Try Again";
           }
          }
          ?>
        </div>

        <div class="questions">
          <p>Then he started to prepare the games for his 4 friends. If each game takes 5 minutes to prepare and he prepared a total of 5 games, how many minutes did it take for Andrew to prepare all the games?</p>
            <form action="" method="post">
              <input type="text" name="num3">
              <input type="submit" name="check3" value="Check">  
        </form>
          <?php
          if(isset($_POST['check3'])){

           $num3 =$_POST['num3'];
           if ($num3 == "25") {
            echo "Your answer is correct";
           }
           elseif ($num3 !="25") {
            echo "Try Again";
           }
          }
          ?>
        </div>

        <div class="questions">
          <p>Andrew’s 4 friends decided to bring food as well.If each of them brought 4 slices of pizza, how many slices of pizza do they have in total?</p>
            <form action="" method="post">
              <input type="text" name="num4">
              <input type="submit" name="check4" value="Check">  
        </form>
          <?php
          if(isset($_POST['check4'])){

           $num4 =$_POST['num4'];
           if ($num4 == "16") {
            echo "Your answer is correct";
           }
           elseif ($num4 !="16") {
            echo "Try Again";
           }
          }
          ?>
        </div>

        <div class="questions">
          <p>Lastly, Andrew tried to compute his expenses for the game night. If he spent $9 for each game they played and they played a total of 5 games, write an equation for how much money he spend on games that night.</p>
            <form action="" method="post">
              <input type="text" name="num5">
              <input type="submit" name="check5" value="Check">  
        </form>
          <?php
          if(isset($_POST['check5'])){

           $num5 =$_POST['num5'];
           if ($num5 == "95") {
            echo "Your answer is correct";
           }
           elseif ($num5 !="95") {
            echo "Try Again";
           }
          }
          ?>
        </div>

    </div>

    <!-- CALCULATOR -->
    <div class="col-sm-3" id="calculator">
      <h2>Find the Product !</h2>
      <div class="box">
      <h1 id="answer"></h1>
      Input a number<input type="text" id="num1">
      <br> <br>
      Input a number<input type="text" id="num2">
      <br>
      <br>

      <button onclick="calculate()"> Calculate</button>
      <script>
          
      function calculate() {
        var field1=document.getElementById("num1").value;
        var field2=document.getElementById("num2").value;
        var result=parseFloat(field1)*parseFloat(field2);

        if(!isNaN(result)){
            document.getElementById("answer").innerHTML="The product of " + field1 + " and " + field2 + " is " + result;
        }
        }
      </script>
    </div>
              
          
</body>
</html>
