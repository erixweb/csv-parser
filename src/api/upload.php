<?php
header("Content-Type: text/json");

require_once("../utils/csv.php");
try {
    $file = $_FILES["file"];

    if (!str_ends_with($file["name"], ".csv")) die('{ data: [], message: "Input file is not a CSV or does not have a .csv extension.", status: 403 }');
    
    $csv = file_get_contents($file["tmp_name"]);

    $data = str_getcsv($csv, "\n");

    if (!$data) die("{ data: [], status: 500 }");

    $headers = explode(",", array_shift($data));
    
    echo array_to_json(array("data" => csv_to_array($data, $headers)));
    

} catch (Error $e) {
    die($e);
} 

