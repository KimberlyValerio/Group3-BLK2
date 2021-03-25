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
      <h3>Let's learn MULTIPLICATION</h3>
      <p> Multiplication is one of the four elementary mathematical operations of arithmetic, with the other ones being addition, subtraction and division. The result of a multiplication operation is called a product.
        </br>Example:</br>&nbsp;&nbsp;&nbsp;&nbsp;A book costs $ 67. How much will be paid for 103 such books?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SOLUTION: 102 books x $67 = $6901 in total <br></p>

        <h3>NOW ITS YOUR TURN</h3>

        <div>Andrew is having his friends over for game night. So he decided to prepare snacks and games.</div>

        <div class="questions">
          <p>He started by making mini sandwiches. If he has 4 friends coming over and he made 3 sandwiches for each one of them, how many sandwiches did he make?</p>
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

        <div class="questions">
          <p>He also made some juice from fresh oranges. If he used 2 oranges per glass of juice and he made 6 glasses of juice, how many oranges did he use?</p>
            <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num2()">Check</button>

              <script>
              function num2() {
              alert("The answer is:  12 oranges");
              }
              </script> 
        </form>
        </div>

        <div class="questions">
          <p>Then he started to prepare the games for his 4 friends. If each game takes 5 minutes to prepare and he prepared a total of 5 games, how many minutes did it take for Andrew to prepare all the games?</p>
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

        <div class="questions">
          <p>Andrew’s 4 friends decided to bring food as well. If each of them brought 4 slices of pizza and 3 bags of chips, how many slices of pizza do they have in total?
</p>
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

        <div class="questions">
          <p>Lastly, Andrew tried to compute his expenses for the game night. If he spent $9 for each game they played and they played a total of 5 games, write an equation for how much money he spend on games that night.</p>
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

        <div style="margin-top: 10px;">Jack loves to collect and read books. In fact, he has a mini-library in his house.</div>

        <div class="questions">
          <p>The library is divided into different sections for different type of book. The science fiction section has 8 books. If each book has 478 pages, how many pages do the 8 books have in total?</p>
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

        <div class="questions">
          <p>He also has a 3 foot long section filled with short story booklets. If each booklet has 9 pages and there are 49 booklets, how many pages will Jack need to go through if he plans to read them all?</p>
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

        <div class="questions">
          <p>One of his favorites is a book called Encyclopedia of Life and Everything Else. The book has 7 large chapters, each having 566 pages. How many pages does the encyclopedia have in total?</p>
            <form action="" method="post">
              <input type="text" name="num1">
              <button onclick="num8()">Check</button>

              <script>
              function num8() {
              alert("The answer is:  3,962 pages");
              }
              </script>  
        </form>
        </div>

        <div class="questions">
          <p>The mini library also has a section for the classics. If this collection comes from 6 different authors, with each author having 33 books, how many books does he have in the classics section?</p>
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

        <div class="questions">
          <p>Having this kind of collection made Jack a fast reader. If he can read 9 books in a day, how many books can he read in a year (365 days)?</p>
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
