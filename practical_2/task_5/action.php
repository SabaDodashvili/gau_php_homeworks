<?php
$arrOne = ['city' => 'tbilisi', 'street' => 'vake'];
$arrTwo = [
  array(
    "Make" => "Toyota",
    "Model" => "Corolla",
    "Color" => "White",
    "Mileage" => 24000,
    "Status" => "Sold"
  ),

  array(
    "Make" => "Toyota",
    "Model" => "Camry",
    "Color" => "Black",
    "Mileage" => 56000,
    "Status" => "Available"
  ),

  array(
    "Make" => "Honda",
    "Model" => "Accord",
    "Color" => "White",
    "Mileage" => 15000,
    "Status" => "Sold"
  )
];

$arrThree = [
  [
    "Make" => "Toyota",
    "Model" => "Corolla",
    "Color" => "White",
    "Mileage" => 24000,
    "Status" => "Sold"
  ],
  [
    "Make" => "Toyota",
    "Model" => "Camry",
    "Color" => "Black",
    "Mileage" => 56000,
    "Status" => "Available"
  ],
  [
    "Make" => "Honda",
    "Model" => "Accord",
    "Color" => "White",
    "Mileage" => 15000,
    "Status" => "Sold"
  ]
];

echo $arrThree[0]['Color'];

echo "<pre>" . print_r($arrTwo[0]) . "</pre>";

echo "<div>";
echo "</div>";
