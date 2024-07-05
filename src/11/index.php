<!-- password hashing -->

<?php
    $password = "pizza123";
    $hash = password_hash($password, PASSWORD_DEFAULT);

    //echo "{$hash}";

    if(password_verify("pizza123", $hash)){
        echo "welcome back";
    }else{
        echo "Wrong";
    }


?>