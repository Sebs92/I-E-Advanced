<?php
$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    $file = fopen("postits.csv", "a"); // Ouvrir en mode ajout
    fputcsv($file, [$data["content"], $data["x"], $data["y"], $data["color"], $data["userId"], $data["timestamp"]]);
    fclose($file);

    echo json_encode(["success" => true]);
} else {
    echo json_encode(["error" => "Données invalides"]);
}
?>
