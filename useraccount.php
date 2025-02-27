<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create('en_PH');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>User Accounts</h1>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Username</th>
                <th>Password</th>
                <th>Account Created</th>
            </tr>
        </thead>
        <tbody>
        <?php for ($i = 1; $i <=10; $i++): ?>
                <tr>
                    <td><?= htmlspecialchars($faker->uuid()) ?></td>
                    <td><?= htmlspecialchars($faker->name) ?></td>
                    <td><?= htmlspecialchars($faker->email) ?></td>
                    <td><?= htmlspecialchars(explode('@', $faker->email)[0])?></td>
                    <td><?= htmlspecialchars($faker->sha256()) ?></td>
                    <td><?= htmlspecialchars($faker->dateTimeBetween('-2 years', 'now')) ?></td>
                </tr> 
        <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>