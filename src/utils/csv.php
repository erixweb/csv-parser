<?php

function csv_to_array(array $data, array $headers): array {
    $result = [];

    foreach($data as $row) {
        $result[] = array_combine($headers, explode(",", $row));
    }

    return $result;
}
function array_to_json(array $array) {
    return json_encode($array);
}