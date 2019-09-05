<?php 
    // Capture the data from our form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $confirm_password = $_POST['confirm_password'];
    
    // Create variable to match email and pasword against
    $correct_email = 'test@test.com';
    $correct_password = 'password';
    $confirm_password = $correct_password; 
    
    
    // Check if the data is good 
    if ($email == $correct_email && $password == $correct_password && $confirm_password){
        //Successful
        echo "<h1>Login successful</h1>";
        echo "<p>First Name: $first_name</p>";
        echo "<p>Last Name: $last_name</p>";
        echo "<p>Email Address: $email</p>";
        echo "<p>Password: $password</p>";
        
    } else {
        //Error message
        echo '<h1>Sorry try again</h1>';
        echo '<a href="register.php">Go back</a>';
    }
    
       
?>