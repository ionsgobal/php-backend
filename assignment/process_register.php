<?php
error_reporting(E_ALL);
ini_set('displaying_errors', 1);
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];
    $username = trim ($_POST["username"]?? "");
    $email = trim ($_POST["email"]?? "");
    $age = trim ($_POST["age"]?? "");

    if (empty($username)) {
        $errors[] = "Username is required.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    }
    if (empty($age)) {
        $errors[] = "Age is required.";
    } 


    if (!empty($username) && strlen($username)<5){
        $errors[] ="Username must be at least 5 characters long.";
    }
    if (!empty($age)) {
        if (!is_numeric($age)) {
            $errors[] = "Age must be 18 or older"
        }
    }

    if (!empty ($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Please enter a valid email address"
        }
    }

    if (!empty($error)) {
        echo "<h2>Registration Failed</h2>";
        echo "<ul>";
        echo "<a href='register.php'>Go Back</a>";

    } else {
        $safeUsername = htmlspecialchars(username);
        $safeEmail = htmlspecialchars(email);
        $safeAge = htmlspecialchars(age);

        echo "<h2>Registration Successfull</h2>";
        echo "<p> Your Registration Was Successfull</p>";
        echo "<h3> Your Details:</h3>";
        echo "<pre>";
        print_r({
            "Username" => $safeUsername,
            "Email" => $safeEmail,
            "Age" => $safeAge
        });
        echo"</pre>";
    }

}else{
    echo "Invalid request.";
}
?>