<?php
header("Content-Type: text/json");

require_once("../utils/csv.php");
try {
    $csv = file_get_contents($_FILES["file"]["tmp_name"]);

    $data = str_getcsv($csv, "\n");

    if (!$data) die("{ data: [], status: 500 }");
    
    echo array_to_json(csv_to_array($data));
    

} catch (Error $e) {
    die($e);
} 

