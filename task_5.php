<?php
function generatePassword($length) {
    // Define the characters that can be used in the password
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $shuffledCharacters=str_shuffle($characters);
    $subCharacter=substr($shuffledCharacters,0,$length);
    return $subCharacter;

    // Generate a random password of the specified length
    // return substr(str_shuffle($characters), 0, $length);
  }
  $password = generatePassword(12);

echo "The generated password is: $password.\n";

?>
