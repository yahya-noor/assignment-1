<?php
// Temperature Converter
echo "Enter the temperature value: ";
$temperature = (float) readline();

echo "Choose Conversion Type (1 for Celsius to Fahrenheit, 2 for Fahrenheit to Celsius): ";
$choice = (int) readline();

switch ($choice) {
    case 1:
        // Celsius to Fahrenheit
        $convertedTemp = ($temperature * 9/5) + 32;
        echo "The temperature in Fahrenheit is: " . $convertedTemp . "°F\n";
        break;
    case 2:
        // Fahrenheit to Celsius
        $convertedTemp = ($temperature - 32) * 5/9;
        echo "The temperature in Celsius is: " . $convertedTemp . "°C\n";
        break;
    default:
        echo "Invalid choice.\n";
}

