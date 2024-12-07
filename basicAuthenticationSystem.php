<?php
// Basic Authentication System
define('USERNAME', 'admin'); // Predefined username
define('PASSWORD', '12345'); // Predefined password

echo "Enter Username: ";
$inputUsername = readline();
echo "Enter Password: ";
$inputPassword = readline();

if ($inputUsername === USERNAME && $inputPassword === PASSWORD) {
    echo "Login Successful!\n";
} else {
    echo "Invalid Credentials.\n";
}
