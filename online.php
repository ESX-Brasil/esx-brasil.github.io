<?php
    echo '{"online":67,"players":';
    header("Content-Type: application/json");
    $file='http://149.28.129.28:31121/players.json';
    $arr = file_get_contents($file);//this creates an object from the xml file
    //$json= ''.json_encode($arr).''; //must wrap in parens and end with semicolon

    print_r($arr); //callback is prepended for json-p
    echo '}';
?>
