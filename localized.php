<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create('en_PH');

for ($i = 1; $i <= 50; $i++){
    $fullname = $faker->fullname;
    $emailaddress = $faker->email;
    $phonenumber = $faker->phoneNumber;
    $completeAddress = $faker->address;
    $birthdate = $faker->date('Y-m-d H:i:s');
    $jobtitle = $faker->jobTitle;
}
?>