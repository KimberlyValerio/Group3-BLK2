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

/*flip*/
.flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-box-front {
  background-color: #;
  color: black;
}

/* Style the back side */
.flip-box-back {
  background-color: #EABA8A;
  color: white;
  transform: rotateY(180deg);
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
              <li><a href="addition.php" class="nav-link">ADDITION</a></li>
              <li><a href="subtraction.php" class="nav-link">SUBTRACTION</a></li>
               <li><a href="multiplication.php" class="nav-link">MULTIPLICATION</a></li>
              <li><a href="div.php" class="nav-link  active">DIVISION</a></li>
          </ul> 
        </div>
      </div>

      <div class="col-sm-7" style="background-color:; font-family: Georgia; position: scroll; border-left: 4px solid lightgray;border-right: 4px solid lightgray;">

        <div class="row" >
          <h3>Let's learn DIVISION</h3>
            <p style="text-indent:  60px; font-size: 17px;"> <b><i>Division</i></b> is a method of distributing a group of things into equal parts. It is one of the four &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;basic operations of arithmetic, which gives a fair result of sharing. </p>
             <h5 style="text-indent:  55px; font-size: 17px;"><i>Example:</i></h5>

              <p style="text-indent:  55px; font-size: 17px;">Nancy needs 5 lemons to make a glass of orange juice. If Nancy has 250 oranges, how many &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;glasses of orange juice can she make?</p>

              <h5 style="text-indent:  55px; font-size: 17px;"><em>SOLUTION:</em> &nbsp;&nbsp;&nbsp;&nbsp;<b>5/250 = 50</b> glasses of orange juice</h5>
        </div>

        <div class="row">
          <h3>NOW IT'S YOUR TURN</h3>

            <!-- flip start -->
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <center><img src="div1.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
                </div>
                <div class="flip-box-back">
                  <h2 style="margin-top: 55px; text-align: center; font-weight: bold; font-size: 50px;">63 / 9</h2>
                  <p style="text-align: center; font-weight: bold; font-size: 10px;">Answer: 7</p>
                </div>
              </div>
            </div>
          </div>

          <!-- flip end -->

          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">Tom had 63 apples. He divides all apples evenly among 9 friends. How many apples did Tom give to each of his friends? </p>
              <form action="" method="post">
                <input type="text" name="num1">
                <input type="submit" name="check1" class="submitbtn" value="Check"> 
              </form>
                <br> 
              <?php
          if(isset($_POST['check1'])){

           $num1 =$_POST['num1'];
           if ($num1 == "7") {
            echo "<b><center><font size='3pt'>Your answer is correct.</font></center></b>";
           }
           elseif ($num1 !="7") {
            echo "<b><center><font size='3pt'>Try Again!</font></center></b>";
           }
          }
          ?>

          </div>
          
        </div>
          <br> <br>
       <div class="row">
          
           <!-- flip start -->
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <center><img src="div2.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
                </div>
                <div class="flip-box-back">
                  <h2 style="margin-top: 55px; text-align: center; font-weight: bold; font-size: 50px;">108 / 12</h2>
                  <p style="text-align: center; font-weight: bold; font-size: 10px;">Answer: 9</p>
                </div>
              </div>
            </div>
          </div>

          <!-- flip end -->
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">A bus can hold 108 passengers. If there are 12 rows of seats on the bus, how many seats are in each row? </p>
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

        <br> <br>
       <div class="row">
          
           <!-- flip start -->
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <center><img src="div3.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
                </div>
                <div class="flip-box-back">
                  <h2 style="margin-top: 55px; text-align: center; font-weight: bold; font-size: 50px;">9975 / 95</h2>
                  <p style="text-align: center; font-weight: bold; font-size: 10px;">Answer: 105</p>
                </div>
              </div>
            </div>
          </div>

          <!-- flip end -->
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; "> If 9975 kg of wheat is packed in 95 bags, how much wheat will each bag contain?</p>
              <form action="" method="post">
                  <input type="text" name="num3"> 
                  <input type="submit" name="check3" class="submitbtn" value="Check">  
              </form>
                <?php
          if(isset($_POST['check3'])){

           $num3 =$_POST['num3'];
           if ($num3 == "105") {
            echo "<b><center><font size='3pt'>Your answer is correct.</font></center></b>";
           }
           elseif ($num3 !="105") {
            echo "<b><center><font size='3pt'>Try Again!</font></center></b>";
           }
          }
          ?>
           
          </div>
          
        </div>

        <br> <br>
       <div class="row">
          
           <!-- flip start -->
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <center><img src="div4.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
                </div>
                <div class="flip-box-back">
                  <h2 style="margin-top: 55px; text-align: center; font-weight: bold; font-size: 50px;">800 / 20</h2>
                  <p style="text-align: center; font-weight: bold; font-size: 10px;">Answer: 40</p>
                </div>
              </div>
            </div>
          </div>

          <!-- flip end -->
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">800 are distributed equally among 20 men. How much money will each person get?</p>
            <form action="" method="post">
              <input type="text" name="num4">
              <input type="submit" name="check4" class="submitbtn" value="Check">  
            </form>
                 <?php
          if(isset($_POST['check4'])){

           $num4 =$_POST['num4'];
           if ($num4 == "40") {
            echo "<b><center><font size='3pt'>Your answer is correct.</font></center></b>";
           }
           elseif ($num4 !="40") {
            echo "<b><center><font size='3pt'>Try Again!</font></center></b>";
           }
          }
          ?>
           
          </div>
          
        </div>

         <br> <br>
       <div class="row">
          
           <!-- flip start -->
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <center><img src="div5.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
                </div>
                <div class="flip-box-back">
                  <h2 style="margin-top: 55px; text-align: center; font-weight: bold; font-size: 50px;">195 / 13</h2>
                  <p style="text-align: center; font-weight: bold; font-size: 10px;">Answer: 15</p>
                </div>
              </div>
            </div>
          </div>

          <!-- flip end -->
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">Mark baked 195 cookies and divided them equally into 13 packs. How many cookies did Mark put in each packet?</p>
            <form action="" method="post">
              <input type="text" name="num5">
              <input type="submit" name="check5" class="submitbtn" value="Check">  
            </form>
                <?php
          if(isset($_POST['check5'])){

           $num5 =$_POST['num5'];
           if ($num5 == "15") {
            echo "<b><center><font size='3pt'>Your answer is correct.</font></center></b>";
           }
           elseif ($num5 !="15") {
            echo "<b><center><font size='3pt'>Try Again!</font></center></b>";
           }
          }
          ?>
           
          </div>
          
        </div> <br> <br>
          
        </div>
        
        <div class="col-sm-3" id="calculator" style="text-align: center;">
      <div class="row">
            <h2><center>Find the Product!</center></h2>

            <div class="box" style="font-family: Georgia;">
              <h1 id="answer" style="text-shadow: none; font-size: 20px; margin-top: 18px; margin-bottom: 8px;"></h1><br>
              &nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size: 16px;">Input a number</b><input type="text" id="num1" style="width: 40%;">
              <br> <br>
              &nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size: 16px;">Input a number</b><input type="text" id="num2" style="width: 40%;">
              <br>
              <br>

              <center><button style="width:35%; padding: 10px; margin: 1px 0px 0px 5px; display: inline-block; background-color: #f1f1f1; border:2px solid #3b3b3b; font-weight: bold;" onclick="calculate()">Calculate</button></center>
      <script>
          
      function calculate() {
        var field1=document.getElementById("num1").value;
        var field2=document.getElementById("num2").value;
        var result=parseFloat(field1)/parseFloat(field2);
        if(!isNaN(result)){
            document.getElementById("answer").innerHTML="The product of " + field1 + " and " + field2 + " is " + result;
        }
        }
      </script>
    </div>

   
</body>
</html>
