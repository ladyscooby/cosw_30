<?php # process_contact.php 
// Create a shorthand for the form data:
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];     
$email = $_POST['email'];
$cash = $_POST['cash'];
$comments = $_POST['comments'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$interests = $_POST['interests'];
$submit = $_POST['submit'];


switch ($gender) {
    case "M":
        echo "Hello Sir!";
        break;
    case "F":
        echo "Hello Ma'am!";
        break;
    case "N":
        echo "Hello beautiful person!";
        break;
}

echo "<p>Thank you, <strong> $first_name $last_name</strong>, for the following comments:</p>
<pre>$comments</pre>
<p>We will reply to you at <em>$email </em>.</p>"; 

?> 
   
<!DOCTYPE HTML>  
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">
	
<style type="text/css">
	body{
		background-image : url(https://i.ytimg.com/vi/mMKyZntMxBo/maxresdefault.jpg);
		background-size: cover;
		text-align: center;
		font-family: 'Concert One', cursive;
		color: white;
	}
	
	header{
		font-family: 'Concert One', cursive;
		color: white;
	}
	
</style>
<meta charset="utf-8">
<title>Simple HTML Form</title>     
</head>
<body> 
<header>
	<h1>Thank You for Your Support!</h1>
	
	<img src="https://upload.wikimedia.org/wikipedia/en/4/4a/Politically_Inept.jpg">
	</header>	
	</body>
</html>