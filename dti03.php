<?php
    //function ทั้งหมด
    function showHello(){
        echo "<h1 style=\"color:#000ff\">ELLE</h1>";
    }

    showHello();

    function showHi($fname,$lname){
        echo "ยินดีต้อนรับ" . $fname . " " . $lname;
        echo "<br/>";
    }

    showHi("สมบัติ" , "ใจดี");
    showHi("ต้อย" , "หน้าหี");

    function sendBye(){
        echo "Wow wow wow";
        return "Bye Bye";
    }

    echo sendBye();
    $data = sendBye();
    echo "<br/>" . $data . "DTI-SAU";

    function sumNumber($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    }

    echo sumnumber(100,20);

    //ArrowFucntion #จะเป็นauto return
    $woo = fn() => "<br/>woo woo woo";
    echo $woo();

    $hi = fn($nickname) => "Hello" . $nickname;
    echo $hi("bat");
?>