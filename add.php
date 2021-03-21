<!DOCTYPE html>
<html>
<head>
	<title>KIDS MATH-TYNICS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style type="text/css">
  	body{
  		background-image: url('aa.jpg');
  	}
  	h1{
  		text-align: center;
  		font-family: cursive;
  	}
  	#left{
  		padding:30px 15px 25px 80px;
  		font-family: cursive;
  		font-size: 2vw;

  	}
  	ul{
  		list-style-type: none;
  	}
  	li{
  		margin-top: 10px;
  	}
  	#right{
  		margin: 30px 0px 0px 0px;
  		padding: 0px 150px 80px 0px;
  		font-family: cursive;
  		font-size: 1vw;
  	}
  	p{
  		text-indent: 50px;
      font-size: 20px;
  	}
  </style>
<body>
	<div class="header"><h1>KIDS MATH-TYNICS</h1></div>
	<div class="concept">
		<div class="row">
			<div class="col-sm-5" id="left">
			<h2>CATEGORY</h2>
				<ul>
  				<li><a href="Page1.php">HOME</a></li>
  				<li><a href="">ADDITION</a></li>
  				<li><a href="">SUBTRACTION</a></li>
  				<li><a href="">MULTIPLICATION</a></li>
  				<li><a href="">DIVITION</a></li>
				</ul>
						
			</div>

			<div class="col-sm-7" id="right">
				<center><h4>Let's learn ADDITION</h4></center>
        <p> Addition is a process of taking two or more numbers and adding them together.
        </br>Example:</br>&nbsp;&nbsp;&nbsp;&nbsp;Anna has 2 apples and Ben has 2 oranges. How many fruits those the children have?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOLUTION: 2 apples + 2 oranges = 4 fruits <br></p>
        <br>
        <h2>NOW ITS YOUR TURN</h2>
        <p>Denzel has 4 cameras and serafin has 5 computer units. How many gadgets those the boys have?</p>
        <form action="" method="post">
          <input type="text" name="num1" placeholder="ENTER A NUMBER">
           <input type="text" name="num2" placeholder="ENTER A NUMBER">
           <input type="submit" name="sum" value="ADD">  
        </form>
				<?php
        if(isset($_POST['sum'])){

           $num1 =$_POST['num1'];
           $num2 =$_POST['num2'];
           $add = $num1 +$num2;
           echo "THE SUM of ".$num1,"and".$num2."is".$add;
      }
        ?>
			
		</div>
		</div>
	</div>
</body>
</html>