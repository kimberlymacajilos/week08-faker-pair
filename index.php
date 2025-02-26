<?php

include "connection.php";
require 'vendor/autoload.php';

$faker = Faker\Factory::create('en_PH');

for ($i = 1; $i <= 50; $i++) {
    $name = $faker->company;
    $contactnum = $faker->phoneNumber;
    $email = $faker->email;
    $address = $faker->address;
    $city = $faker->city;
    $country = "Philippines";
    $postal = $faker->postcode;
    
    $sql = "INSERT INTO office (name, contactnum, email, address, city, country, postal)
            values ('$name','$contactnum', '$email', '$address', '$city', '$country', '$postal')";
    
    mysqli_query($conn, $sql);
            
}

for ($i = 1; $i <= 200; $i++) {
    $lastname = $faker->lastName;
    $firstname = $faker->firstName;
    $office_id = $faker->numberBetween(1, 50);
    $address = $faker->address;
    
    $sql = "INSERT INTO employee (lastname, firstname, office_id, address)
            values ('$lastname', '$firstname', '$office_id', '$address')";
    
    mysqli_query($conn, $sql);
}

for ($i = 1; $i <= 500; $i++) {
    $employee_id = $faker->numberBetween(1, 200);
    $office_id = $faker->numberBetween(1, 50);
    $datelog = $faker->date('Y-m-d H:i:s');
    $action = $faker->word;
    $remarks = implode(' ', $faker->words(10));
    $documentcode = $faker->bothify('DOC###-???');
    
    $sql = "INSERT INTO transaction (employee_id, office_id, datelog, action, remarks, documentcode)
            VALUES ('$employee_id', '$office_id', '$datelog', '$action', '$remarks', '$documentcode')";
           
    mysqli_query($conn, $sql);     
}
?>