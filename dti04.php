<?php
    //Index Array
    $dataA = [10,20,30,40,50];
    $dataB = array(11,22,33,44,55);
    $dataC = array("aa","bb","cc","dd","ee");

    echo $dataA[3] . "&nbcp;" ;
    echo $dataB[1] . " " ;
    echo $dataC[4] . " " ;

    //Associative Array
    $faculty = ["as" => "Arts Sci", "en" => "Engineer", "bu"=>"Business"];

    echo "<br/>" . $faculty["as"];
    echo "<br/>" . $faculty["bu"]; 
    echo "<br/>" . $faculty["en"]; 
    ?>