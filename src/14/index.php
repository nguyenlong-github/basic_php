<?php
    include("database.php");
    //Tìm user cụ thể
    //$sql = "SELECT * FROM users WHERE user = 'user' ";
    //tìm tất cả user
    $sql = "SELECT * FROM users";
    $result  = mysqli_query($conn,$sql);
    //Sử dụng if() để nếu trong table không có bản ghi nào
    //thì sẽ không chạy code, nếu không sẽ bị lỗi
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){
            echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["password"] . "<br>";
        }
        
       

    }else("No user found");

    

    mysqli_close($conn);
?>