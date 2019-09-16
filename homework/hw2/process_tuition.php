<!DOCTYPE HTML>  
<html>
<head>
	<meta charset="utf-8">
<style type="text/css">
	body{
		background-color: black;
		text-align: center;
		color: red;
		margin: 0;
		padding: 5%;
		
	}
  
	img{
		
	}
	header{
		background-attachment: scroll;
		background-color: black;
		margin: 6px 0px 2px;
	}
	div{
		border: 2px solid black;
		background-color: beige;
		color: black;
		text-align: center;
		padding: 2% 20%;
	}
	footer{
		color: red;
	}
</style>

<title>LBCC Tuition Calculator Results</title>     
</head>
<body> 
<header>
	
	<img src="https://www.lbcc.edu/sites/main/files/imagecache/medium/main-images/viking_logo3.jpg?1563728376">
	
	</header>	

	
<div>
<?php
// Capture data from form
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$resident = $_POST['resident'];
$units = $_POST['units'];
$card = $_POST['card'];
$parking = $_POST['parking'];
$healthfee = $_POST['healthfee'];

//Reply output
switch ($gender) {
    case "M":
        echo "<h1>Hello Mr. $last_name, here are your tuition calculations!</h1>";
        break;
    case "F":
        echo "<h1>Hello Ms/Mrs. $last_name, here are your tuition calculations!</h1>";
        break;
    case "N":
        echo "<h1>Hello $first_name, here are your tuition calculations!</h1>";
        break;
}

//Calculations

$healthfee = 20;
$tuition = $units * $resident;
$registration = $tuition + $healthfee + $card + $parking;
$award = rand(0, $registration);
$total = $registration - $award;

//Output fees and total balance
echo "<h2>LBCC Tuition Calculator Results:</h2>";
echo "<p>Cost of Tuition: $units unit(s) x $$resident per unit = <strong> $$tuition </strong></p>";
echo "<p>Student Health Fee: <strong> $$healthfee</strong></p>";
echo "<p>College Services Card: <strong> $$card</strong></p>";
echo "<p>Parking Permit: <strong> $$parking</strong></p>";
echo "<p>Total Registration Costs:<strong> $$registration</strong></p>";
echo "<p>Scolarship Award: <strong> $$award</strong></p>";
echo "<p><strong>Total Tuition Due: $$total</strong></p>";
?>
</div>	
	<footer> &copy 2019 Dominiqa Johnson</footer>
</body>
</html>