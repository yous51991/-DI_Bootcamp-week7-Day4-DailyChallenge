<?php

$json_object = json_decode(file_get_contents("my_data.json"), true);

// show data
foreach ($json_object["Student"] as $key => $value) {
    echo "Name : " . $value["Name"] ."<br/>";
    echo "Roll : " . $value["Roll"] ."<br/>";
    echo "subject : " . $value["subject"] ."<br/>";
}