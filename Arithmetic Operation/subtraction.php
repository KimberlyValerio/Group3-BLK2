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
    <div class="col-sm-3" id="nav" >
    	<h2>CATEGORY</h2>
			<ul>
  			<li><a href="Page1.php">HOME</a></li>
  			<li><a href="addition.php">ADDITION</a></li>
  			<li><a href="subtraction.php">SUBTRACTION</a></li>
  			<li><a href="multiplication.php">MULTIPLICATION</a></li>
  			<li><a href="div.php">DIVISION</a></li>
			</ul>
    </div>

    <div class="col-sm-6">
    	<h3>Let's learn SUBTRACTION</h3>
    	<p> In math, to subtract means to take away from a group or a number of things. When we subtract, the number of things in the group reduce or become less. The minuend, subtrahend and difference are parts of a subtraction problem.
        </br>Example:</br>&nbsp;&nbsp;&nbsp;&nbsp;There were 8 beach balls but 5 of them were damaged. How many beach balls were left?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOLUTION: 8 beach balls - 5 damaged balls = 3 balls <br></p>

        <h3>NOW ITS YOUR TURN</h3>

        <div class="questions">
        	<p>Seven candles were burning on a cake. Jake blew three of them out. How many were left burning?</p>
        		<form action="" method="post">
          		<input type="text" name="num">
           		<button onclick="num1()">Check</button>

              <script>
              function num1() {
              alert("The answer is: 4 candles left");
              }
              </script>  
        </form>
        </div>

        <div class="questions">
        	<p>Seven candles were burning on a cake. Jake blew some of them out to leave four burning. How many did he blow out?</p>
        		<form action="" method="post">
          		<input type="text" name="num1">
           		<button onclick="num2()">Check</button>

              <script>
              function num2() {
              alert("The answer is:  3 candles");
              }
              </script> 
        </form>
        </div>

        <div class="questions">
        	<p>A shopkeeper bought 240 eggs and sold 148 eggs. How many eggs were left unsold?</p>
        		<form action="" method="post">
          		<input type="text" name="num1">
           		<button onclick="num3()">Check</button>

              <script>
              function num3() {
              alert("The answer is:  92 eggs left");
              }
              </script>  
        </form>
        </div>

        <div class="questions">
        	<p>An animal care society tested 356 pet animals. 127 were infected by diseases. Find the number of healthy pet animals that participated in the medical tests?
</p>
        		<form action="" method="post">
          		<input type="text" name="num1">
           		<button onclick="num4()">Check</button>

              <script>
              function num4() {
              alert("The answer is:  226 healhty animals");
              }
              </script> 
        </form>
        </div>

        <div class="questions">
        	<p>In an annual celebration, 674 students participated. Of them, 392 were boys. Find the number of girls who participated.</p>
        		<form action="" method="post">
          		<input type="text" name="num1">
           		<button onclick="num5()">Check</button>

              <script>
              function num5() {
              alert("The answer is:  282 girls");
              }
              </script>
        </form>
        </div>

        <div class="questions">
        	<p>Mark has a book which contains 649 pages. He has already read 495 pages. How many pages are unread?</p>
        		<form action="" method="post">
          		<input type="text" name="num1">
           		<button onclick="num6()">Check</button>

              <script>
              function num6() {
              alert("The answer is:  154 pages");
              }
              </script>
        </form>
        </div>

        <div class="questions">
        	<p>Director James directed a film which ran for 248 minutes. During the editing process, 109 minutes were removed. What is the final running time of the film, after editing?</p>
        		<form action="" method="post">
          		<input type="text" name="num1">
           		<button onclick="num7()">Check</button>

              <script>
              function num7() {
              alert("The answer is:  139 minutes");
              }
              </script>  
        </form>
        </div>

        <div class="questions">
        	<p>There are 5718 DVDs in Mr. Miller’s shop. 2199 are audio DVDs and the rest of them are video DVDs. Find the number of video DVDs in Mr. Miller’s shop.</p>
        		<form action="" method="post">
          		<input type="text" name="num1">
           		<button onclick="num8()">Check</button>

              <script>
              function num8() {
              alert("The answer is:  3519 video DVDs");
              }
              </script>  
        </form>
        </div>

        <div class="questions">
        	<p>Clara withdrew $ 6789 from her account. The initial amount in her account was $ 8790. Find the balance left after the withdrawal.</p>
        		<form action="" method="post">
          		<input type="text" name="num1">
              <button onclick="num9()">Check</button>

              <script>
              function num9() {
              alert("The answer is:  $2001");
              }
              </script>
        </form>
        </div>

        <div class="questions">
        	<p>A free medical camp was conducted in Mexico. 1278 males participated in the camp. The entry book shows 4012 people participated in the camp. Find the number of females who participated.</p>
        		<form action="" method="post">
          		<input type="text" name="num1">
              <button onclick="num10()">Check</button>

              <script>
              function num10() {
              alert("The answer is: 2734 females");
              }
              </script>
            </form>        
        </div>

        <div class="questions">
        	<p>Cathy needs at least 2000 points to go to level 2 in a video game. She has only 1254 points in level 1. How many more points does she need to qualify for level 2?</p>
        		<form action="" method="post">
          		<input type="text" name="num1">
              <button onclick="num11()">Check</button>

              <script>
              function num11() {
              alert("The answer is: 746 points");
              }
              </script>
        </form>
        </div>

        <div class="questions">
        	<p>The average distance from earth to the sun is 92, 589, 230 miles. The distance from earth to the moon is 92,350,373 miles less than the distance from earth to the sun. Find the distance from earth to the moon.</p>
        		<form action="subtraction.php" method="post">
          		<input type="text" name="num1">
              <button onclick="num12()">Check</button>

              <script>
              function num12() {
              alert("The answer is: 9275019372 miles");
              }
              </script>
            </form>
        </div>

    </div>

    <div class="col-sm-3" id="calculator">
    	<h2>Find the Difference !</h2>
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

				var result=parseFloat(field1)-parseFloat(field2);

				if(!isNaN(result)){
						document.getElementById("answer").innerHTML="The difference of " + field1 + " and " + field2 + " is " + result;
				}
				}
			</script>
		</div>
				    	
				  
</body>
</html>
