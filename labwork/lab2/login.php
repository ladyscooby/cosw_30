<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
    </head>
    <body>
        <h1>Login Form</h1>
        <p>Please enter you email and password.</p>
        <form action="process_login.php" method="POST">
            
            <label for="email">Email Address: </label>
            <input type="email" name="email" id="email" required/><br><br>
            
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required/><br><br>
            
            <button>Login!</button>
        </form>
    </body>
</html> 