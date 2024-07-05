<!-- checkboxes -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="4.php" method="POST">
        <input type="checkbox" name="piza" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="banhmi" value="Bánh Mì">
        Bánh Mì <br>
        <input type="checkbox" name="ramen" value="Ramen">
        Ramen <br>
        <input type="checkbox" name="hotpot" value="Hotpot">
        Hotpot <br>
        <input type="submit" name="submit">
        

    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        if(isset($_POST["piza"])){
            echo "You like piza! <br> " ;
        }
        if(isset($_POST["banhmi"])){
            echo "You like banh mi! <br>";
        }
        if(isset($_POST["ramen"])){
            echo "You like ramen! <br>";
        }
        if(isset($_POST["hotpot"])){
            echo "You like hotpot! <br>";
        }

        if(empty($_POST["piza"])){
            echo "You don't like piza! <br> " ;
        }
        if(empty($_POST["banhmi"])){
            echo "You don't like banh mi! <br>";
        }
        if(empty($_POST["ramen"])){
            echo "You don't like ramen! <br>";
        }
        if(empty($_POST["hotpot"])){
            echo "You don't like hotpot! <br>";
        }

    }


?>