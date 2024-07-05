<!-- sanitize/validate input -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="7.php" method="POST">
        Username:<br>
        <input type="text" name="username" ><br>
        Password:<br>
        <input type="password" name="password" ><br>
        Email:<br>
        <input type="email" name="email" ><br>
        Age:<br>
        <input type="number" name="age" min="1" ><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php 
    if(isset($_POST["login"])){
        // Sanitize and validate input
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        if ($email === false) {
            echo "Invalid email format.";
        } elseif ($age === false) {
            echo "Invalid age. Please enter a valid number.";
        } else {
            echo "Hello {$username}, welcome back.<br>";
            echo "Your email: {$email}<br>";
            echo "Your age: {$age}<br>";
        }
    }
?>
