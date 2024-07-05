<!-- string functions -->

<?php
    $username = "Bro LONG Code";
    $username2 = array("Bro", "LONG", "Code");
    $phone = "123-345-67890";
    //$username = strtolower($username);//bro long
    //$username = strtoupper($username);//BRO LONG
    //$username = trim($username);// xoa toan bo space truoc va sau
    //$username = str_pad($username, 20, "0");//Bro LONG000000000000
    //$username = strrev($username); //GNOL orB
    //$username = str_shuffle($username);//rBoLG ON xap xep tron chu loan len 
    //$equals = strcmp($username,"Bro LONG");// giong nhau:0; khac nhau:1; chuoi 1 < chuoi 2: -1;
    //$equals = strlen($username);//8
    //$phone = str_replace("-","/",$phone); //123/345/67890
    //$index = strpos($phone, "-");//3 se tim ra vi tri ky tu dau tien
    //$firstname = substr($username,0, 3);//Bro : cat chu tu vi tri 0 -> 3
    //$lastname = substr($username, 4); //LONG : cat tu ki tu thu 4 do ve truoc
    $username2 = implode("-", $username2);//Bro-LONG-Code : biến mảng thành chuỗi, nối nhau bằng ký tự mình muốn
    /*------------------------------explode------------------------
    $fullname = explode(" ",$username);//chia một chuỗi thành mảng dựa trên một ký tự phân tách nào đó
    foreach($fullname as $name){
        echo "{$name} <br>";
    }
    
    //------------------------------explode------------------------*/

    
    



    //echo $username . "<br>";
    //echo $equals;
    //echo $phone;
    //echo $count;
    //echo $firstname;
    //echo $lastname;
    echo $username2;

?>