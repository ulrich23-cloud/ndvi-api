<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$json_file = "alerts.json";

if (file_exists($json_file)) {
    $json = file_get_contents($json_file);
    echo $json;
} else {
    echo json_encode([]);
}
?>
