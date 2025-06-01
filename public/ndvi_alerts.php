<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$json_file = "alerts.json";

if (file_exists($json_file)) {
    echo file_get_contents($json_file);
} else {
    echo json_encode(["error" => "Fichier JSON introuvable"]);
}
?>
