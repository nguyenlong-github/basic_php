<!-- radio buttons -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chọn Thẻ Tín Dụng</title>
</head>
<body>
    <form action="3.php" method="POST">
        <label>
            <input type="radio" name="credit_card" value="visa"> VISA
        </label><br>
        <label>
            <input type="radio" name="credit_card" value="master_card"> MASTER CARD
        </label><br>
        <label>
            <input type="radio" name="credit_card" value="paypal"> PAYPAL
        </label><br>
        <input type="submit" name="confirm" value="Xác nhận">
    </form>
</body>
</html>

<?php
    if(isset($_POST["confirm"]) && isset($_POST["credit_card"])) {
        $credit_card = $_POST["credit_card"];
        
        switch($credit_card) {
            case "visa":
                echo "Bạn chọn: VISA";
                break;
            case "master_card":
                echo "Bạn chọn: MASTER CARD";
                break;
            case "paypal":
                echo "Bạn chọn: PAYPAL";
                break;
            default:
                echo "Chọn thẻ đi nhé";
        }
    } else {
        echo "Vui lòng chọn một phương thức thanh toán.";
    }
?>

