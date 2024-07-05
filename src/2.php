<!-- isset() & empty() -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="2.php" method="POST">
        <label for="">username: </label>
        <br>
        <input type="text" name="username">
        <br>
        <label for="">password: </label>
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit" name="login" value="Log in"> <br>


    </form>
    
</body>
</html>
<?php
    /*
    foreach($_POST as $key => $value){
        echo "{$key} : {$value} <br> ";


    }
    */

    if(isset($_POST["login"])){
        echo "You tried to login"."<br>";
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "please enter your username"."<br>";
        }else{
            echo "Hello {$username}, welcome back"."<br>";

        }

        if(empty($password && $username)){
            echo "please enter your password"."<br>";
        }else{
            echo "Login success"."<br>";
            
        }

    }
    
?>