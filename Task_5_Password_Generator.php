<?php

// Function to generate a random password
function generatePassword($length) {
    
    $lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialCharacters = '!@#$%^&*()_+';

    
    $allCharacters = $lowercaseLetters . $uppercaseLetters . $numbers . $specialCharacters;

    
    $totalCharacters = strlen($allCharacters);

    
    $password = '';
    

    
    for ($i = 0; $i < $length; $i++) {
        
        $randomIndex = mt_rand(0, $totalCharacters - 1);

        
        $password .= $allCharacters[$randomIndex];
    }

    return $password;
}

// Generate a password with a length of 12 characters
$password = generatePassword(12);

// Print the generated password
echo "Generated Password: $password\n";

?>
