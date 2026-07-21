<?php

$products = [
    "Laptop Lenovo",
    "iPhone 16",
    "Samsung S25",
    "Dell Monitor",
    "Lenovo ThinkPad"
];

$search = $_GET["search"];

echo "<h2>Αποτελέσματα</h2>";

foreach ($products as $product) {

    if (stripos($product, $search) !== false) {
        echo $product . "<br>";
    }

}