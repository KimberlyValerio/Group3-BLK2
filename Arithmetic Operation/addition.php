<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<style type="text/css">
    	body{
    	  margin:0;
    	  padding:0;
    	  background-image: url('bg2.png');
    	  background-repeat: no-repeat;
    	  background-size: cover; 
    	  background-attachment: fixed; 
    	}
    	h1{
    	  text-align: center;
    	  font-family: Georgia;
    	  font-weight: bold;
    	  text-shadow: 4px 1px #E8D9BD;
    	  font-size: 38px;
    	}
    	h3{
    	  text-indent: 35px;
    	  font-weight: bold;
    	}
    	h2{
    	  font-weight: bold;
    	  font-family: Georgia;
    	}

    	.sidebar {
    	  margin:0;
    	  padding:0;
    	  width: 225px;
    	  height: 150%;
    	  overflow: hidden;
    	  float: left;
    	  font-family: Georgia;
    	  letter-spacing: 3px;
    	  font-size: 17px;
      
    	}

    	.sidebar a {
    	  display: block;
    	  color: black;
    	  padding: 18px;
    	  text-decoration: none;
    	}
 
    	.sidebar a.active {
    	  background-color: #9EC6C6;
    	  color: white;
    	}

    	.sidebar a:hover:not(.active) {
    	  background-color: #5C9598;
    	  color: white;
    	}

	div.content {
	  margin-left: 200px;
	  padding: 1px 16px;
	  height: 1000px;
	}

	@media screen and (max-width: 700px) {
	  .sidebar {
	    width: 100%;
	    height: auto;
    
	  }
  	.sidebar a {float: left;}
 	 div.content {margin-left: 0;}
	}

	@media screen and (max-width: 400px) {
	  .sidebar a {
	    text-align: center;
	    float: none;
	  }
	}

	input[type=text]{
	    width: 50%;
	    padding: 10px;
	    margin: 1px 0px 0px 50px;
	    display: inline-block;
	    color: white;
	    background: #5C9598;
	    border:2px solid #3b3b3b;
	    border-radius: 5px;    
	}
	input[type=submit]{
	  width: 20%;
	  padding: 10px;
	  margin: 1px 0px 0px 5px;
	  display: inline-block;
	  background-color: #f1f1f1;
	  border:2px solid #3b3b3b;
	  font-weight: bold;
	}
	.submitbtn:hover{
	  background-color: #5C9598;
	  color: white;
	  font-weight: bold;
	  border:2px solid #3b3b3b;

	}
    
  	
	</style>
</head>
<body>

  <div class="container-fluid">

    <header class="row" style="border-bottom: 6px solid darkgray; background-color: #92b8c4; position: sticky;">

      <h1>
        KIDS MATH-TYNICS
      </h1>
      
    </header>
    
  </div>

  <div class="container-fluid">

    <div class="row" style="background-color:  rgba(248, 246, 246, 0.8);">

      <div class="col-sm-2" style="">
        <div class="row">
          <ul class="sidebar">
              <li><a href="Page1.php" class="nav-link">HOME</a></li>
              <li><a href="addition.php" class="nav-link active">ADDITION</a></li>
              <li><a href="subtraction.php" class="nav-link">SUBTRACTION</a></li>
              <li><a href="mul.php" class="nav-link">MULTIPLICATION</a></li>
              <li><a href="div.php" class="nav-link">DIVISION</a></li>
          </ul> 
        </div>
      </div>

      <div class="col-sm-7" style="background-color:; font-family: Georgia; position: scroll; border-left: 4px solid lightgray;border-right: 4px solid lightgray;">

        <div class="row" >
          <h3>Let's learn ADDITION</h3>
            <p style="text-indent:  55px; font-size: 17px;"> <b><i>Addition</i></b> is a process of taking two or more numbers and adding them together.</p>
             <h5 style="text-indent:  55px; font-size: 17px;"><i>Example:</i></h5>

              <p style="text-indent:  55px; font-size: 17px;">Anna has 2 apples and Ben has 2 oranges. How many fruits those the children have?</p>

              <h5 style="text-indent:  55px; font-size: 17px;"><em>SOLUTION:</em> &nbsp;&nbsp;&nbsp;&nbsp;<b>2</b> apples + <b>2</b> oranges = <em><b>4</b> fruits</em></h5>
        </div>

        <div class="row">
          <h3>NOW IT'S YOUR TURN</h3>

           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="add1.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">There are 6 surfboards and the surfer bought another 8 pieces. How many surfboards are there in all?</p>
              <form action="" method="post">
                <input type="text" name="num1">
                <input type="submit" name="check1" class="submitbtn" value="Check"> 
              </form>
                <br> 
              <?php
              if(isset($_POST['check1'])){

              $num1 =$_POST['num1'];
              if ($num1 == "14") {
                echo "<b><center><font size='3pt'>Your answer is correct.</font></center></b>";
              }
              elseif ($num1 !="14") {
                echo "<b><center><font size='3pt'>Try Again!</font></center></b>";
              }
              }
              ?>
           
          </div>
          
        </div>
          <br>
       <div class="row">
          
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="add2.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">There were 4 jackets left on the playground on Monday and 5 jackets left on the playground on Tuesday. How many jackets were left on the playground?</p>
              <form action="" method="post">
                  <input type="text" name="num2">
                  <input type="submit" name="check2" class="submitbtn" value="Check">  
              </form>
              <br>
                <?php
                if(isset($_POST['check2'])){

                $num2 =$_POST['num2'];
                if ($num2 == "9") {
                  echo "<b><center><font size='3pt'>Your answer is correct.</font></center></b>";
                }
                elseif ($num2 !="9") {
                  echo "<b><center><font size='3pt'>Try Again!</font></center></b>";
                }
                }
                ?>
           
          </div>
          
        </div>

        <br>
       <div class="row">
          
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="add3.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">Dora got $325 from her father and $289 from her mother. How much money does she have now?</p>
              <form action="" method="post">
                  <input type="text" name="num3"> 
                  <input type="submit" name="check3" class="submitbtn" value="Check">  
              </form>
                <?php
                if(isset($_POST['check3'])){

                $num3 =$_POST['num3'];
                if ($num3 == "$614"||"614") {
                  echo "<b><center><font size='3pt'>Your answer is correct.</font></center></b>";
                }
                elseif ($num3 !="614") {
                  echo "<b><center><font size='3pt'>Try Again!</font></center></b>";
                }
                }
                ?>
           
          </div>
          
        </div>

        <br>
       <div class="row">
          
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="add4.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">Gary played a car game and scored 453 points in first round and 673 points in second round. The game was over after the second round. How many points did he have at the end of the game?</p>
            <form action="" method="post">
              <input type="text" name="num4">
              <input type="submit" name="check4" class="submitbtn" value="Check">  
            </form>
                <?php
                if(isset($_POST['check4'])){

                $num4 =$_POST['num4'];
                if ($num4 == "1126") {
                  echo "<b><center><font size='3pt'>Your answer is correct.</font></center></b>";
                }
                elseif ($num4 !="1126") {
                  echo "<b><center><font size='3pt'>Try Again!</font></center></b>";
                }
                }
                ?>
           
          </div>
          
        </div>

         <br>
       <div class="row">
          
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="add5.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">There are 230 lions and 140 tigers in a forest. These are the only wild animals in the forest. Find the total number of wild animals in the forest.</p>
            <form action="" method="post">
              <input type="text" name="num5">
              <input type="submit" name="check5" class="submitbtn" value="Check">  
            </form>
                <?php
                if(isset($_POST['check5'])){

                $num5 =$_POST['num5'];
                if ($num5 == "370") {
                  echo "<b><center><font size='3pt'>Your answer is correct.</font></center></b>";
                }
                elseif ($num5 !="370") {
                  echo "<b><center><font size='3pt'>Try Again!</font></center></b>";
                }
                }
                ?>
           
          </div>
          
        </div>
          
        </div>
        
        <div class="col-sm-3" style="background-color: ;">

          <div class="row">
            <h2><center>Find the Sum!</center></h2>

            <div class="box" style="font-family: Georgia;">
              <h1 id="answer" style="text-shadow: none; font-size: 24px; margin-top: 18px; margin-bottom: 8px;"></h1><br>
              &nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size: 16px;">Input a number</b><input type="text" id="num1" style="width: 40%;">
              <br> <br>
              &nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size: 16px;">Input a number</b><input type="text" id="num2" style="width: 40%;">
              <br>
              <br>

              <center><button style="width:35%; padding: 10px; margin: 1px 0px 0px 5px; display: inline-block; background-color: #f1f1f1; border:2px solid #3b3b3b; font-weight: bold;" onclick="calculate()"> Calculate</button></center>

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
            
          </div>
          <br><br>
        </div>
      </div>
      
    </div>
    
  </div>
</body>
</html>
