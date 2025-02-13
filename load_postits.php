<?php
$file = "postits.csv";
$postIts = [];

if (file_exists($file)) {
    $handle = fopen($file, "r");
    while (($data = fgetcsv($handle)) !== FALSE) {
        $postIts[] = [
            "content" => $data[0],
            "x" => $data[1],
            "y" => $data[2],
            "color" => $data[3],
            "userId" => $data[4],
            "timestamp" => $data[5]
        ];
    }
    fclose($handle);
}

echo json_encode($postIts);
?>
