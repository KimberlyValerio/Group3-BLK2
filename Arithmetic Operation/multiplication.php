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
              <li><a href="subtraction.php" class="nav-link">SUBTRACTION</a></li>
              <li><a href="multiplication.php" class="nav-link active">MULTIPLICATION</a></li>
              <li><a href="div.php" class="nav-link">DIVISION</a></li>
          </ul> 
        </div>
      </div>

    <!-- QUESTIONAIRES -->
    <div class="col-sm-7" style="background-color:; font-family: Georgia; position: scroll; border-left: 4px solid lightgray;border-right: 4px solid lightgray;">

      <div class="row">
          <h3>Let's learn MULTIPLICATION</h3>
            <p style="text-indent:  70px; font-size: 17px; margin-right: 2px;"> <b><i>Multiplication</i></b> is one of the four elementary mathematical operations of arithmetic, with &nbsp;&nbsp;&nbsp;the other ones being addition, subtraction and division. The result of a multiplication operation is &nbsp;&nbsp;&nbsp;called a product.</p>
             <h5 style="text-indent:  55px; font-size: 17px;"><i>Example:</i></h5>

              <p style="text-indent:  55px; font-size: 17px;">A book costs $ 67. How much will be paid for 103 such books?</p>

              <h5 style="text-indent:  55px; font-size: 17px;"><em>SOLUTION:</em> &nbsp;&nbsp;&nbsp;&nbsp;<b>102 books</b> x <b>$67</b>  = <em><b>$6901 in total</b></em></h5>
        </div>

        <div class="row">
          <h3>NOW IT'S YOUR TURN</h3>

          <div>
            <p style="text-align: center; font-size: 17px; font-style: italic;">Andrew is having his friends over for game night. So he decided to prepare snacks and games.</p>
          </div>

           <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="mul1.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">Andrew has 4 friends coming over and he made 3 sandwiches for each one of them, how many sandwiches did he make?</p>
              <form action="" method="post">
              <input type="text" name="num">
              <button onclick="num1()">Check</button>
              <script>
              function num1() {
              alert("The answer is: 12 sandwiches");
              }
              </script>  
              </form>
           
          </div>
          
        </div>
        <br> 

        <div class="row">
        <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="mul2.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">Andrew used 2 oranges per glass of juice and he made 6 glasses of juice, how many oranges did he use?</p>
              <form action="" method="post">
              <input type="text" name="num">
              <button onclick="num1()">Check</button>
              <script>
              function num1() {
              alert("The answer is: 12 sandwiches");
              }
              </script>  
              </form>
           
          </div>
          
        </div>
        <br>

        <div class="row" >
        <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="mul3.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">Then he started to prepare the games for his 4 friends. If each game takes 5 minutes to prepare and he prepared a total of 5 games, how many minutes did it take for Andrew to prepare all the games?</p>
              <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num3()">Check</button>
              <script>
              function num3() {
              alert("The answer is:  25 minutes");
              }
              </script>  
              </form>
           
          </div>
          
        </div>
        <br>

        <div class="row" >
        <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="mul4.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">Andrew’s 4 friends decided to bring food as well. If each of them brought 4 slices of pizza and 3 bags of chips, how many slices of pizza do they have in total?</p>
              <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num4()">Check</button>
              <script>
              function num4() {
              alert("The answer is:  16 slices of pizza");
              }
              </script> 
              </form>
           
          </div>
          
        </div>
        <br>
          
        <div class="row" >
        <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="mul5.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">Lastly, Andrew tried to compute his expenses for the game night. If he spent $9 for each game they played and they played a total of 5 games, write an equation for how much money he spend on games that night.</p>
              <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num5()">Check</button>
              <script>
              function num5() {
              alert("The answer is:  $45.00 for that night");
              }
              </script>
              </form>
           
          </div>
          
        </div>
        <br>

         <div class="row" >
        <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="mul6.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">Lastly, Andrew tried to compute his expenses for the game night. If he spent $9 for each game they played and they played a total of 5 games, write an equation for how much money he spend on games that night.</p>
              <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num5()">Check</button>
              <script>
              function num5() {
              alert("The answer is:  $45.00 for that night");
              }
              </script>
              </form>
           
          </div>
          
        </div>
        <br>

        <hr style="border: 2px solid lightgray;">
        <div style="margin-top: 10px;">
        <p style="text-align: center; font-size: 17px; font-style: italic;">Jack loves to collect and read books. In fact, he has a mini-library in his house.</p>
        </div>

        <div class="row" >
        <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="mul7.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">The library is divided into different sections for different type of book. The science fiction section has 8 books. If each book has 478 pages, how many pages do the 8 books have in total?</p>
              <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num6()">Check</button>
              <script>
              function num6() {
              alert("The answer is:  3,824 pages");
              }
              </script>
              </form>
           
          </div>
          
        </div>
        <br>

        <div class="row" >
        <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="mul8.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">He also has a 3 foot long section filled with short story booklets. If each booklet has 9 pages and there are 49 booklets, how many pages will Jack need to go through if he plans to read them all?</p>
              <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num7()">Check</button>
              <script>
              function num7() {
              alert("The answer is:  441 pages");
              }
              </script>  
              </form>
           
          </div>
          
        </div>
        <br>

        <div class="row" >
        <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="mul9.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">The mini library also has a section for the classics. If this collection comes from 6 different authors, with each author having 33 books, how many books does he have in the classics section?</p>
              <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num9()">Check</button>
              <script>
              function num9() {
              alert("The answer is:  198 books in the classics section");
              }
              </script>
              </form>
           
          </div>
          
        </div>
        <br>

        <div class="row" >
        <div class="col-sm-5" style="opacity: .5px; padding: 0;">
            <center><img src="mul10.gif" style="width: 332px; height: 230px; padding: 10px;"></center>
          </div>
          <div class="col-sm-7" style="opacity: .5px;  padding: 15px;">
             <p style="font-size: 23px; text-align:center; ">Having this kind of collection made Jack a fast reader. If he can read 9 books in a day, how many books can he read in a year (365 days)?</p>
              <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num10()">Check</button>
              <script>
              function num10() {
              alert("The answer is: 3,285 books in a year");
              }
              </script>
              </form> 
           
          </div>
          
        </div>
        <br>

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
        var result=parseFloat(field1)*parseFloat(field2);
        if(!isNaN(result)){
            document.getElementById("answer").innerHTML="The product of " + field1 + " and " + field2 + " is " + result;
        }
        }
      </script>
    </div>

</body>
</html>
