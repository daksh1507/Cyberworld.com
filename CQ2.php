<!doctype html>
<html lang="en">
<?php
session_start();
include 'connectdb.php';
$i=0;
    $ok=$_SESSION['name'];
    $sql= "SELECT * FROM `USERS` WHERE `USERS`.`USERNAME`='$ok' AND `USERS`.`PJPOINTS`!='0'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $i++;
        $pp=$row['CQ2POINTS'];
        $ee=$row['UPC2'];
    }
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $totalCorrect = 0;
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
            if ($totalCorrect > 0) {
if ($pp == 0){ 
$ok = $_SESSION['name'];
    $sql = "UPDATE `USERS` SET `CQ2POINTS` = '$totalCorrect' WHERE `USERS`.`USERNAME` = '$ok'";
    $result = mysqli_query($conn,$sql);
}
}
if ($ee == ""){
    if ($pp > 2){
         $_SESSION['Points'] = 5 + $_SESSION['Points'];
         $sql = "UPDATE `USERS` SET `UPC2` = 'T' WHERE `USERS`.`USERNAME` = '$ok'";
    $result = mysqli_query($conn,$sql);
    }
    }
    $ko = $_SESSION['Points'];
    $sql = "UPDATE `USERS` SET `POINTS` = '$ko' WHERE `USERS`.`USERNAME` = '$ok'";
    $result = mysqli_query($conn,$sql);
    $i=0;
    $ok=$_SESSION['name'];
    $sql= "SELECT * FROM `USERS` WHERE `USERS`.`USERNAME`='$ok' AND `USERS`.`CQ2POINTS`!='0'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $i++;
        $pp=$row['CQ2POINTS'];
    
    }
   
    ?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
	 crossorigin="anonymous">
	<title>Cyber-Safety Quiz 2</title>
	<link rel="icon" href="https://i.ibb.co/k80kB58/logo.png" type="image/icon type">
	<style>
		.holder {
			background-color: rgb(230, 230, 230);
			width: auto;
			height: 250px;
			overflow: hidden;
			padding: 10px;
			font-family: Helvetica;
		}
		.holder .mask {
			position: relative;
			left: 0px;
			top: 10px;
			width: 300px;
			height: 500px;
			overflow: hidden;
		}
		.holder ul {
			list-style: none;
			margin: 0;
			padding: 0;
			position: relative;
		}
		.holder ul li {
			padding: 10px 0px;
		}
		.holder ul li a {
			color: darkred;
			text-decoration: none;
		}
		an.hover {
			text-decoration: underliner;
			color: darkgoldenrod;
		}
		body {
			 background: #72e8f2;
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
		}
		::-webkit-scrollbar {
			display: none;
		}
		.navbar-custom {
			background-color: #fc3f3f;
			color: white;
		}
		.navbar-custom .navbar-nav .nav-link {
			color: white;
		}
		.navbar-custom .nav-item.active .nav-link,
		.navbar-custom .nav-item:hover .nav-link {
			color: white;
		}
        h1 {
  font-size: 72px;
  background: -webkit-linear-gradient(grey,white);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  -webkit-text-stroke-width: 0.5px;
  -webkit-text-stroke-color: black;
}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-custom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html" style="font-size:22px;padding: 15px 15px;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:21px;padding: 15px 15px;">
                        Fun Zone
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <h6 class="dropdown-header">Fun Zone</h6>
                        <a class="dropdown-item" href="Games.html">Cyber Games</a>
                        <a class="dropdown-item" href="Quizmain.php">Cyber Quizzes</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="voltage/pie-chart2.html" style="font-size:21px;padding: 15px 15px;">Cyber Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Cyber Upholders.html" style="font-size:21px;padding: 15px 15px;">Cyber Upholders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about us/Cyber-Kavach.html" style="font-size:21px;padding: 15px 15px;">About us</a>
                </li>
            </ul>
            
             </div>
    </nav>
    </div>
    <br>
    <div class="container" style="text-align: center">
        <h1>Cyber Security Quiz 2</h1>
    </div>
    <br>
<br> 
<div class="container">
    <div class="row">
    <?php if ($pp==0) : ?>
<div class="col-sm-3.7">
<div class="card" style="width: 18rem;background-coloR:#ff3636">
  <div class="card-body">
    <h5 class="card-title" style="font-size:25px">Questions</h5>
    <table class="table table-dark">
  <tbody>
    <tr>
      <th scope="row">1</th>
      <th><button id="l1" type="button" class="btn btn-primary" style="padding:2px 12px;" onclick='Q1a();Q1b()'>Q1</button></th>
      <th scope="row">2</th>
      <th><button id="l2" type="button" class="btn btn-primary" style="padding:2px 12px;" onclick='Q2a();Q2b()'>Q2</button></th>
    </tr>
    <tr>
      <th scope="row">3</th>
      <th><button id="l3" type="button" class="btn btn-primary" style="padding:2px 12px;" onclick='Q3a();Q3b()'>Q3</button></th>
      <th scope="row">4</th>
      <th><button id="l4" type="button" class="btn btn-primary" style="padding:2px 12px;" onclick='Q4a();Q4b()'>Q4</button></th>
    </tr>
    <tr>
      <th scope="row">5</th>
      <th><button id="l5" type="button" class="btn btn-primary" style="padding:2px 12px;" onclick='Q5a();Q5b()'>Q5</button></th>
    </tr>
</tbody>
</table>
  </div>
  </div>
  <br>
  <div class="card" style="width: 18rem;background-coloR:#ff3636;  ">
  <div class="card-body">
    <h5 class="card-title" style="font-size:25px">Instructions:</h5>
    <h6>• There are 5 questions.</h6>
    <h6>• Click the question number to get the question.</h6>
    <h6>• Correct choice will give you +1 points.</h6>
    <h6>• No negative points.</h6>
    <h6>• Score more than 2 points to get 5 Cyber Points.</h6>

  </div>
  </div>
  </div>
  <div class="col-sm-8">
    <div class="card" style="width: 51rem;background-color:#ff0000;height: 39rem">
   <div class="card-body">
   <h2 class="card-title" id="demo" style="color:white">Click Question Number to get question.</h2>
   <br>
   <div class="card" style="width: 48rem;background-color:#c2ffef;height: 30rem">
   <div class="card-body">
   <form method="post" action="SUBMIT.HTML" >
		<ol>
        <li id="Q1" style="display:none">
                
                    <h3 style="padding-top:15px">What does the “https://” at the beginning of a URL denote, as opposed to "http://" (without the “s”)? </h5>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" oninput="document.getElementById('l1').className='btn btn-success'"/>
                        <label for="question-1-answers-A" style="font-size:20px;padding:10px 5px;">A) That the site has special high definition</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" oninput="document.getElementById('l1').className='btn btn-success'"/>
                        <label for="question-1-answers-B" style="font-size:20px;padding:10px 5px;">B) That information entered into the site is encrypted</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" oninput="document.getElementById('l1').className='btn btn-success'"/>
                        <label for="question-1-answers-C" style="font-size:20px;padding:10px 5px;">C) That the site is the newest version available</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" oninput="document.getElementById('l1').className='btn btn-success'"/>
                        <label for="question-1-answers-D" style="font-size:20px;padding:10px 5px;">D) That the site is not accessible to certain computers</label>
                    </div>
          
                </li>
                <li id="Q2" style="display:none">
                
                    <h3 style="padding-top:15px">A group of computers that is networked together and used by hackers to steal information is called a …</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" oninput="document.getElementById('l2').className='btn btn-success'"/>
                        <label for="question-2-answers-A" style="font-size:23px;padding:10px 5px;">A) Botnet</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-2-answers-B" value="B" oninput="document.getElementById('l2').className='btn btn-success'"/>
                        <label for="question-2-answers-B" style="font-size:23px;padding:10px 5px;">B) Rootkit</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" oninput="document.getElementById('l2').className='btn btn-success'"/>
                        <label for="question-1-answers-C" style="font-size:23px;padding:10px 5px;">C) DDoS</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" oninput="document.getElementById('l2').className='btn btn-success'"/>
                        <label for="question-2-answers-D" style="font-size:23px;padding:10px 5px;">D) Operating System</label>
                    </div>
                
 
     </li>
                <li id="Q3" style="display:none">
		
            
                    <h3 style="padding-top:15px">Which of the following four passwords is the most secure?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" oninput="document.getElementById('l3').className='btn btn-success'"/>
                        <label for="question-1-answers-A" style="font-size:23px;padding:10px 5px;">A) Boating123</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" oninput="document.getElementById('l3').className='btn btn-success'"/>
                        <label for="question-3-answers-B" style="font-size:23px;padding:10px 5px;">B) WTh!5Z</label>
                    </div><div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" oninput="document.getElementById('l3').className='btn btn-success'"/>
                        <label for="question-1-answers-C" style="font-size:23px;padding:10px 5px;">C) kavach*48</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" oninput="document.getElementById('l3').className='btn btn-success'"/>
                        <label for="question-3-answers-D" style="font-size:23px;padding:10px 5px;">D) 123456</label>
                    </div>
                    
                    
                
           
    </li>
                <li id="Q4" style="display:none">
		

                    <h3 style="padding-top:15px">Criminals access someone’s computer and encrypt the user’s personal files and data. The user is unable to access this data unless they pay the criminals to decrypt the files. This practice is called …</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" oninput="document.getElementById('l4').className='btn btn-success'"/>
                        <label for="question-4-answers-A" style="font-size:23px;padding:10px 5px;">A) Botnet</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" oninput="document.getElementById('l4').className='btn btn-success'"/>
                        <label for="question-4-answers-B" style="font-size:23px;padding:10px 5px;">B) Ransomware</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" oninput="document.getElementById('l4').className='btn btn-success'"/>
                        <label for="question-4-answers-C" style="font-size:23px;padding:10px 5px;">C) Driving</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" oninput="document.getElementById('l4').className='btn btn-success'"/>
                        <label for="question-4-answers-D" style="font-size:23px;padding:10px 5px;">D) Spam</label>
                    </div>
                
            
    </li>
                <li id="Q5" style="display:none">
		

                
                    <h3 style="padding-top:15px">What kind of cybersecurity risks can be minimized by using a Virtual Private Network (VPN)?</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" oninput="document.getElementById('l5').className='btn btn-success'"/>
                        <label for="question-5-answers-A" style="font-size:23px;padding:10px 5px;">A) Use of insecure Wi-Fi networks</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" oninput="document.getElementById('l5').className='btn btn-success'"/>
                        <label for="question-5-answers-B" style="font-size:23px;padding:10px 5px;">B) Key-logging</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" oninput="document.getElementById('l5').className='btn btn-success'"/>
                        <label for="question-5-answers-C" style="font-size:23px;padding:10px 5px;">C) De-anonymization by network operators</label>
                    </div>
                    <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" oninput="document.getElementById('l5').className='btn btn-success'"/>
                        <label for="question-5-answers-D" style="font-size:23px;padding:10px 5px;">D) Phishing attacks</label>
                    </div>
                    
                </li>
                


                </ol>

    </div>
    </div><input type="submit" id="B" value="Submit" class="submitbtn btn btn-primary" style="display:none;float:bottom">
    </div>
    </form>
   </div>
   <?php endif ?>
<?php if ($pp>0) : ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" id="grad" style="padding: 10px 15px; background-color: #ff0000; border-radius: 7px">
            <h2 class= "display-4" style="text-align: center; color: white; font-size: 60px">Results</h2>
            <br>
            <h3 style="color: white; margin-left: 15px">
                <?php if ($pp > 0 and $pp < 5) {
                    echo "You scored ", $pp, " points out of 5!";
                } else {
                    echo "Wow! You scored full marks in the Quiz! ";
                } 
                ?>
                <br>
                <?php if ($pp >= 2) {
                    echo "Congratulations! you got 5 more cyber secure points";
                   
                }
                 else {
                    echo "If you had scored ", 3-$pp, " more points, you would have got 5 more cyber secure points!";
                }
                ?>
            </h3>
            <br>
            <h3> >> Leaderboard:</h3>
            <div class="container">
<table class="table table-bordered table-danger">
   <thead>
    <tr>
      <th scope="col">Rank</th>
      <th scope="col">Username</th>
      <th scope="col">Score</th>
     
    </tr>
  </thead>
  <tbody>
  <?php
  $i=1;
    $sql = "SELECT USERNAME, CQ2POINTS,NAME FROM USERS ORDER BY CQ2POINTS DESC LIMIT 5";
$result = mysqli_query($conn, $sql);


  
    while($row = mysqli_fetch_assoc($result) and $row["CQ2POINTS"] != 0) {
    if (strlen($row["NAME"])==0){
    echo "<tr>","<td>",$i,"</td>","<td>",$row["USERNAME"],"</td>","<td>",$row["CQ2POINTS"],"</td>","</tr>";
    $i++;
    }
    else {
echo "<tr>","<td>",$i,"</td>","<td>",$row["NAME"],"</td>","<td>",$row["CQ2POINTS"],"</td>","</tr>";
    $i++;
    }
  
  }


?>
  </tbody>
</table>
<br>
            <a href="https://cyberkavach.epizy.com/home.php" type="button" class="btn btn-light btn-lg btn-block">Back to Home</a>
            </div>
        </div>
    </div>
</div>
<?php endif ?>
  </div>
    </div>
     </div>
         <br>
    <br>
<br> 
 <script>
         function Q1a() {
            document.getElementById("demo").innerHTML = "Question 1";
         }
         function Q1b() {
            document.getElementById('Q1').style.display='block';
            document.getElementById('B').style.display='block';
            document.getElementById('Q2').style.display='none';
            document.getElementById('Q3').style.display='none';
            document.getElementById('Q4').style.display='none';
            document.getElementById('Q7').style.display='none';
            document.getElementById('Q8').style.display='none';
            document.getElementById('Q9').style.display='none';
            document.getElementById('Q10').style.display='none';
            document.getElementById('Q6').style.display='none';
            document.getElementById('Q5').style.display='none';
         }
         function Q2a() {
            document.getElementById("demo").innerHTML = "Question 2";
         }
         function Q2b() {
            document.getElementById('Q2').style.display='block';
            document.getElementById('Q1').style.display='none';
            document.getElementById('Q3').style.display='none';
            document.getElementById('Q4').style.display='none';
            document.getElementById('Q5').style.display='none';
            document.getElementById('Q6').style.display='none';
            document.getElementById('Q7').style.display='none';
            document.getElementById('Q8').style.display='none';
            document.getElementById('Q9').style.display='none';
            document.getElementById('Q10').style.display='none';
            document.getElementById('B').style.display='block';
         }
         function Q3a() {
            document.getElementById("demo").innerHTML = "Question 3";
         }
         function Q3b() {
            document.getElementById('Q3').style.display='block';
            document.getElementById('Q2').style.display='none';
            document.getElementById('Q1').style.display='none';
            document.getElementById('Q4').style.display='none';
            document.getElementById('Q5').style.display='none';
            document.getElementById('B').style.display='block';
            document.getElementById('Q7').style.display='none';
            document.getElementById('Q8').style.display='none';
            document.getElementById('Q9').style.display='none';
            document.getElementById('Q10').style.display='none';
            document.getElementById('Q6').style.display='none';
         }
         function Q4a() {
            document.getElementById("demo").innerHTML = "Question 4";

         }
         function Q4b() {
            document.getElementById('Q4').style.display='block';
            document.getElementById('Q2').style.display='none';
            document.getElementById('Q3').style.display='none';
            document.getElementById('Q1').style.display='none';
            document.getElementById('Q5').style.display='none';
            document.getElementById('B').style.display='block';
            document.getElementById('Q6').style.display='none';
            document.getElementById('Q7').style.display='none';
            document.getElementById('Q8').style.display='none';
            document.getElementById('Q9').style.display='none';
            document.getElementById('Q10').style.display='none';
         }
         function Q5a() {
            document.getElementById("demo").innerHTML = "Question 5";
         }
         function Q5b() {
            document.getElementById('Q5').style.display='block';
            document.getElementById('Q2').style.display='none';
            document.getElementById('Q3').style.display='none';
            document.getElementById('Q4').style.display='none';
            document.getElementById('Q6').style.display='none';
            document.getElementById('Q1').style.display='none';
            document.getElementById('Q7').style.display='none';
            document.getElementById('Q8').style.display='none';
            document.getElementById('Q9').style.display='none';
            document.getElementById('Q10').style.display='none';
            document.getElementById('B').style.display='block';
         }
         
      </script>
               <footer class="page-footer font-small blue pt-4" style="background-color: #ff9191;">
      <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase">Cyber Safety</h5>
                    <p>Cyber Security is trying to be safe on the internet and is the act of maximizing a user's
                        awareness of
                        personal safety and security risks to private information and property associated with using
                        the
                        internet,
                        and the self-protection from computer crime.</p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">
                   
                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                   

                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3" style="background-color:#fc3f3f; color: white">
            2021<br>
            <a>Cyber Safe</a>
        </div>
    </footer>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    </body>
    </html>
