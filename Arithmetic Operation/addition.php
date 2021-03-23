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
    	<h3>Let's learn ADDITION</h3>
    	<p> Addition is a process of taking two or more numbers and adding them together.
        </br>Example:</br>&nbsp;&nbsp;&nbsp;&nbsp;Anna has 2 apples and Ben has 2 oranges. How many fruits those the children have?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOLUTION: 2 apples + 2 oranges = 4 fruits <br></p>

        <h3>NOW ITS YOUR TURN</h3>

        <div class="questions">
        	<p>There are 6 surfboards and the surfer bought another 8 pieces. How many surfboards are there in all?</p>
        		<form action="" method="post">
          		<input type="text" name="num1">
           		<input type="submit" name="check1" value="Check">  
        </form>
        	<?php
        	if(isset($_POST['check1'])){

           $num1 =$_POST['num1'];
           if ($num1 == "14") {
           	echo "Your answer is correct";
           }
           elseif ($num1 !="14") {
           	echo "Try Again";
           }
       		}
        	?>
        </div>

        <div class="questions">
        	<p>There were 4 jackets left on the playground on Monday and 5 jackets left on the playground on Tuesday. How many jackets were left on the playground?</p>
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
        	<p>Gary played a car game and scored 453 points in first round and 673 points in second round. The game was over after the second round. How many points did he have at the end of the game?</p>
        		<form action="" method="post">
          		<input type="text" name="num4">
           		<input type="submit" name="check4" value="Check">  
        </form>
        	<?php
        	if(isset($_POST['check4'])){

           $num4 =$_POST['num4'];
           if ($num4 == "1126") {
           	echo "Your answer is correct";
           }
           elseif ($num4 !="1126") {
           	echo "Try Again";
           }
       		}
        	?>
        </div>

        <div class="questions">
        	<p>There are 230 lions and 140 tigers in a forest. These are the only wild animals in the forest. Find the total number of wild animals in the forest.</p>
        		<form action="" method="post">
          		<input type="text" name="num5">
           		<input type="submit" name="check5" value="Check">  
        </form>
        	<?php
        	if(isset($_POST['check5'])){

           $num5 =$_POST['num5'];
           if ($num5 == "370") {
           	echo "Your answer is correct";
           }
           elseif ($num5 !="370") {
           	echo "Try Again";
           }
       		}
        	?>
        </div>

    </div>

    <!-- CALCULATOR -->
    <div class="col-sm-3" id="calculator">
    	<h2>Find the Sum !</h2>
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

				var result=parseFloat(field1)+parseFloat(field2);

				if(!isNaN(result)){
						document.getElementById("answer").innerHTML="The sum of " + field1 + " and " + field2 + " is " + result;
				}
				}
			</script>
		</div>
				    	
				  
</body>
</html>
