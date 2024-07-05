<!-- associative arrays -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="1.php" method="POST">
        <label for="country">Enter your conuntry : </label>
        <input type="text" id="country" name="country">
        <input type="submit">
    </form>
    
</body>
</html>

<?php 
    $capitals = array("VIETNAM"=>"HANOI",
                        "USA"=>"Washinton",
                        "Japan"=>"Tokyo",
                        "India"=>"New Delhi");  
    if(isset($_POST["country"])){
        $capital = $_POST["country"];
        echo $capitals["{$capital}"];

    }
    
    
?>