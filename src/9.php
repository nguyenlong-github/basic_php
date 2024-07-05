<!-- Cookie -->

<!-- 
    Cookies trong PHP được sử dụng để lưu trữ thông tin
    trên trình duyệt của người dùng và truy xuất lại thông tin này
    trong các phiên làm việc sau. 
-->

<?php
    //setcookie("key","value", time() + 86400 );
    //■　1 ngày có 86400 s
    //có thêm xem cookie bằng f12 trong phần application
    setcookie("fav_food","pizza",time() + (86400*2) , "/" );
    setcookie("fav_drink","coke",time() + (86400 * 3), "/" );
    setcookie("fav_icecream","matcha",time() + (86400 * 4), "/" );

    // foreach($_COOKIE as $key => $value ){
    //     echo "{$key} = {$value} <br>";
    // }
    // fav_drink = coke
    // fav_icecream = matcha
    // fav_food = pizza

    if(isset($_COOKIE["fav_food"])){
        echo "Buy some {$_COOKIE["fav_food"]}";
    }else{
        echo "I dont know ur Favorite Foods";
    }

    



?>