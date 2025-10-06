<?php
$sensetiveData="saba123@123";
$salt = bin2hex(random_bytes(16)); // Generate a random salt
$pepper="Asecretpepperstring";
$datatoHash = $sensetiveData . $salt . $pepper;
$hash=hash('sha256', $datatoHash);
echo "Hashed Password: " . $hash . "\n";


$sensetiveData="saba123@123";
$storedSalt = $salt;
$storedHash = $hash;
$pepper='Asecretpepperstring';
$datatoHash = $sensetiveData . $storedSalt . $pepper;
$VerificationHash = hash('sha256', $datatoHash);
if($storedHash==$VerificationHash){
    echo "The Data is same";
}else{
    echo "Data is not same";
}