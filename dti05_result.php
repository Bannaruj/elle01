<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Money Share result</h1>
    <hr>
    <?php
        if(empty($_GET["num1"])==true || empty($_GET["num2"])==true ){
            echo "ไม่สามารถคำนวนได้กรุณากรอกเลขแรกให้ครบ";
            header("Refresh:3; url=dti05.php");
            
        }else if ( floatval($_GET["num1"]) == 0 || intval($_GET["num2"]) == 0) {
            echo "ไม่สามารถคำนวนได้กรุณากรอกเลขสองให้ครบ";
            header("Refresh:3; url=dti05.php");
            
        }else
        $result = $_GET["num1"] / $_GET["num2"];
        echo "เงิน" . $_GET["num1"] . "บาท + เงิน";
        echo "คน". $_GET["num2"] . " คน = ";
        echo "หารกันคนละ"  . $result . "บาท";
    ?>
</body>
</html>