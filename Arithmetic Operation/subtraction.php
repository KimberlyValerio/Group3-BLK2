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
      text-align: center;
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
input[type=submit],button{
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

    <!-- NAVIGATION -->

    <div class="container-fluid">

    <div class="row" style="background-color:  rgba(248, 246, 246, 0.8);">

      <div class="col-sm-2" style="">
        <div class="row">
          <ul class="sidebar">
              <li><a href="Page1.php" class="nav-link">HOME</a></li>
              <li><a href="addition.php" class="nav-link">ADDITION</a></li>
              <li><a href="subtraction.php" class="nav-link active">SUBTRACTION</a></li>
              <li><a href="multiplication.php" class="nav-link">MULTIPLICATION</a></li>
              <li><a href="div.php" class="nav-link">DIVISION</a></li>
          </ul> 
        </div>
      </div>

    <!-- QUESTIONAIRES -->
    <div class="col-sm-7" style="background-color:; font-family: Georgia; position: scroll; border-left: 4px solid lightgray;border-right: 4px solid lightgray;">

      <div class="row" >
          <h3>Let's learn SUBTRACTION</h3>
            <p style="text-indent:  55px; font-size: 17px;"> <b><i>Subtraction</i></b> subtract means to take away from a group or a number of things. When we &nbsp;&nbsp;&nbsp;subtract, the number of things in the group reduce or become less.</p>
             <h5 style="text-indent:  55px; font-size: 17px;"><i>Example:</i></h5>

              <p style="text-indent:  55px; font-size: 17px;">Mark has a book which contains 200 pages. He has already read 99 pages. How many pages are &nbsp;&nbsp;&nbsp;unread?</p>

              <h5 style="text-indent:  55px; font-size: 17px;"><em>SOLUTION:</em> &nbsp;&nbsp;&nbsp;&nbsp;<b>200</b> + <b>99</b>  = <em><b>101 unread pages</b></em></h5>
        </div>

        <div class="row">
          <h3>NOW IT'S YOUR TURN</h3>

           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="sub1.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">7 candles were burning on a cake. Jake blew 3 of them out. How many were left burning?</p>
              <form action="" method="post">
                <input type="text" name="num1">
                <input type="submit" name="check1" class="submitbtn" value="Check"> 
              </form>
                <br> 
              <?php
              if(isset($_POST['check1'])){

              $num1 =$_POST['num1'];
              if ($num1 == "4") {
                echo "<b><center><font size='3pt'>Your answer is correct.</font></center></b>";
              }
              elseif ($num1 !="4") {
                echo "<b><center><font size='3pt'>Try Again!</font></center></b>";
              }
              }
              ?>
           
          </div>
          
        </div>
        <br>

        <div class="row">
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="sub2.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">A shopkeeper bought 200 eggs and sold 100 eggs. How many eggs were left unsold?</p>
              <form action="" method="post">
              <input type="text" name="num2">
              <input type="submit" name="check2" value="Check">  
        </form>
          <?php
          if(isset($_POST['check2'])){

           $num2 =$_POST['num2'];
           if ($num2 == "100") {
            echo "<b><center><font size='3pt'>Your answer is correct.</font></center></b>";
           }
           elseif ($num2 !="100") {
            echo "<b><center><font size='3pt'>Try Again!</font></center></b>";
           }
          }
          ?>
           
          </div>
          
        </div>
        <br>

        <div class="row">
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="sub3.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">An animal care society tested 356 pet animals. 127 were infected by diseases. Find the number of healthy pet animals that participated in the medical tests?</p>
              <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num3()">Check</button>
              <script>
              function num3() {
              alert("The answer is:  226 healhty animals");
              }
              </script> 
           
          </div>
          
        </div>
        <br>

        <div class="row">
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="sub4.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center;">In an annual celebration, 674 students participated. Of them, 392 were boys. Find the number of girls who participated.</p>
              <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num4()">Check</button>
              <script>
              function num4() {
              alert("The answer is:  282 girls");
              }
              </script>
              </form>
           
          </div>
          
        </div>
        <br>

        <div class="row">
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="sub5.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center;">Mark has a book which contains 649 pages. He has already read 495 pages. How many pages are unread?</p>
              <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num5()">Check</button>
              <script>
              function num5() {
              alert("The answer is:  154 pages");
              }
              </script>
              </form>
           
          </div>
          
        </div>
        <br>

        <div class="row">
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="sub6.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center;">Director James directed a film which ran for 248 minutes. During the editing process, 109 minutes were removed. What is the final running time of the film, after editing?</p>
              <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num6()">Check</button>
              <script>
              function num6() {
              alert("The answer is:  139 minutes");
              }
              </script>  
              </form>
           
          </div>
          
        </div>
        <br>

        <div class="row">
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="sub7.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center;">There are 5718 DVDs in Mr. Miller’s shop. 2199 are audio DVDs and the rest of them are video DVDs. Find the number of video DVDs in Mr. Miller’s shop.</p>
              <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num7()">Check</button>
              <script>
              function num7() {
              alert("The answer is:  3519 video DVDs");
              }
              </script>  
              </form>
           
          </div>
          
        </div>
        <br>

        <div class="row">
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="sub8.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center;">Clara withdrew $ 6789 from her account. The initial amount in her account was $ 8790. Find the balance left after the withdrawal.</p>
              <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num8()">Check</button>
              <script>
              function num8() {
              alert("The answer is:  $2001");
              }
              </script>
           
          </div>
          
        </div>
        <br>

        <div class="row">
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="sub9.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center;">A free medical camp was conducted in Mexico. 1278 males participated in the camp. The entry book shows 4012 people participated in the camp. Find the number of females who participated.</p>
              <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num9()">Check</button>
              <script>
              function num9() {
              alert("The answer is: 2734 females");
              }
              </script>
              </form>
           
          </div>
          
        </div>
        <br>

        <div class="row">
           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="sub10.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center;">Cathy needs at least 2000 points to go to level 2 in a video game. She has only 1254 points in level 1. How many more points does she need to qualify for level 2?</p>
              <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num10()">Check</button>
              <script>
              function num10() {
              alert("The answer is: 746 points");
              }
              </script>
              </form>
           
          </div>
          
        </div>
        <br>
      
    </div>
    <div class="col-sm-3" id="calculator" style="text-align: center;">
      <div class="row">
            <h2><center>Find the Difference!</center></h2>

            <div class="box" style="font-family: Georgia;">
              <h1 id="answer" style="text-shadow: none; font-size: 20px; margin-top: 18px; margin-bottom: 8px;"></h1><br>
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
        var result=parseFloat(field1)-parseFloat(field2);
        if(!isNaN(result)){
            document.getElementById("answer").innerHTML="The difference of " + field1 + " and " + field2 + " is " + result;
        }
        }
      </script>
    </div>
     <br><br>
  </div>
</div>

              
          
</body>
</html>
