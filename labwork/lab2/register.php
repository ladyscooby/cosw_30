<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register Form</title>
    </head>
    <body>
        <h1>Register Form</h1>
        <p>Register today!</p>
        <form action="process_register.php" method="POST">
            
            <label for="first_name">First Name: </label>
            <input type="text" name="first_name" id="first_name" required/><br><br>
            
            <label for="last_name">Last Name: </label>
            <input type="text" name="last_name" id="last_name" required/><br><br>
            
            <label for="email">Email Address: </label>
            <input type="email" name="email" id="email" required/><br><br>
            
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required/><br><br>
            
            <label for="password">Confirm Password: </label>
            <input type="password" name="confirm_password" id="confirm_password" required/><br><br>
            
            <button>Register Now!</button
        </form>
    </body>
</html> 
