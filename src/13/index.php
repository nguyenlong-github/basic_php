<?php
    include("database.php");

    $username = "user";
    $password = "123";

    $sql = "INSERT INTO users (user,password)
            VALUES ('$username', '$password') ";

    try{
        mysqli_query($conn,$sql);
        echo "User is registered";
    }catch(mysqli_sql_exception){
        echo "Failed";
    }

    
    


    mysqli_close($conn);

?>

