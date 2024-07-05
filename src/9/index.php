<!-- $_SESSION -->
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
    <form action="index.php" method="POST">
        username: <br>
        <input type="text" name="username"><br>
        password: <br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">

    </form>
</body>
</html>


<?php

/*
    isset():
     Kiểm tra xem biến có tồn tại
     và không phải là null hay không.
    !empty():
     Kiểm tra xem biến có tồn tại
     và không rỗng hay không.

    ■　null thì không chứa gì cả 
    ■ rỗng thì có thể chứ 0, 0.0,mảng rỗng, false,...

*/


    if(isset($_POST["login"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: home.php");




        }else{
            echo "missing username / password";
        }

    }
?>
