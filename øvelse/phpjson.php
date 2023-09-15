<?php
// opgave - lave json eksempler ud fra php

$json['name'] = "Mikkel";
$json['age'] = 27;
$json['city'] = "Copenhagen";
$json['animals'] = ["dog", "cat", "fish"];
$json['status'] = "Alive";

echo json_encode($json);

// var_dump($json);
?>

<?php
// opgave - lave nested arrays i php og konveter det til json

$json['name'] = "Noah";
$json['age'] = 47;
$json['city'] = "Aarhus";

$json['animals'] = array(
    "pets" => ["Skildpadde", "Hamster"],
    "aquatic" => ["fish"]
);

$json['status'] = "Living";

// konveterede hele array'et til json
$jsonData = json_encode($json);

if ($jsonData === false) {
    echo 'JSON encoding failed.';
} else {
    echo $jsonData;
}
?>

<?php
// Ternary Operator opgave
$name2['name'] = "Sarah";
$name2 = isset($name2['name']) ? $name2['name'] : "Default Name";
echo $name2;


?>