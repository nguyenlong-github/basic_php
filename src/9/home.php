<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>This is Home Page</h1>
    <a href="index.php"> This go to login page</a>
    <form action="home.php" method="POST">
        <input type="submit" name="logout" value="logout">
    </form>
    <br>
</body>
</html>

<?php
    echo $_SESSION["username"] ."<br>";
    echo $_SESSION["password"] ."<br>";

    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: index.php");
    }
    
?>