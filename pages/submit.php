<?php

    $data_file = fopen("example.txt", "w");
    
    $name = $_POST["name"];
    $topic = $_POST["topic"];
    $link = $_POST["link"];

    $text_to_write = $name . "  " . $topic . "  " . $link;

    fwrite($data_file, $text_to_write);
    fclose($data_file);
?>