<?php 
    // Capture the data from our form
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Create variable to match email and pasword against
    $correct_email = 'test@test.com';
    $correct_password = 'password';
    
    // Check if the data is good 
    if ($email == $correct_email && $password == $correct_password){
        //Successful
        echo "<h1>Login successful</h1>";
        echo "<p>Email Address: $email</p>";
        echo "<p>Password: $password</p>";
        
    } else {
        //Error message
        echo '<h1>Sorry try again</h1>';
        echo '<a href="login.php">Go back</a>';
    }
?>