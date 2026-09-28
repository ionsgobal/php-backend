<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>

    <form action="process_register.php" method="POST">
        <label for="username">Username:</label> 
        <input type="text" id="username" name="username">
        <br>
        <label for="email">Email:</label> 
        <input type="text" id="email" name="email">
        <br>
        <label for="age">Age:</label> 
        <input type="number" id="age" name="age">
        <br>
        <input type="submit" name="submit" id="submit" value="Register">
    </form>
    
</body>
</html>